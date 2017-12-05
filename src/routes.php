<?php

Route::group(['prefix'=>'timefortalent/development-method','middleware'=>['auth','roles']],function(){
  Route::get('','TimeForTalent\Controllers\DevelopmentMethodController@index');
  Route::get('create','TimeForTalent\Controllers\DevelopmentMethodController@create');
  Route::post('create','TimeForTalent\Controllers\DevelopmentMethodController@store');
  Route::get('view/{id}','TimeForTalent\Controllers\DevelopmentMethodController@view');
  Route::get('edit/{id}','TimeForTalent\Controllers\DevelopmentMethodController@edit');
  Route::post('edit/{id}','TimeForTalent\Controllers\DevelopmentMethodController@update');
  Route::get('delete/{id}','TimeForTalent\Controllers\DevelopmentMethodController@delete');
});

Route::group(['prefix'=>'timefortalent/skill','middleware'=>['auth','roles']],function(){
  Route::get('','TimeForTalent\Controllers\DevelopmentMethodController@index');
  Route::get('create','TimeForTalent\Controllers\DevelopmentMethodController@create');
  Route::post('create','TimeForTalent\Controllers\DevelopmentMethodController@store');
  Route::get('view/{id}','TimeForTalent\Controllers\DevelopmentMethodController@view');
  Route::get('edit/{id}','TimeForTalent\Controllers\DevelopmentMethodController@edit');
  Route::post('edit/{id}','TimeForTalent\Controllers\DevelopmentMethodController@update');
  Route::get('delete/{id}','TimeForTalent\Controllers\DevelopmentMethodController@delete');
});
