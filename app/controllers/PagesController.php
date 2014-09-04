<?php

class PagesController extends \BaseController {
	
	function Home()
	{
		return View::make('home')
			->with('title','Main')
			->with('navcontroller','Home');	
	}
	function getInvia()
	{
		return View::make('mailmanager.invia')
			->with('title','Invia')
			->with('navcontroller','Invia');	
	}
	function Controllo()
	{
		return View::make('mailmanager.controllo')
			->with('title','Controllo')
			->with('navcontroller','Controllo');	
	}
}
