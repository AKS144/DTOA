<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\RazorpayController;


Route::resource('/', 'Homecontroller');
// Route::get('razorpay', [RazorpayController::class, 'razorpay'])->name('razorpay');
// Route::post('razorpaypayment', [RazorpayController::class, 'payment'])->name('payment');
//Route::get('/new_ticket', [TicketsController::class, 'create']);
Route::get('/new_ticket', [TicketsController::class, 'create']);
// Route::get('/new_ticket', 'TicketsController@create');
Route::post('/new_ticket', [TicketsController::class, 'store']);
Route::get('/new_ticket_show', [TicketsController::class, 'show']);
 //Route::get('/new_ticket', 'TicketsController@create');
 //Route::post('/store', 'TicketsController@store');
 Route::post('/payment', 'RazorpayController@payment');

 //Route::post('/new_ticket', [TicketsController::class, 'store']);
 Route::get('checkavail/{id}/{book_date}', 'TicketsController@checkavail');
//  Route::get('product', 'RazorpayController@razorpayProduct');
//  Route::get('paysuccess', 'RazorpayController@razorPaySuccess');
//  Route::get('razor-thank-you', 'RazorpayController@RazorThankYou');
Route::get('paywithrazorpay', [RazorpayController::class,'payWithRazorpay'])->name('paywithrazorpay');
//Route::post('payment', [RazorpayController::class,'payment'])->name('payment');


Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Hotels
    Route::delete('hotels/destroy', 'HotelsController@massDestroy')->name('hotels.massDestroy');
    Route::resource('hotels', 'HotelsController');

    // Room Types
    Route::delete('room-types/destroy', 'RoomTypesController@massDestroy')->name('room-types.massDestroy');
    Route::resource('room-types', 'RoomTypesController');

    // Rooms
    Route::delete('rooms/destroy', 'RoomsController@massDestroy')->name('rooms.massDestroy');
    Route::resource('rooms', 'RoomsController');

    // Bookings
    Route::delete('bookings/destroy', 'BookingsController@massDestroy')->name('bookings.massDestroy');
    Route::resource('bookings', 'BookingsController');
});

