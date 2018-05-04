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

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');
Route::get('/registration', 'RegistrationController@index');
Route::post('/registration', 'RegistrationController@store');

Route::group(['middleware' => ['sess']], function()
{

	Route::get('/customer', 'CustomerHomeController@index');
	Route::get('/customer_profile/{id}', 'CustomerHomeController@profile');
	Route::get('/customer/edit_profile/{id}', 'CustomerHomeController@edit');
	Route::put('/customer/update_profile/{id}', 'CustomerHomeController@update');
	Route::get('/admin', 'AdminHomeController@index');
	Route::get('/medicine', 'BuyMedicineController@index');
	Route::get('/top_medicine', 'MedicineController@topMed');
	Route::get('/sell_count', 'MedicineController@topSell');
	Route::get('/top_user', 'MedicineController@topUser');
	Route::get('/add_medicine', 'MedicineController@index');
	//Route::get('/medicineList', 'CartController@store');
	Route::post('/add_medicine', 'MedicineController@store');
	Route::get('/retrieve_medicine', 'MedicineController@retrieve');
	Route::get('/medicine/{id}/edit', 'MedicineController@edit');
	Route::get('/medicine/{id}/view', 'MedicineController@show');
	Route::put('/medicine/{id}', 'MedicineController@update');
	Route::get('/medicine/{id}/delete', 'MedicineController@destroy');
	Route::get('/search','MedicineController@medSearch')->name('search.medSearch');
	Route::get('/blacklisted','MedicineController@black');
	/*Route::post('/cart', 'CartController@store')->name('cart.store');
	Route::post('/cart', 'CartController@index')->name('cart.index');*/
	//Route::post('/cart/{id}', 'CartController@store');
	Route::resource('/cart','CartController');
	//Route::get('/cart/{id}/delete','CartController@delete');
	Route::get('/cart','CartController@index')->name('cart.index');
	Route::patch('/cart/{id}','CartController@update')->name('cart.update');
	Route::delete('/cart/{id}','CartController@destroy');
	Route::post('/checkout','CheckoutController@store')->name('checkout.store');
	Route::get('/thankYou','CheckoutController@index')->name('checkout.index'); 
});

//});