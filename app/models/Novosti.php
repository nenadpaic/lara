<?php 

class Novosti extends Eloquent{

	protected $table = 'news';

		 protected $fillable = array(
            'title',
			'msg'
			
			
);
public static function validate($data){
		return Validator::make($data, static::$rules, static::$messages);
	}

public function news(){
	$news = DB::table('news')->take(5)->orderBy('updated_at', 'desc')->get();

	return $news;
}
public function news_admin_all(){
	$news = DB::table('news')->orderBy('updated_at', 'desc')->paginate(10);

	return $news;
}
public function delete_by_id($id){
	DB::table('news')->where('nid', $id)->delete();
}
public function news_get($id){

	$novost = DB::table('news')->where('nid', $id)->get();

	return $novost;
}

}