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

	$generator = new Lipsum();
    $paragraphs = $generator->getParagraphs(2);
    echo implode('<p>', $paragraphs);
    
	//return View::make('index');
});

##############################
//if I decide not to have both forms on the homepage...

//display lorem ipsum generator
Route::get('/lipsum', function (){
	
});


//display users generator
Route::get('/users', function (){
	
});
###############################

//lorem ipsum form submission
Route::post('/lipsum', function() {

	
});


//user form submission
Route::post('/users', function() {


});
