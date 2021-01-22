<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// BLOG PAGE
Route::get('/', 'Blog\Home\HomeController@index')->name('welcome');

Route::prefix('category')->group(function(){
    Route::get('/', 'Blog\Category\CategoryController@index')->name('category');
    Route::get("akutansi", "Blog\Category\CategoryController@akutansi")->name("category.akutansi");
    Route::get("ekonomi", "Blog\Category\CategoryController@ekonomi")->name("category.ekonomi");
    Route::get("kimia", "Blog\Category\CategoryController@kimia")->name("category.kimia");
    Route::get("hukum", "Blog\Category\CategoryController@hukum")->name("category.hukum");
    Route::get("elektro", "Blog\Category\CategoryController@elektro")->name("category.elektro");
    Route::get("mesin", "Blog\Category\CategoryController@mesin")->name("category.mesin");
});

Route::prefix('archive')->group(function(){
	Route::prefix('news')->group(function(){
		Route::get('/', 'Blog\Archive\ArchiveController@indexNews')->name('archive.news');
	});
	Route::prefix('popular')->group(function(){
		Route::get('/', 'Blog\Archive\ArchiveController@indexPopular')->name('archive.popular');
    });
    Route::get("{judul}", "Blog\Content\ContentController@index")->name("archive.content");
    Route::get("download/{filename}", "Blog\Content\ContentController@download")->name("archive.download");
});

Auth::routes(["register" => false]);


// DASHBOARD PAGE
Route::prefix('home')->group(function(){
	Route::get('/', 'HomeController@index')->name('home');

	Route::prefix('archive')->group(function(){
		Route::get('/', 'Dashboard\Archive\ArchiveController@index')->name('archive');
		Route::get('c', 'Dashboard\Archive\ArchiveController@create')->name('archive.create');
        Route::get('e/{id}', 'Dashboard\Archive\ArchiveController@edit')->name('archive.edit');
        Route::get("d/{id}", "Dashboard\Archive\ArchiveController@delete")->name("archive.delete");
        Route::post("s", "Dashboard\Archive\ArchiveController@store")->name("archive.store");
        Route::post("u/{id}", "Dashboard\Archive\ArchiveController@update")->name("archive.update");
	});
	Route::prefix('users')->group(function(){
		Route::prefix('lecture')->group(function(){
			Route::get('/', 'Dashboard\Users\UsersController@lectureIndex')->name('users.lecture');
			Route::get('c', 'Dashboard\Users\UsersController@lectureCreate')->name('users.lecture.create');
            Route::get('e/{id}', 'Dashboard\Users\UsersController@lectureEdit')->name('users.lecture.edit');
            Route::post("s", "Dashboard\Users\UsersController@lectureStore")->name("users.lecture.store");
            Route::post("u/{id}", "Dashboard\Users\UsersController@lectureUpdate")->name("users.lecture.update");
            Route::get("d/{id}", "Dashboard\Users\UsersController@lectureDelete")->name("users.lecture.delete");
		});
		Route::prefix('student')->group(function(){
			Route::get('/', 'Dashboard\Users\UsersController@studentIndex')->name('users.student');
			Route::get('c', 'Dashboard\Users\UsersController@studentCreate')->name('users.student.create');
            Route::get('e/{id}', 'Dashboard\Users\UsersController@studentEdit')->name('users.student.edit');
            Route::get("d/{id}", "Dashboard\Users\UsersController@studentDelete")->name("users.student.delete");
            Route::post("u/{id}", "Dashboard\Users\UsersController@studentUpdate")->name("users.student.update");
            Route::post("s", "Dashboard\Users\UsersController@studentStore")->name("users.student.store");
		});
	});
});


