<?php

class MailController extends \BaseController {

	// Invio Mail
	public function getIndex()
	{
		return View::make('mailmanager.invia')
			->with('title','Creazione Mail');
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
			return Redirect::to('preparazione')->withErrors($validator)->withInput()->with('esito','Non Inviato');
		}
		$mail = Mailinviate::create($input);
		$mail->push();
		return Redirect::to('preparazione')->with('esito','Inviato');
	}
	
	public function MailList()
	{
		$allmail = Mailinviate::qFindAllMail(); //trova tutte le mail del database
		return View::make('mailmanager.ricezione')
			->with('title','Mail Controller')
			->with('allmail', $allmail);	
	}
	
	public function Invio()
	{
		
		$allmail = Mailinviate::qFindAllMail(); //trova tutte le mail del database
		return View::make('mailmanager.ricezione')
			->with('title','BUBU')
			->with('allmail', $allmail);	
	}

}
