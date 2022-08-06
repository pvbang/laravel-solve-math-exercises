<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Chapter;
use App\Models\Lesson;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//
Route::get('/grades', function() {
    return Grade::all();
});
Route::get('/grades/{id}', function($id) {
    return Grade::findOrFail($id);
});
Route::get('/gradesDESC', function() {
    return DB::table('grades')->orderBy('id_grade', 'desc')->get();
});

//
Route::get('/subjects', function() {
    return Subject::all();
});
Route::get('/subjects/{id}', function($id) {
    return Subject::findOrFail($id);
});
Route::get('/subjects/grade/{slug}', function($slug) {
    $grade = DB::table('grades')->where('slug', $slug)->first();
    $subject = DB::table('subjects')->where('id_grade', $grade->id_grade)->get();
    
    return $subject;
});

//
Route::get('/chapters', function() {
    return Chapter::all();
});
Route::get('/chapters/{id}', function($id) {
    return Chapter::findOrFail($id);
});
Route::get('/chapters/grade/{slug}', function($slug) {
    $grade = DB::table('grades')->where('slug', $slug)->first();
    $subject = DB::table('subjects')->where('id_grade', $grade->id_grade)->first();
    
    $chapters = DB::table('chapters')->where('id_subject', $subject->id_subject)->get();

    return $chapters;
});
Route::get('/chapters/subject/{id}', function($id) {
    $chapters = DB::table('chapters')->where('id_subject', $id)->get();
    return $chapters;
});
Route::get('/chapters/countLesson/{id}', function($id) {
    return DB::table('lessons')->where('id_chapter', $id)->count();;
});

//
Route::get('/lessons', function() {
    return Lesson::all();
});
Route::get('/lesson/{id}', function($id) {
    return Lesson::findOrFail($id);
});
Route::get('/lessons/chapter/{id}', function($id) {
    $lessons = DB::table('lessons')->where('id_chapter', $id)->get();
    return $lessons;
});
Route::get('/lessons/grade/{slug}', function($slug) {
    $grades = DB::table('grades')->where('slug', $slug)->first();
    $subjects = DB::table('subjects')->where('id_grade', $grades->id_grade)->get();

    $chapters = array();

    foreach($subjects as $key => $subject) {
        $chapter = DB::table('chapters')->where('id_subject', $subject->id_subject)->get();
        $chapters[$key] = $chapter;
    }

    $lessons = array();

    $i = 0;
    foreach($chapters as $chapter) {
        foreach($chapter as $c) {
            $lesson = DB::table('lessons')->where('id_chapter', $c->id_chapter)->get();
            $lessons[$i] = $lesson;
            $i++;
        }
    }

    $return = array();
    $j = 0;

    foreach($lessons as $lesson) {
        foreach($lesson as $l) {
            $return[$j] = $l;
            $j++;
        }    
    }

    return $return;
});

/*
Route::get('/users', function() {
    return User::all();
});

Route::get('/cua-hang/thuong-hieu/{thuonghieu}', function($thuonghieu) {
    return DB::table('giay')->where('ten_thuong_hieu', $thuonghieu)->get();
});

Route::get('/users/{id}', function($id) {
    return User::findOrFail($id);
});

Route::post('/users/create/{name}/{email}/{sdt}/{nameSign}/{pass}', function($name, $email, $sdt, $nameSign, $pass) {
    return User::create([
            'ten_nguoi_dung' => $name,
            'email' => $email,
            'sdt' => $sdt,
            'Ten_dang_nhap' => $nameSign,
            'password' => $pass,
            'id_phan_quyen' => '2',
        ]);
});

Route::patch('/users/{id}', function(Request $request, $id) {
    $user = User::findOrFail($id);
    $user->update($request->all());

    return $user;
});

Route::delete('/users/{id}', function($id) {
    return User::destroy($id);
});

*/