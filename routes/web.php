<?php


Route::get('/', function () {
    return view('home');
});

Route::post('/storeLead', 'LeadController@storeLead');

Route::post('/updateLeadFamilia', 'LeadController@updateLeadFamilia');

Route::post('/updateLeadRenda', 'LeadController@updateLeadRenda');

Route::post('/updateLeadRegiao', 'LeadController@updateLeadRegiao');

Route::post('/getLeads', 'LeadController@getLeads');
