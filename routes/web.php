<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ComplaintController;
use Illuminate\Support\Facades\Route;


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

//Show home page
Route::get('/', [HomeController::class, 'index'])->name('home');

//Show Login form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Show Register/Signup Form
Route::get('/signup',[UserController::class,'create'] );

//Create New User
Route::post('/users', [UserController::class,'store']);

//Log Out User 
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Displaying user-specific dashboard
Route::get('/dashboard/{userId}', [UserController::class, 'dashboard'])->name('user.dashboard');

// User Dashboard
Route::get('/user', [UserController::class, 'userDashboard']);

// Admin Dashboard
Route::get('/admin', [UserController::class, 'adminDashboard']);

//Show Create Event Form
Route::get('/create_event', [EventController::class, 'create'])->name('create.event');

//Create New Event
Route::post('/store_event', [EventController::class, 'store'])->name('store.event');

//View Event
Route::get('/view_event', [EventController::class, 'showEvents'])->name('events.show');

Route::get('/search_event', [EventController::class, 'showEvents'])->name('events.search');


// Edit Event
Route::get('/edit_event/{eventId}', [EventController::class, 'editEvent'])->name('events.edit');

// Update Event
Route::put('/update_event/{eventId}', [EventController::class, 'updateEvent'])->name('events.update');

// Delete Event
Route::delete('/delete_event/{eventId}', [EventController::class, 'deleteEvent'])->name('events.delete');


// Route to volunteer for an event
Route::get('/volunteer/{eventId}', [EventController::class, 'getDateRange'])->name('volunteer.select');

// Save volunteer preferences for an event
Route::post('/save-volunteer/{eventId}', [EventController::class, 'saveVolunteer'])->name('volunteer.save');

// Update user volunteer status
Route::post('/user/update-status/{volunteerId}', [EventController::class, 'updateStatus'])->name('user.updateStatus');

// Show the form to report an issue
Route::get('/reportissue', [ComplaintController::class, 'index'])->name('complaints.form');

// Store a new complaint
Route::post('/reportissue', [ComplaintController::class, 'store']);

// View all complaints
Route::get('/complaints', [ComplaintController::class, 'getAllComplaints']);

// View FAQs
Route::get('/faqs', [FAQController::class, 'index']);