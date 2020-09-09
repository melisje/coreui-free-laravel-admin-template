<?php

Route::namespace('\\App\\Domains\\Zerohuis\\Controllers')
     ->group(function ()
     {

         Route::resource('location', 'LocationController');
         Route::get('location/{location}/qr','LocationController@show')->name('location.show.qr');


     })
;

Route::middleware(['auth'])
     ->prefix('admin')
     ->as('admin.')
     ->namespace('\\App\\Domains\\Zerohuis\\Controllers')
     ->group(function ()
     {
         Route::resource('location', 'LocationAdminController');

         Route::prefix('location')
              ->as('location.')
              ->group(function ()
              {
                  Route::get('{location}/qr', 'LocationAdminController@qrcode')->name('qrcode');
              })
         ;
     })
;
