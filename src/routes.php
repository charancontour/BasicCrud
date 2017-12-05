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
  Route::get('','TimeForTalent\Controllers\SkillController@index');
  Route::get('create','TimeForTalent\Controllers\SkillController@create');
  Route::post('create','TimeForTalent\Controllers\SkillController@store');
  Route::get('view/{id}','TimeForTalent\Controllers\SkillController@view');
  Route::get('edit/{id}','TimeForTalent\Controllers\SkillController@edit');
  Route::post('edit/{id}','TimeForTalent\Controllers\SkillController@update');
  Route::get('delete/{id}','TimeForTalent\Controllers\SkillController@delete');
});


Route::group(['prefix'=>'timefortalent/resource','middleware'=>['auth','roles']],function(){
  Route::get('','TimeForTalent\Controllers\ResourceController@index');
  Route::get('create','TimeForTalent\Controllers\ResourceController@create');
  Route::post('create','TimeForTalent\Controllers\ResourceController@store');
  Route::get('view/{id}','TimeForTalent\Controllers\ResourceController@view');
  Route::get('edit/{id}','TimeForTalent\Controllers\ResourceController@edit');
  Route::post('edit/{id}','TimeForTalent\Controllers\ResourceController@update');
  Route::get('delete/{id}','TimeForTalent\Controllers\ResourceController@delete');
});
