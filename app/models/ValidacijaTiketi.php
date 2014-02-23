<?php

class ValidacijaTiketi extends Basemodel{

	public static $rules = array(

			'subject' => 'required|min:4',
			'description' => 'required|between:4,200'


		);
}