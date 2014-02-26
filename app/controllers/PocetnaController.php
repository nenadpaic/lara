<?php

class PocetnaController extends BaseController{

	public function index(){
		if(Route::getCurrentRoute()->getPath() == 'pocetna_sr'){
			App::setLocale('sr');
			Session::put('language', 'sr');
		$view = View::make('land_page.index');
		$view->title = 'Nenad development';
		$view->description = 'Zelite li lep i funkcionalan web sajt? Na pravom ste mestu. Ja gradim moderne i kvalitetne
		web sajtove, prilagodjene vasim potrebama i budzetu.';
		$view->link = URL::to('pocetna');
		$view->text = "Promeni u engleski jezik";
		$view->text1 = 'Engleska verzija';
		

		return $view;
		}else{
		
		Session::put('language', 'sr');

			
		
		$view = View::make('land_page.index');

		$view->title = 'Nenad development';
		$view->description = 'Do you want nice looking and great performance website? You are in the right place. I build awesome websites, check it out.';
		$view->link = URL::to('pocetna_sr');
		$view->text = "Change to serbian language";
		$view->text1 = 'Serbian version';
		return $view;
	}
	}
public function send_message(){

	

}

}