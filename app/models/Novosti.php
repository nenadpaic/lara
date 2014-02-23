<?php 

class Novosti extends Eloquent{

	protected $table = 'news';

public function news(){
	$news = DB::table('news')->take(5)->orderBy('updated_at', 'desc')->get();

	return $news;
}

}