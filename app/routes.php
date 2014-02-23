<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
 Route::get('/', array('as' => 'home', function()
{
    return View::make('home');
}));
Route::get('/', array('uses' => 'PocetnaController@index' ));

Route::get('pocetna', array('uses'=>'PocetnaController@index'));
Route::get('pocetna_en', array('uses'=>'PocetnaController@index'));
Route::post('send_message', function(){
	 $rules = array(
	 	'ime' => 'required|min:3',
	 	'email' => 'required|email',

	 	'poruka' => 'required|min:10'

	 	);
	 $messages = array(
    'required' => 'Field is required.',
    'alpha' => 'Only characters is alowed',
    'min:3' => 'You mast have min 3 characters.',
    'email' => 'Your email is not in right format.',
    'alpha_dash' => 'Only alpha characters is alowed.',
    'min:10' => 'You mast have min 10 characters.',

);

     $validator = Validator::make(Input::all(), $rules, $messages);

    if ($validator->fails())
    	
    {
        return Redirect::to('pocetna/#contact-form')->withErrors($validator);
    }

    	Mail::send('email.body',  array('ime' => Input::get('ime'),
					'email' => Input::get('email'),

					'poruka' => Input::get('poruka')  ), function($message)
{
    $message->to('nenadpaic@gmail.com', Input::get('ime'))->subject('poruka sa nenad development');
});
    	return View::make('land_page.thank');
});
Route::get('support', array('before' => 'auth', 'uses' => 'SupportController@index'));

Route::get('support/tiketi', array('uses' => 'SupportController@tickets'));
Route::get('support/tiket_new', array('uses' => 'SupportController@tiket_new'));
Route::post('support/tiket_create', array('uses' => 'SupportController@tiket_create'));
