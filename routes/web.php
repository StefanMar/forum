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

Route::get('/greeting/{id}/message/{count}', function ($id, $count) {
	return view('threads/greeting', compact('id','count'));
})->where(['id' => '[0-9]+', 'count' => '[0-9]+']);
