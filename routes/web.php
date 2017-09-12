<?php

Auth::routes();

Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/threads/create', function() {
	return view('threads.create');
});

Route::get('/', function () {
	$name = 'John Doe';
	return view('threads/hello', compact('name'));
});

Route::get('/greeting/{id}', function ($id) {
	return view('threads/greeting', compact('id'));
})->where(['id' => '[1-4]+']);
