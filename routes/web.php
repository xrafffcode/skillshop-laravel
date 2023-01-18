<?php

use App\Mail\Admin\ConfirmationTransaction;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

Route::namespace('App\Http\Controllers\User')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/kontak', function () {
        return view('pages.user.contact');
    })->name('contact');



    // Route Pelatihan
    Route::get('/pelatihan', 'TrainingController@index')->name('training.index');
    Route::get('/pelatihan/{training:slug}', 'TrainingController@show')->name('training.show');

    //Route Atikel
    Route::get('/artikel', 'ArticelController@index')->name('articel.index');
    Route::get('/artikel/{articel:slug}', 'ArticelController@show')->name('articel.show');

    Route::prefix('training-playing')->middleware(['auth'])->group(function () {
        Route::get('/{training:slug}', 'MyTrainingController@show')->name('training.play');
    });


    Route::get('/marketplace', 'ProductController@index')->name('product.index');
    Route::get('/marketplace/{product:slug}', 'ProductController@show')->name('product.show');

    Route::group(['middleware' => 'auth'], function () {

        // Route Checkout Pelatihan
        Route::get('/checkout/{training:slug}', 'CheckoutController@index')->name('checkout.index');
        Route::post('/checkout', 'CheckoutController@checkout')->name('checkout.checkout');
        Route::get('/payment/{transaction_code}', 'CheckoutController@payment')->name('checkout.payment');
        Route::post('/payment', 'CheckoutController@paymentProcess')->name('checkout.process');
        Route::get('/invoice/{transaction_code}', 'MyOrderController@invoice')->name('invoice');

        Route::post('/submit-rating', 'MyTrainingController@sendReview')->name('training.review');

        // Route Checkout Marketplace
        Route::post('/filldata/{product:slug}', 'OrderProductController@store')->name('product.order');
        Route::post('/review/{product:slug}', 'OrderProductController@review')->name('product.review');
        Route::post('/payment/{product:slug}', 'OrderProductController@payment')->name('product.payment');
        Route::post('/payment-process/{product:slug}', 'OrderProductController@payment_proccess')->name('product.payment_process');
        Route::post('/checkout', 'OrderProductController@checkout')->name('product.checkout-product');

        Route::get('/order-berhasil', function () {
            return view('pages.user.progress');
        })->name('checkout-progress');
    });
});


Route::prefix('profil')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\Auth\ProfileSettingController@index')->name('profil.dashboard');
    Route::get('/', 'App\Http\Controllers\Auth\ProfileSettingController@edit')->name('profil.edit');
    Route::put('/profil', 'App\Http\Controllers\Auth\ProfileSettingController@update')->name('profil.update');
    Route::get('/kelas-saya', 'App\Http\Controllers\Auth\ProfileSettingController@myClass')->name('profil.myclass');
    Route::get('/orderan-saya', 'App\Http\Controllers\User\MyOrderController@index')->name('profil.myorder');


    Route::get('/artikel-saya', 'App\Http\Controllers\User\ArticelController@dashboard')->name('profil.myarticel');
    Route::get('/artikel-saya/create', 'App\Http\Controllers\User\ArticelController@create')->name('profil.createarticel');
    Route::post('/artikel-saya', 'App\Http\Controllers\User\ArticelController@store')->name('profil.storearticel');
    Route::delete('/artikel/{id}', 'App\Http\Controllers\User\ArticelController@destroy')->name('profil.deletearticel');

    Route::get('/produk-saya', 'App\Http\Controllers\User\MarketplaceController@index')->name('profil.myproduct');
    Route::get('/produk-saya/create', 'App\Http\Controllers\User\MarketplaceController@create')->name('profil.createproduct');
    Route::post('/produk-saya', 'App\Http\Controllers\User\MarketplaceController@store')->name('profil.storeproduct');
    Route::get('/produk-saya/{id}', 'App\Http\Controllers\User\MarketplaceController@addPhoto')->name('profil.addphotoproduct');
    Route::post('/produk-saya/{id}', 'App\Http\Controllers\User\MarketplaceController@storePhoto')->name('profil.storephotoproduct');

    Route::get('/transaksi', 'App\Http\Controllers\User\TransactionController@index')->name('profil.transaction');
    Route::get('/transaksi/{id}', 'App\Http\Controllers\User\TransactionController@show')->name('profil.transactiondetail');
    Route::put('/transaksi/{id}', 'App\Http\Controllers\User\TransactionController@update')->name('profil.updatetransaction');
});




Route::namespace('App\Http\Controllers\Admin')->group(function () {
    Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.')->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('pelatihan', 'TrainingController');
        Route::resource('mentor', 'MentorController');
        Route::resource('artikel', 'ArticelController');
        Route::resource('transaksi', 'TransactionController');

        Route::post('/review-artikel', 'ArticelController@acc')->name('artikel.accept');
    });
});

Auth::routes();
