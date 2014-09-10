<?php

class PagesController extends \BaseController {
	
	function Home()
	{
		return View::make('home')
			->with('title','Main')
			->with('navcontroller','Home');	
	}
	
}
