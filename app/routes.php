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


//homepage
Route::get('/', function()
{

	$faker = Faker\Factory::create();
	for ($i=0; $i < 5; $i++) {
  		echo $faker->name, "\n";
	}
    
	return View::make('index');
});


//display lorem ipsum generator
Route::get('/lipsum', function (){
	$lorem='';
	return View::make('lipsum')
	->with('lorem',$lorem);

	
});


//display users generator
Route::get('/users', function (){
	
});


//lorem ipsum form submission
Route::post('/lipsum', function() {
	$pcount = Input::get('pcount');
	$generator = new Lipsum();
    $paragraphs = $generator->getParagraphs($pcount);
    $lorem = implode('<p>', $paragraphs);
    return View::make('lipsum')
    ->with('lorem',$lorem);

});


//user form submission
Route::post('/users', function() {


});
