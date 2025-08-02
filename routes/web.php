<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DepartmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [GalleryController::class, 'home']);
Route::get('/gallery', [GalleryController::class, 'gallery']);
Route::get('/about_us', [GalleryController::class, 'aboutus']);

Route::get('/wash', [ProgramController::class, 'wash']);
Route::get('/gbv', [ProgramController::class, 'gbv']);
Route::get('/education', [ProgramController::class, 'education']);
Route::get('/agriculture', [ProgramController::class, 'agriculture']);
Route::get('/health', [ProgramController::class, 'health']);
Route::get('/security', [ProgramController::class, 'security']);
Route::get('/humanitarian', [ProgramController::class, 'humanitarian']);
Route::get('/youth', [ProgramController::class, 'youth']);
Route::get('/team', [TeamController::class, 'index']);
Route::get('/contact_us', [FeedbackController::class, 'index']);
Route::post('/contact_us', [FeedbackController::class, 'store'])->name('contact_us');

Route::get('/downloads', [JobController::class, 'index']);
