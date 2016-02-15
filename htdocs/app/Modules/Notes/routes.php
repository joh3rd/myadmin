<?php

Route::group(array('module' => 'Notes', 'namespace' => 'App\Modules\Notes\Controllers'), function() {

    Route::resource('notes/', 'NotesController');
    Route::resource('notes/test', 'NotesController');
    
});	