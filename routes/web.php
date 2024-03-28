<?php

use App\Http\Controllers\Admin\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\ContactFromController;

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
    return view('home');
});

// Route::get('/api', function () {
//     return view('api');
// });

Route::get('present', function () { return view('present'); });
Route::get('form', function () { return view('form'); });
Route::post('form/confirm', [EntryController::class, 'confirm']);
Route::post('form/send', [EntryController::class, 'store']);
Route::get('form/finished', function () { return view('finished'); });

Route::get('privacy-policy', function () { return view('privacy-policy'); });
Route::get('faq', function () { return view('faq'); });
Route::get('company', function () { return view('company'); });


Route::get('contact', function () { return view('contact'); });
Route::get('contact-form', function () { return view('contact-form'); });
Route::post('contact-form/contact-confirm', [ContactFromController::class, 'contact_confirm']);
Route::post('contact-form/contact-send', [ContactFromController::class, 'store']);
Route::get('contact-form/contact-finished', function () { return view('contact-finished'); });


Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function() {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/download', [PageController::class, 'download'])->name('download');
});




require __DIR__.'/auth.php';
