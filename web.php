<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController; 
use App\Http\Controllers\CourseController; // Add this line

Route::get('/', function () {
    return view('welcome');
});

// Route to show all questions
Route::get('/questions', [QuestionController::class, 'index']);

// Route to handle form submission for new questions
Route::post('/questions', [QuestionController::class, 'store'])->name('questions.submit');

// Route for courses
Route::get('/courses', [CourseController::class, 'index']); // Add this line

