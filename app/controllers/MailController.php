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
		return Redirect::to('invia')->with('esito','Inviato');
	}
	
	public function Ricezione()
	{
		return View::make('mailmanager.ricezione')
			->with('title','Ricezione')
			->with('navcontroller','Ricezione');	
	}

}
