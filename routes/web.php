<?php
Route::get('home', function() {
	return view('public.dashboard');
});

Route::get('customer-registration', function(){
    return view('customer_registration');
});