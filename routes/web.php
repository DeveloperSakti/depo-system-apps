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

Auth::routes();

Route::group(['middleware' => ['auth'] ], function () {
    
    Route::get('/', function () {
        return view('app.pages.dashboard.dashboard');
    });
    
    Route::group(['prefix' => 'administration'], function() {
        Route::get('/user/user-permission', function () {
            return view('app.pages.administration.user.user_permission.list');
        });
        Route::get('/user/group-permission', function () {
            return view('app.pages.administration.user.group_permission.list');
        });

        Route::get('/price/customer', function () {
            return view('app.pages.administration.price.customer.list');
        });
        Route::get('/price/customer/add', function () {
            return view('app.pages.administration.price.customer.form');
        });
        Route::get('/price/consignee', function () {
            return view('app.pages.administration.price.consignee.list');
        });
        Route::get('/price/consignee/add', function () {
            return view('app.pages.administration.price.consignee.form');
        });

        Route::get('/seal-stock', function () {
            return view('app.pages.administration.seal_stock.list');
        });
        Route::get('/vessel', function () {
            return view('app.pages.administration.vessel.list');
        });
        Route::get('/cont', function () {
            return view('app.pages.administration.cont.list');
        });
        Route::get('/do-specialmsg', function () {
            return view('app.pages.administration.do_specialmsg.list');
        });
    });

    Route::group(['prefix' => 'operation'], function() {
        Route::get('/dp-in', function () {
            return view('app.pages.operation.dp-in.form');
        });
        Route::get('/data-in', function () {
            return view('app.pages.operation.data-in.list');
        });
        Route::get('/input-do', function () {
            return view('app.pages.operation.input-do.list');
        });
        Route::get('/data-out', function () {
            return view('app.pages.operation.data-out.list');
        });
        Route::get('/chasier-import', function () {
            return view('app.pages.operation.chasier-import.list');
        });
        Route::get('/chasier-import/form', function () {
            return view('app.pages.operation.chasier-import.form');
          
        Route::get('/cancellation', function () {
            return view('app.pages.cancellation.form');
        })->name('operation.cancelation.add');
          
        Route::group(['prefix' => 'cashier'], function (){
            Route::get('/export', function () {
                return view('app.pages.operation.cashier.export');
            })->name('operation.cashier.export');
        });
    });
    
    Route::group(['prefix' => 'reports'], function() {
        //
    });
    

});

