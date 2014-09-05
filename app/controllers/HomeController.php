<?php

class HomeController extends BaseController {

	public function zip2add()
	{
		if (!Request::ajax())
		{
			App::abort('404');
		}

		$zipcode = Input::get('zipcode');
		if (!$zipcode)
		{
			return Response::json(['status' => 'ng'], 400);
		}

		$zip = Zip::where('zipcode', $zipcode)->first();
		if (!$zip)
		{
			return Response::json(['status' => 'ng'], 400);
		}

		return Response::json([
			'status' => 'success',
			'code'  => MasterData::prefectureByName($zip->state),
			'state' => $zip->state,
			'city' => $zip->city,
			'town' => $zip->town,
		]);
	}

}
