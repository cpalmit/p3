<?php

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
    	$lorem = "You're really only going to need between one and twenty-five paragraphs. Try again.";
    }
    return View::make('lipsum')
    ->with('lorem',$lorem);
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
		}
		return View::make('users')
		->with('users',$users);
 	
 	} else {
 		return View::make('users')
 		->with('error','Please input a number between one and 25.');
 	}
});