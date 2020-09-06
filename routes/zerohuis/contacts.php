<?php

Route::namespace('\\App\\Domains\\Zerohuis\\Controllers')
     ->group(function ()
     {

         Route::resource('contact', 'ContactController');

         Route::prefix('contact')
              ->as('contact.')
              ->group(function ()
              {
                  Route::post('/', 'ContactController@store')->name('store');
                  Route::put('/consent', 'ContactController@consent')->name('consent');
                  Route::get('/{contact}/edit', 'ContactController@edit')->name('edit');
                  Route::put('/{contact}', 'ContactController@update')->name('update');
              })
         ;

     })
;

Route::middleware(['auth'])
     ->prefix('admin')
     ->as('admin.')
     ->namespace('\\App\\Domains\\Zerohuis\\Controllers')
     ->group(function ()
     {
         Route::resource('contact', 'ContactAdminController');

     })
;


