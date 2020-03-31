<?php

// use Illuminate\Http\Request;

#Create a closet function to call on the contact form view
#contactForm is the package name folder and the second parameter is the view.

# A route provide a namespace option for all the routes
Route::group(['namespace' => 'Nnoel\ContactForm\HTTP\Controllers'], function(){

    Route::get('contact-form', 'ContactFormController@index')->name('contact-form');

    Route::post('contact-form', 'ContactFormController@sendEmail');

});

