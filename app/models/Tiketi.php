<?php

class Tiketi extends Eloquent{

public function moji_tiketi(){

	$tiketi = DB::table('tickets')->get();


	return $tiketi;
}


}