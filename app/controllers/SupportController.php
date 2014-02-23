<?php

class SupportController extends BaseController{

public function index(){

$news1 = new Novosti();
$news = $news1->news();

return View::make('support.index')->with('news', $news);
}

public function tickets(){

	if(Request::ajax()){
		$tickets1 = new Basemodel();
		$tickets = $tickets1->moji_tiketi();
		return View::make('support.tickets')->with('tickets', $tickets);

		

		

	}else{

		return App::abort(403, 'Page does not exist.');
	}

}


public function tiket_new(){

		return View::make('support.new_ticket');

}
public function tiket_create(){

	$validation = ValidacijaTiketi::validate(Input::all());

	if($validation->passes()){
		ValidacijaTiketi::create(array(
			'sender_id'    => Session::get('userId'),
			'title'        => Input::get('subject'),
			'cat'          => Input::get('cat'),
			'msg'  => Input::get('description')
			


			));
		return Redirect::to('support')->with('poruka', 'Your ticket is submited, i will answer soon as possible');
	}
}


}