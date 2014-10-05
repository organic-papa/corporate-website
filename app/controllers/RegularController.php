<?php

class RegularController extends BaseController
{

	use Traits\Validators\RegularValidator;

	public function index()
	{
		return $this->_index();
	}

	public function indexWithPathName($name)
	{
		$entryPathway = User::entryPathwayByName($name);
		if ($entryPathway !== -1)
		{
			Session::put('entryPathway', $entryPathway);
		}
		return $this->_index();
	}

	private function _index()
	{
		return View::make('regular.index', [
			'prefs' => MasterData::prefectureCodes(),
			'sets' => MasterData::regularSets(),
			'cycles' => MasterData::deliveryCycles(),
			'payments' => MasterData::payments(),
			'times' => MasterData::deliveryTimes(),
		]);
	}

	public function register()
	{
		$validator = $this->contactValidate();
		if ($validator->fails())
		{
			$messages = $validator->messages();
			return Response::json(['status' => 'ng', 'messages' => $messages], 400);
		}

		$params = Input::all();
		$params['entry_pathway'] = Session::get('entryPathway', -1);

		DB::transaction(function() use ($params) {
			// 会員登録処理
			$user = new User($params);
			$user->setDefaultValues();
			$user->save();

			// 定期注文登録処理
			$regularOrder = new RegularOrder($params);
			$regularOrder->customer_id = $user->customer_id;
			$regularOrder->save();
		});

		// メール配信
		$mail = new MailSender;
		$mail->sendRegularApplication($params);

		return Response::json(['status' => 'success'], 200);
	}
}
