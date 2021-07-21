<?php

  Route::group(['middleware' => 'auth.basic'], function() {
    Route::post('/import', 'ExportImportController@import');
    Route::get('/export', 'ExportImportController@export');
  });
  
  Route::patch('/update-files', 'FileParserController@receive');
  Route::get('/last-fetched', 'FileParserController@lastFetched');
