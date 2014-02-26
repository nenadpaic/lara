<?php

class Basemodel extends Eloquent{
	protected $table = 'tickets';
	 protected $fillable = array(
			'sender_id',
			'title',
			'cat',
			'msg',
			'answer'
			
);

	public static function validate($data){
		return Validator::make($data, static::$rules, static::$messages);
	}
	public function moji_tiketi($userid){

		$tiketi = DB::table('tickets')->where('sender_id', $userid)->orderBy('updated_at', 'desc')->paginate(10);


	return $tiketi;
	}

	public function tiketi(){

		$tiketi = DB::table('tickets')->orderBy('updated_at', 'desc')->paginate(10);

		return $tiketi;
	}


public function delete_by_id($id){
	DB::table('tickets')->where('tid', $id)->delete();
}


public function ticket_get($id){

	$ticket = DB::table('tickets')->where('tid', $id)->get();

	return $ticket;
}
public function user_id($id){

	$user = DB::table('users')->where('id', $id)->get();
	return $user;
}


}