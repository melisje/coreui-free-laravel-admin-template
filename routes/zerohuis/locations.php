<?php

Route::namespace('\\App\\Domains\\Zerohuis\\Controllers')
     ->group(function ()
     {
         Route::resource('location', 'LocationController');

         Route::prefix('location')
              ->as('location.')
              ->group(function ()
              {
                  Route::get('{location}/qr', 'LocationController@qrcode')->name('qrcode');
              })
         ;

     })
;
