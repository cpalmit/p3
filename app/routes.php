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
Route::get('/', function(){ 
	return View::make('index');
});


//display lorem ipsum generator
Route::get('/lipsum', function (){
	return View::make('lipsum');
});


//display users generator
Route::get('/users', function (){
	return View::make('users');
});


//lorem ipsum form submission
Route::post('/lipsum', function() {
	$pcount = Input::get('pcount');
	if(($pcount>=1)&&($pcount<=25))
	{
		$generator = new Lipsum();
    	$paragraphs = $generator->getParagraphs($pcount);
    	$lorem = implode('<p>', $paragraphs);
    } else {
    	$lorem = "You're really only going to need between one and twenty-five paragraphs. Try a different number.";
    }
    return View::make('lipsum')
    ->with('lorem',$lorem);
});


//TESTING
Route::get('/test', function (){
	$ucount = Input::get('ucount');
	$faker = Faker\Factory::create();
	$name = $faker->name;
	$address = $faker->address;
	$profile = $faker->text;
   
 	return View::make('test')
	 ->with('name',$name)
 	->with('address',$address)
 	->with('profile',$profile);
	
});


//user form submission
Route::post('/users', function() {
	$ucount = Input::get('ucount');
	if(($ucount>=1)&&($ucount<=25)) {
		$faker = Faker\Factory::create();
		for ($i=0; $i < $ucount; $i++) {
		
			$users[$i]['name'] = $faker->name;
			$users[$i]['address'] = $faker->address;
			$users[$i]['profile'] = $faker->text;
			//$name = $faker->name;
			//$address = $faker->address;
			//$profile = $faker->text;
		}
		
		return View::make('users')
		//->with('name',$name)
		//->with('address',$address)
		//->with('profile',$profile);
		->with('users',$users);
 	
 	} else {
 		return View::make('users')
 		->with('error','Please input a number between one and 25.');
 	}
});
