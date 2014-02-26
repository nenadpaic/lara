<?php

class ValidacijaTiketi extends Basemodel{

	public static $rules = array(

			'subject' => 'required|min:4',
			'description' => 'required|between:4,200'


		);
	public static $messages = array('required' => 'This field is required.',
									'min'    => 'This field must contain minimum 4 chars.',
									'between' => 'This field must contain between 4 and 200 cahrs.' 


		);
}