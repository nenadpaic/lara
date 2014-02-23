<?php

class PocetnaController extends BaseController{

	public function index(){
		if(Route::getCurrentRoute()->getPath() == 'pocetna_en'){
			App::setLocale('en');
			Session::put('language', 'en');
		$view = View::make('land_page.index');

		$view->title = 'Nenad development';
		$view->description = 'Do you want nice looking and great performance website? You are in the right place. I build awesome websites, check it out.';

		return $view;
		}else{
		
		Session::put('language', 'sr');

			
		
		$view = View::make('land_page.index');

		$view->title = 'Nenad development';
		$view->description = 'Zelite li lep i funkcionalan web sajt? Na pravom ste mestu. Ja gradim moderne i kvalitetne
		web sajtove, prilagodjene vasim potrebama i budzetu.';

		return $view;
	}
	}
public function send_message(){

	

}

}