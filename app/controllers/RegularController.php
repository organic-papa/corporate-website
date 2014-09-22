<?php

class RegularController extends BaseController
{

	use Traits\Validators\RegularValidator;

	public function index()
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

		// 会員登録処理
		$user = new User($params);
		$user->setDefaultValues();
		// $user->save();

		// 定期注文登録処理

		// メール配信
		$mail = new MailSender;
		$mail->sendRegularApplication($params);

		return Response::json(['status' => 'success'], 200);
	}
}
