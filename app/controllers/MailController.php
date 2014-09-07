<?php

class MailController extends \BaseController {

	// Invio Mail
	public function getIndex()
	{
		return View::make('mailmanager.invia')
			->with('title','Invia')
			->with('esito','Attesa');	
	}

	public function postIndex()
	{
		
		$rules = array(
			'to' => 'required|email',
			'object' => 'required|max:78',
			'text' => 'required|max:100'
		);
		
		$input = Input::all();
		$validator = Validator::make($input, $rules);

		if ($validator->fails()) 
		{
			return Redirect::to('invia')->withErrors($validator)->withInput()->with('esito','Non Inviato');
		}
		$mail = Mailinviate::create($input);
		$mail->push();
		return Redirect::to('invia')->with('esito','Inviato');
	}
	
	public function Ricezione()
	{
		return View::make('mailmanager.ricezione')
			->with('title','Ricezione')
			->with('navcontroller','Ricezione');	
	}

}
