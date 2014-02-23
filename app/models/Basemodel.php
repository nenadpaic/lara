<?php

class Basemodel extends Eloquent{
	protected $table = 'tickets';
	 protected $fillable = array(
			'sender_id',
			'title',
			'cat',
			'msg'
			
);

	public static function validate($data){
		return Validator::make($data, static::$rules);
	}
	public function moji_tiketi(){

		$tiketi = DB::table('tickets')->get();


	return $tiketi;
	}
}