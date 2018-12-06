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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('help', 'StaticPagesController@help')->name('help');
Route::get('about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');
Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');

Route::get('login', 'SessionController@create')->name('login');
Route::post('login', 'SessionController@store')->name('login');
Route::get('logout', 'SessionController@destory')->name('logout');


// 常规操作，建议用以下方式，可以统一规范
// Route::resource('tests', 'TestsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);
// 上面的代码等同于下面7行代码
// Route::get('/tests', 'TestsController@index')->name('tests.index');// tests的列表页
// Route::get('/tests/{tests}', 'TestsController@show')->name('tests.show');// tests的详情页
// Route::get('/tests/create', 'TestsController@create')->name('user.create');// tests的创建页
// Route::post('/tests', 'TestsController@store')->name('tests.store');// 创建tests
// Route::get('/tests/{test}/edit', 'TestsController@dit')->name('tests.edit');// tests的修改页
// Route::patch('/tests/{test}', 'TestsController@update')->name('tests.update');// 修改tests
// Route::delete('/tests/{test}', 'TestsController@destory')->name('tests.destory');// 删除tests