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
Route::get('pocetna_sr', array('uses'=>'PocetnaController@index'));
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

    	Mail::send('email.body',  array('ime' => e(Input::get('ime')),
					'email' => e(Input::get('email')),

					'poruka' => e(Input::get('poruka'))  ), function($message)
{
    $message->to('nenadpaic@gmail.com', Input::get('ime'))->subject('poruka sa nenad development');
});
    	return View::make('land_page.thank');
});
Route::get('support', array('before' => 'auth', 'uses' => 'SupportController@index'));


Route::get('support/tiket_new', array('uses' => 'SupportController@tiket_new'));
Route::post('support/tiket_create', array('before' => 'csrf', 'uses' => 'SupportController@tiket_create'));
/*
----------------------------
user interface
----------------------------
*/
Route::get('support/tiketi', array('before' => 'auth', 'uses' => 'SupportController@tickets'));
/*
-------------------------------------
admin interface
-------------------------------------
*/
Route::get('admin', array('before' => 'inGroup:Admins', 'uses' => 'SupportController@admin_news'));
Route::get('admin/tickets', array('before' => 'inGroup:Admins','uses' => 'SupportController@admin_tickets'));
Route::get('admin/add_news', array('before' => 'inGroup:Admins','uses' => 'SupportController@news_add'));
Route::post('admin/create_news', array( 'before' => 'csrf|inGroup:Admins', 'uses' => 'SupportController@create_news' ));
Route::get('admin/delete_news/{id}', array('before'=> 'inGroup:Admins', 'uses' => 'SupportController@delete_news'));
Route::get('admin/edit_news/{id}', array('before' => 'inGroup:Admins', 'uses' => 'SupportController@edit_news'));
Route::post('admin/edit_news_do/{id}', array('before' => 'csrf|inGroup:Admins' , 'uses' => 'SupportController@edit_news_do' ));
Route::get('admin/delete_tickets/{id}', array('before' => 'inGroup:Admins', 'uses' => 'SupportController@delete_tickets'));
Route::get('admin/menage_tickets/{id}', array('before' => 'inGroup:Admins', 'uses' => 'SupportController@menage_tickets'));
Route::post('admin/menage_tickets_do/{id}', array('before' => 'inGroup:Admins', 'uses' => 'SupportController@menage_tickets_do'));