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
		return View::make('mailmanager.list')
			->with('title','Mail Controller')
			->with('allmail', $allmail);	
	}
	
	public function notSended()
	{
		
		
		$notsended = Mailinviate::qFindAllMailnotSendedorConfirmed(); //trova tutte le mail non inviate del database
		
		foreach ($notsended as $notsend) 
		{
			$data = array('text',$notsend['text']);
			Mail::send('emails.prova', $data, function($message) use ($notsend)
			{
				$message->to($notsend->to, $notsend->to)->subject($notsend->object);
			});
			DB::table('mail_inviate')->where('id_mail', $notsend['id_mail'])->update(array('send' => 1));
		}
		
		return View::make('mailmanager.sender')
			->with('title','BUBU')
			->with('allmail', Mailinviate::qFindAllMailnotSendedorConfirmed());	
	}
	
		public function notConfirmed()
	{
		
		
		$notsended = Mailinviate::qFindAllMailnotSendedorConfirmed(); //trova tutte le mail non inviate del database
		
		foreach ($notsended as $notsend) 
		{
			$data = array('text',$notsend['text']);
			Mail::send('emails.prova', $data, function($message) use ($notsend)
			{
				$message->to($notsend->to, $notsend->to)->subject($notsend->object);
			});
			DB::table('mail_inviate')->where('id_mail', $notsend['id_mail'])->update(array('recived' => 1));
		}
		
		return View::make('mailmanager.sender')
			->with('title','BUBU')
			->with('allmail', Mailinviate::qFindAllMailnotSendedorConfirmed());	
	}

	public function Invio()
	{
		return View::make('mailmanager.sender')
			->with('title','BUBU')
			->with('allmail', Mailinviate::qFindAllMailnotSendedorConfirmed());	
	}
}
