<?php

class RegularController extends BaseController
{

	use Traits\Validators\RegularValidator;

	public function index()
	{
		$prefs = MasterData::prefectureCodes();
		return View::make('regular.index', ['prefs' => $prefs]);
	}

	public function register()
	{
		$validator = $this->contactValidate();
		if ($validator->fails())
		{
			$messages = $validator->messages();
			return Response::json(['status' => 'ng', 'messages' => $messages], 400);
		}

		// 会員登録処理
		$user = new User(Input::all());
		$user->setDefaultValues();
		$user->save();

		// 定期注文登録処理

		// TODO メール配信

		return Response::json(['status' => 'success'], 200);
	}
}
