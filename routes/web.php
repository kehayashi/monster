<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/storeLead', 'LeadController@storeLead');

Route::get('/updateLeadFamilia', 'LeadController@updateLeadFamilia');

Route::get('/updateLeadRenda', 'LeadController@updateLeadRenda');

Route::get('/updateLeadRegiao', 'LeadController@updateLeadRegiao');

Route::get('/getLeads', 'LeadController@getLeads');
