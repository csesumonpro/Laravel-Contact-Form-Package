<?php

Route::group([
    'namespace' => 'csesumonpro\contact\Http\Controllers',
    'prefix' => 'contact', 'middleware' => 'web'
], function () {
    Route::get('form', 'ContactController@index')->name('contact.form');
    Route::post('save', 'ContactController@save_contact_form')->name('contact.save');
});
