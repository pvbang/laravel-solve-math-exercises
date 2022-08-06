<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\GradeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\CrowlerDataController;

// app
Route::get('/', [AppController::class, 'index']);

Route::get('/{grade}', [AppController::class, 'grade']);
Route::get('/{grade}/{subject}', [AppController::class, 'subject']);
Route::get('/{grade}/{subject}/{lesson}', [AppController::class, 'lesson']);

// admin
Route::get('/auth/login/admin/index', [AdminController::class, 'index']);
Route::get('/auth/login/admin/dashboard', [AdminController::class, 'index']);

Route::get('/auth/login/admin/grade', [GradeController::class, 'index']);
Route::get('/auth/login/admin/grade/add', [GradeController::class, 'add']);
Route::post('/auth/login/admin/grade/add', [GradeController::class, 'addData']);
Route::get('/auth/login/admin/grade/update/id={id}', [GradeController::class, 'update']);
Route::post('/auth/login/admin/grade/update', [GradeController::class, 'updateData']);
Route::get('/auth/login/admin/grade/delete/id={id}', [GradeController::class, 'delete']);

Route::get('/auth/login/admin/subject', [SubjectController::class, 'index']);
Route::get('/auth/login/admin/subject/add', [SubjectController::class, 'add']);
Route::post('/auth/login/admin/subject/add', [SubjectController::class, 'addData']);
Route::get('/auth/login/admin/subject/update/id={id}', [SubjectController::class, 'update']);
Route::post('/auth/login/admin/subject/update', [SubjectController::class, 'updateData']);
Route::get('/auth/login/admin/subject/delete/id={id}', [SubjectController::class, 'delete']);

Route::get('/auth/login/admin/chapter', [ChapterController::class, 'index']);
Route::get('/auth/login/admin/chapter/add', [ChapterController::class, 'add']);
Route::post('/auth/login/admin/chapter/add', [ChapterController::class, 'addData']);
Route::get('/auth/login/admin/chapter/update/id={id}', [ChapterController::class, 'update']);
Route::post('/auth/login/admin/chapter/update', [ChapterController::class, 'updateData']);
Route::get('/auth/login/admin/chapter/delete/id={id}', [ChapterController::class, 'delete']);

Route::get('/auth/login/admin/lesson', [LessonController::class, 'index']);
Route::get('/auth/login/admin/lesson/add', [LessonController::class, 'add']);
Route::post('/auth/login/admin/lesson/add', [LessonController::class, 'addData']);
Route::get('/auth/login/admin/lesson/update/id={id}', [LessonController::class, 'update']);
Route::post('/auth/login/admin/lesson/update', [LessonController::class, 'updateData']);
Route::get('/auth/login/admin/lesson/delete/id={id}', [LessonController::class, 'delete']);

// template
Route::get('/auth/login/admin/template/{dashboard}', [AdminController::class, 'template']);

// crowler data
Route::get('/c/r/o/w/l/e/r/data', [CrowlerDataController::class, 'index']);





















