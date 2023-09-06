<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', 'PagesController@home');

// Kategori
Route::get('/kategori', 'PagesController@kategori');
Route::get('/kategori/{id}', 'PagesController@kategoriSort');
Route::get('/detail/{product}', 'PagesController@detail');

// FAQ
Route::get('/faq', 'PagesController@faqIndex');
Route::get('/faq/{faq}', 'PagesController@faqShow');

// Tentang
Route::get('/tentang', 'PagesController@tentang');

// Keluhan
Route::get('/keluhan', 'PagesController@tentang');
Route::post('/complaints', 'ComplaintsController@store');

// Login
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/checkLogin', 'AuthController@checkLogin');
Route::get('/logout', 'AuthController@logout');

// Auth Admin, Owner

    
    // Dashboard Home
    Route::get('/admin', 'PagesController@admin'); 
    Route::resource('products','ProductsController');
    Route::resource('testimonies','TestimoniesController');
    Route::resource('faqs','FaqsController');
    Route::resource('categories','CategoriesController');
    Route::resource('contacts','ContactsController');
    
    // Admin
    Route::get('/admins/{id}/edit','AdminsController@edit');
    Route::post('/admins/{id}', 'AdminsController@update');

    // Keluhan
    Route::get('/complaints', 'ComplaintsController@index');
    Route::get('/complaints/{complaint}', 'ComplaintsController@show');
    Route::delete('/complaints/{complaint}','ComplaintsController@destroy');

    // Admin
    Route::get('/admins', 'AdminsController@index');
    Route::get('/admins/create', 'AdminsController@create');
    Route::post('/admins', 'AdminsController@store');
    Route::delete('/admins/{admin}', 'AdminsController@destroy');


// Route::get('/products', 'ProductsController@index');
// Route::get('/products/create', 'ProductsController@create');
// Route::get('/products/{product}', 'ProductsController@show');
// Route::post('/products', 'ProductsController@store');
// Route::delete('/products/{product}','ProductsController@destroy');
// Route::get('/products/{product}/edit','ProductsController@edit');
// Route::patch('/products/{product}','ProductsController@update');

// Route::get('/testimonies', 'TestimoniesController@index');
// Route::get('/testimonies/create', 'TestimoniesController@create');
// Route::get('/testimonies/{testimony}', 'TestimoniesController@show');
// Route::post('/testimonies', 'TestimoniesController@store');
// Route::delete('/testimonies/{testimony}','TestimoniesController@destroy');
// Route::get('/testimonies/{testimony}/edit','TestimoniesController@edit');
// Route::patch('/testimonies/{testimony}','TestimoniesController@update');

// Route::get('/faqs', 'FaqsController@index');
// Route::get('/faqs/create', 'FaqsController@create');
// Route::get('/faqs/{faq}', 'FaqsController@show');
// Route::post('/faqs', 'FaqsController@store');
// Route::delete('/faqs/{faq}','FaqsController@destroy');
// Route::get('/faqs/{faq}/edit','FaqsController@edit');
// Route::patch('/faqs/{faq}','FaqsController@update');

// Route::get('/complaints', 'ComplaintsController@index');
// Route::get('/complaints/create', 'ComplaintsController@create');
// Route::get('/complaints/{complaint}', 'ComplaintsController@show');
// Route::post('/complaints', 'ComplaintsController@store');
// Route::delete('/complaints/{complaint}','ComplaintsController@destroy');
// Route::get('/complaints/{complaint}/edit','ComplaintsController@edit');
// Route::patch('/complaints/{complaint}','ComplaintsController@update');

// Route::get('/categories', 'CategoriesController@index');
// Route::get('/categories/create', 'CategoriesController@create');
// Route::get('/categories/{category}', 'CategoriesController@show');
// Route::post('/categories', 'CategoriesController@store');
// Route::delete('/categories/{category}','CategoriesController@destroy');
// Route::get('/categories/{category}/edit','CategoriesController@edit');
// Route::patch('/categories/{category}','CategoriesController@update');

// Route::get('/admins', 'AdminsController@index');
// Route::get('/admins/create', 'AdminsController@create');
// Route::get('/admins/{admin}', 'AdminsController@show');
// Route::post('/admins', 'AdminsController@store');
// Route::delete('/admins/{admin}','AdminsController@destroy');
// Route::get('/admins/{admin}/edit','AdminsController@edit');
// Route::patch('/admins/{admin}','AdminsController@update');

// Route::get('/contacts', 'ContactsController@index');
// Route::get('/contacts/create', 'ContactsController@create');
// Route::get('/contacts/{contact}', 'ContactsController@show');
// Route::post('/contacts', 'ContactsController@store');
// Route::delete('/contacts/{contact}','ContactsController@destroy');
// Route::get('/contacts/{contact}/edit','ContactsController@edit');
// Route::patch('/contacts/{contact}','ContactsController@update');

// Route::get('/contacts', 'ContactsController@index');
// Route::get('/contacts/edit/{id}', 'ContactsController@edit');
// Route::post('/contacts/update/{id}', 'ContactsController@update');

// Route::get('/admins', 'AdminsController@index');
// Route::get('/admins/edit/{id}', 'AdminsController@edit');
// Route::get('/admins/create', 'AdminsController@create');
// Route::post('/admins/store', 'AdminsController@store');
// Route::post('/admins/update/{id}', 'AdminsController@update');
// Route::post('/admins/destroy/{id}', 'AdminsController@destroy');

// Route::get('/categories', 'CategoriesController@index');
// Route::get('/categories/edit/{id}', 'CategoriesController@edit');
// Route::get('/categories/create', 'CategoriesController@create');
// Route::post('/categories/update/{id}', 'CategoriesController@update');
// Route::post('/categories/store', 'CategoriesController@store');
// Route::post('/categories/destroy/{id}', 'CategoriesController@destroy');