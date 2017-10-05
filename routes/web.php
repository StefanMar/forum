<?php
Auth::routes();
Route::get('/', function() {
	return redirect('/threads');
});
Route::get('/threads', 'ThreadsController@index');
Route::post('/threads', 'ThreadsController@store');
Route::get('/threads/get', 'ThreadsController@store');
Route::get('/threads/create', 'ThreadsController@create')->middleware('auth');
Route::get('/threads/{id}', 'ThreadsController@show');
Route::get('/profiles/{id}', function($id) {
	$statuses = [
            ['nafn' => 'Bjarmi ', 'link' => 'Laravel Controller', 'text' => 'Hvarnig býr maður til controller í Laravel?'],
            ['nafn' => 'Bjarmi Anes Eiðsson', 'link' => 'Laravel 5.5', 'text' => 'Hver er munurinn á Laravel útgáfu 5.4 og 5.5?']
        ];
	return view('profiles.index', compact('statuses'));
});