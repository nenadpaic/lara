<?php

class SupportController extends BaseController{

public function index(){

$news1 = new Novosti();
$news = $news1->news();

return View::make('support.index')->with('news', $news);
}

public function tickets(){

		$userid = Session::get('userId');
		$tickets1 = new Basemodel();
		$tickets = $tickets1->moji_tiketi($userid);
		return View::make('support.tickets')->with('tickets', $tickets);

		

		

	

}


public function tiket_new(){
	if(Request::ajax()){

		return View::make('support.new_ticket');
	}else{
		return App::abort(403, 'Page does not exist.');
	}

}
public function tiket_create(){

	$validation = ValidacijaTiketi::validate(Input::all());

	if($validation->passes()){
		ValidacijaTiketi::create(array(
			'sender_id'    => Session::get('userId'),
			'title'        => e(Input::get('subject')),
			'cat'          => Input::get('cat'),
			'msg'  => e(Input::get('description'))
			


			));
		Event::fire('tiket.poslat', array(Session::get('email')));
		return Redirect::to('support')->with('poruka', 'Your ticket is submited, i will answer soon as possible');
	}else{
		return Redirect::to('support')->withErrors($validation);
	}
}
/*
---------------------------
news admin module
---------------------------
*/
public function admin_news(){

	$model = new Novosti();

	$news = $model->news_admin_all();


	return View::make('admin.index')->with('novosti', $news);

}
public function news_add(){

	return View::make('admin.add_news');
}

public function create_news(){
	$validation = ValidacijaNews::validate(Input::all());

	if($validation->passes()){
		ValidacijaNews::create(array(
				'title' => Input::get('title'),
				'msg'   => Input::get('desc')
));
		return Redirect::to('admin/add_news')->with('poruka', 'Article is published!');
	} else {
		return Redirect::to('admin/add_news')->withErrors($validation);
	}
}
public function delete_news($id){

	$model = new Novosti();
	$model->delete_by_id($id);
	return Redirect::to('admin')->with('poruka', 'Successfully deleted article');
}
public function edit_news($id){
	$model = new Novosti();
	$novosti = $model->news_get($id);

	return View::make('admin.edit_news')->with('novosti', $novosti);
}
public function edit_news_do($id){

	$validation = ValidacijaNews::validate(Input::all());

	if($validation->passes()){
		ValidacijaNews::where('nid', $id)->update(array('title' => Input::get('title'), 'msg' => Input::get('desc')));

		return Redirect::to('admin')->with('poruka', 'Successfully updated article');
	}else{
		return Redirect::to('admin/edit_news/' .$id)->withErrors($validation);
	}
}

/*
--------------------------
ticket admin module
--------------------------
*/
public function admin_tickets(){

	$model = new Basemodel();
	$tiketi = $model->tiketi();

	return View::make('admin.tiketi')->with('tiketi', $tiketi);

}
public function delete_tickets($id){

	$model = new Basemodel();

	$model->delete_by_id($id);

	return Redirect::to('admin/tickets')->with('poruka', 'Successfully deleted ticket.');

}
public function menage_tickets($id){

	$model = new Basemodel();

	$tickets = $model->ticket_get($id);
	$model_korisnik = new Basemodel();
	foreach ($tickets as $tiket) {
		
	$korisnik = $model->user_id($tiket->sender_id);
	}
	

	return View::make('admin.menage_tickets')->with('tickets', $tickets)
											 ->with('korisnik', $korisnik);
}

public function menage_tickets_do($id){

	$validation = ValidacijaTiketi::validate(Input::all());

	if($validation->passes()){

		ValidacijaTiketi::where('tid', $id)->update(array('title' => Input::get('subject'), 'cat' => Input::get('cat'), 'msg' => Input::get('description'), 
			'answer' => Input::get('answer')));

		return Redirect::to('admin/tickets')->with('poruka', 'Successfully edited ticket.');
	}else{

		return Redirect::to('admin/menage_tickets'.$id)->withErrors($validation);
	}


}

}