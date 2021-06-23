<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get("admin-view-dashboard","Admin\DashboardController@index");


// User
Route::get("admin-view-user","Admin\UserController@index");
Route::get("admin-add-user","Admin\UserController@create");
Route::post("admin-save-user","Admin\UserController@store");
Route::get("admin-delete-user/{id}","Admin\UserController@destroy");
Route::get("admin-edit-user/{id}","Admin\UserController@edit");
Route::post("admin-update-user/{id}","Admin\UserController@update");
Route::get("admin-user-unapprove/{id}","Admin\UserController@unapprove");
Route::get("admin-user-approve/{id}","Admin\UserController@approve");


// categorey
Route::get("admin-view-categorey","Admin\CategoryController@index");
Route::get("admin-add-categorey","Admin\CategoryController@create");
Route::post("admin-save-categorey","Admin\CategoryController@store");
Route::get("admin-delete-categorey/{id}","Admin\CategoryController@destroy");
Route::get("admin-edit-categorey/{id}","Admin\CategoryController@edit");
Route::post("admin-update-categorey/{id}","Admin\CategoryController@update");
Route::get("admin-categorey-unapprove/{id}","Admin\CategoryController@unapprove");
Route::get("admin-categorey-approve/{id}","Admin\CategoryController@approve");



// Sub Categorey
Route::get("admin-view-sub-categorey","Admin\SubCategoryController@index");
Route::get("admin-add-sub-categorey","Admin\SubCategoryController@create");
Route::post("admin-save-sub-categorey","Admin\SubCategoryController@store");
Route::get("admin-delete-sub-categorey/{id}","Admin\SubCategoryController@destroy");
Route::get("admin-edit-sub-categorey/{id}","Admin\SubCategoryController@edit");
Route::post("admin-update-sub-categorey/{id}","Admin\SubCategoryController@update");
Route::get("admin-sub-categorey-unapprove/{id}","Admin\SubCategoryController@unapprove");
Route::get("admin-sub-categorey-approve/{id}","Admin\SubCategoryController@approve");




// Recipie
Route::get("admin-view-recipie","Admin\RecipieController@index");
Route::get("admin-add-recipie","Admin\RecipieController@create");
Route::post("admin-save-recipie","Admin\RecipieController@store");
Route::get("admin-edit-recipie/{id}","Admin\RecipieController@edit");
Route::post("admin-update-recipie/{id}","Admin\RecipieController@update");
Route::get("admin-delete-recipie/{id}","Admin\RecipieController@destroy");
Route::get("admin-recipie-unapprove/{id}","Admin\RecipieController@unapprove");
Route::get("admin-recipie-approve/{id}","Admin\RecipieController@approve");



// Message
Route::get("admin-view-message","Admin\MessageController@index");
Route::get("admin-delete-message/{id}","Admin\MessageController@destroy");




// App
// home
Route::get("home","User\HomeController@index");



Route::get("recipie_detail","User\HomeController@recipie_detail");

