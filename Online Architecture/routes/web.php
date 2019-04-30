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

Route::get('/', function () {
    return view('index');
});
Route::get('/adminlogin', 'AdminLogin@index')->name('login.adminlogin');
Route::post('/adminlogin', 'AdminLogin@verify');

Route::get('/adminhome', 'AdminHome@index')->name('adminhome.index');
Route::get('/adminlogout', 'AdminLogout@index')->name('adminlogout');

Route::get('/architecturelist', 'AdminArchi@index')->name('adminhome.archilist');
Route::post('/architecturelist/search', 'AdminArchi@fetch')->name('adminhome.archilist.fetch');

Route::get('/architecturelist/{addid}/edit', 'AdminArchi@edit')->name('adminhome.archiedit');
Route::post('/architecturelist/{addid}/edit', 'AdminArchi@update');

Route::get('/architecturelist/{addid}/delete', 'AdminArchi@delete')->name('adminhome.archidelete');
Route::post('/architecturelist/{addid}/delete', 'AdminArchi@destroy');

Route::get('/architecturelist/{addid}/block', 'AdminArchi@block')->name('adminhome.blockarchi');
Route::post('/architecturelist/{addid}/block', 'AdminArchi@updateblock');

Route::get('/blockarchitecturelist', 'AdminArchi@blockedarchi')->name('adminhome.blockedarchilist');

Route::get('/architecturelist/{addid}/unblock', 'AdminArchi@unblock')->name('adminhome.unblockarchi');
Route::post('/architecturelist/{addid}/unblock', 'AdminArchi@updateunblock');

Route::get('/architecturelist/addnewarchitect', 'AdminArchi@addarchi')->name('adminhome.addarchi');
Route::post('/architecturelist/addnewarchitect', 'AdminArchi@storearchi');

Route::get('/userlist', 'AdminUser@index')->name('adminhome.userlist');

Route::post('/userlist/search', 'AdminUser@fetch')->name('adminhome.userlist.fetch');

Route::get('/userlist/{addid}/edit', 'AdminUser@edit')->name('adminhome.useredit');
Route::post('/userlist/{addid}/edit', 'AdminUser@update');

Route::get('/userlist/{addid}/delete', 'AdminUser@delete')->name('adminhome.userdelete');
Route::post('/userlist/{addid}/delete', 'AdminUser@destroy');


/*Route::get('/autocomplete', 'SearchUser@index');*/
/*Route::post('/autocomplete/fetch', 'SearchUser@fetch')->name('autocomplete.fetch');*/
Route::get('/adminhome/statisticalreport', 'AdminHome@statistic')->name('adminhome.statistical');

Route::get('/userlist/{addid}/block', 'AdminUser@block')->name('adminhome.blockuser');
Route::post('/userlist/{addid}/block', 'AdminUser@updateblock');

Route::get('/blockuserlist', 'AdminUser@blockeduser')->name('adminhome.blockeduserlist');

Route::get('/userlist/{addid}/unblock', 'AdminUser@unblock')->name('adminhome.unblockuser');
Route::post('/userlist/{addid}/unblock', 'AdminUser@updateunblock');

Route::get('/userlist/addnewuser', 'AdminUser@adduser')->name('adminhome.adduser');
Route::post('/userlist/addnewuser', 'AdminUser@storeuser');

Route::get('/adminhome/assignnewadmin', 'AdminHome@addnewadmin')->name('adminhome.newadmin');
Route::post('/adminhome/assignnewadmin', 'AdminHome@storenewadmin');