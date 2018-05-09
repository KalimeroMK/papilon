<?php

Route::group(['prefix' => 'admin'], function () {

});

Route::group(['middleware' => ['web', 'role:admin'], 'prefix' => 'admin'], function () {
	Route::auth();
	Route::get('/', 'HomeController@index');

	Route::get('/users/', 'DashboardController@listusers');
	Route::get('/users/create', 'DashboardController@create');
	Route::get('/users/{id}/', 'DashboardController@listuser');
	Route::get('/users/{id}/edit', 'DashboardController@edituser');
	Route::post('/users/updateuser', 'DashboardController@updateuser');
	Route::post('/users/{id}/delete', 'DashboardController@delete');
	Route::post('/users/register', 'DashboardController@register');
	Route::get('/analytics', 'DashboardController@all');

	Route::get('/sliders/{id}/category', 'CategoriesController@addslider')->name('admin.addcategoryslider.view');
	Route::post('/addcategorystore', 'CategoriesController@sliderstore')->name('admin.slidercategory.store');
	Route::post('/addcategorydestroy', 'CategoriesController@sliderdestroy')->name('admin.slidercategory.destroy');

	Route::post('/settings/store', 'HomeController@store')->name('admin.settings.store');
	Route::get('/settings/{id}/edit', 'HomeController@edit')->name('admin.settings.edit');
	Route::post('/settings/update', 'HomeController@update')->name('admin.settings.update');

	Route::resource('/sliders', 'SlidersController', ['names' => [
		'index' => 'admin.sliders.index',
		'store' => 'admin.sliders.store',
		'destroy' => 'admin.sliders.destroy',

	]]);
	Route::resource('/product', 'ProductsController', ['names' => [
		'index' => 'admin.product.index',
		'create' => 'admin.product.create',
		'store' => 'admin.product.store',
		'edit' => 'admin.product.edit',
		'update' => 'admin.product.update',
		'destroy' => 'admin.product.destroy',

	]]);
	Route::resource('/slider', 'SliderController', ['names' => [
		'index' => 'admin.slider.index',
		'create' => 'admin.slider.create',
		'store' => 'admin.slider.store',
		'edit' => 'admin.slider.edit',
		'update' => 'admin.slider.update',
		'destroy' => 'admin.slider.destroy',

	]]);
	Route::resource('/categories', 'CategoriesController', ['names' => [
		'index' => 'admin.categories.index',
		'create' => 'admin.categories.create',
		'store' => 'admin.categories.store',
		'edit' => 'admin.categories.edit',
		'update' => 'admin.categories.update',
		'destroy' => 'admin.categories.destroy',

	]]);
	Route::resource('/staticpage', 'StaticController', ['names' => [
		'index' => 'admin.staticpage.index',
		'create' => 'admin.staticpage.create',
		'store' => 'admin.staticpage.store',
		'edit' => 'admin.staticpage.edit',
		'update' => 'admin.staticpage.update',
		'destroy' => 'admin.staticpage.destroy',
	]]);
	Route::resource('/referrals', 'ReferralController', ['names' => [
		'index' => 'admin.referrals.index',
		'create' => 'admin.referrals.create',
		'store' => 'admin.referrals.store',
		'edit' => 'admin.referrals.edit',
		'update' => 'admin.referrals.update',
		'destroy' => 'admin.referrals.destroy',
	]]);
	Route::resource('/services', 'ServicesController', ['names' => [
		'index' => 'admin.services.index',
		'create' => 'admin.services.create',
		'store' => 'admin.services.store',
		'edit' => 'admin.services.edit',
		'update' => 'admin.services.update',
		'destroy' => 'admin.services.destroy',
	]]);

});

//----------front end front end----------//
Route::get('/', 'HomePageController@index');
Route::get('/{slug}', 'HomePageController@staticpages');
Route::get('/referents/{slug}', 'HomePageController@referents');
Route::get('/services/{slug}', 'HomePageController@services');
Route::get('/product/{slug}', 'HomePageController@product');
Route::get('/categories/{slug}', 'HomePageController@categories');
