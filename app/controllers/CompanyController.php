<?php

use Illuminate\Support\MessageBag;

class CompanyController extends BaseController
{

	use Traits\Validators\ContactValidator;

	public function contactInput()
	{
		$params = $this->contactParams();

		return View::make('company.contact.index', [
			'params' => $params,
			'inquiries' => MasterData::contactInquiries(),
			'messages' => new MessageBag(),
		]);
	}

	public function contactConfirm()
	{
		$params = $this->contactParams();
		$validator = $this->contactValidate();

		if ($validator->fails())
		{
			$messages = $validator->messages();
			return View::make('company.contact.index', [
				'params' => $params,
				'inquiries' => MasterData::contactInquiries(),
				'inquiry' => MasterData::contactInquiryByKey($params['inquiry']),
				'messages' => $messages,
			]);
		}

		return View::make('company.contact.confirm', [
			'params' => $params,
			'inquiry' => MasterData::contactInquiryByKey($params['inquiry']),
		]);
	}

	public function contactProc()
	{
		$params = $this->contactParams();
		$validator = $this->contactValidate();

		if ($validator->fails())
		{
			$messages = $validator->messages();
			return View::make('company.contact.index', [
				'params' => $params,
				'inquiries' => MasterData::contactInquiries(),
				'inquiry' => MasterData::contactInquiryByKey($params['inquiry']),
				'messages' => $messages,
			]);
		}

		$params['category'] = $params['inquiry'];
		$inquiry = new Inquiry($params);
		$inquiry->save();

		$mail = new MailSender;
		$params['inquiryName'] = MasterData::contactInquiryByKey($params['inquiry']);
		$mail->sendInquireForAdmin($params);
		return Redirect::to('company/contact/complete');
	}

	public function contactComplete()
	{
		return View::make('company.contact.complete');
	}

	protected function contactParams()
	{
		return Input::only(
			'inquiry',
			'company',
			'name',
			'email',
			'email_confirmation',
			'tel',
			'body'
		);
	}
}
