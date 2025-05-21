
<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoomController as AdminRoomController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;

;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [BlogController::class, 'index'])->name('home.index');


// auth login/sign up

Route::get("/login", [AuthController::class, 'loginForm'])->name("loginForm");
Route::post("/login", [AuthController::class, 'login'])->name("login");
Route::get("/logout", [AuthController::class, 'logout'])->name('logout');
Route::get("/signup", [AuthController::class, 'signupForm'])->name("signupForm");
Route::post("/register", [AuthController::class, 'register'])->name("register");


//admin route
Route::middleware(['auth', 'is_admin'])->prefix('/admin')->group( function() {

    Route::get('/main', [DashboardController::class, 'index'])->name('admin.main');

Route::get('/rooms', [AdminRoomController::class, 'index'])->name('room.index');
Route::get('/room/create', [AdminRoomController::class, 'create'])->name('room.create');
Route::post('room/store', [AdminRoomController::class, 'store'])->name('room.store');

Route::get('/room/edit/{id}', [AdminRoomController::class, 'edit'])->name('room.edit');
Route::get('/room/update/{id}', [AdminRoomController::class, 'update'])->name('room.update');
Route::get('room/delete/{id}', [AdminRoomController::class, 'destroy'])->name('room.destroy');


});

Route::get('/blog/room/show/{id}', [BlogController::class, 'show'])->name('rooms.show');
// Route::get('/admin/room/bookings/{id}', [AdminRoomController::class, 'bookings'])->name('room.booking');

Route::middleware('auth')->group(function () {
    Route::get('/room/{id}/booking', [BookingController::class, 'create'])->name('room.booking');
    Route::post('/room/{id}/book', [BookingController::class, 'store'])->name('room.book.store');
});
