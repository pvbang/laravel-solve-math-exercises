<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Chapter;
use App\Models\Lesson;

use DOMDocument;
use DOMXPath;
use Storage;

class LessonController extends Controller
{
    //
    public function index(){
        $users = User::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $lessons = Lesson::all();

        return view('admin.lesson.index')
        ->with('users', $users)
        ->with('grades', $grades)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('lessons', $lessons);
    }

     // add
     public function add() {
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $lessons = Lesson::all();

        return view('admin.lesson.add')
        ->with('grades', $grades)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('lessons', $lessons);
    }
    public function addData(Request $request) {
        if ($request->input('name_chapter') != null && $request->input('name_lesson') != null) {
            $array = explode(" - ", $request->input('name_chapter'));
            
            $grade = DB::table('grades')->where('name_grade', $array[0])->first();
            $subject = DB::table('subjects')->where('name_subject', $array[1])->where('id_grade', $grade->id_grade)->first();
            $chapter = DB::table('chapters')->where('name_chapter', $array[2])->where('id_subject', $subject->id_subject)->first();

            $test = $request->input('content');

            preg_match_all('/<img[^>]+>/i', $test, $imgTags); 

            for ($i = 0; $i < count($imgTags[0]); $i++) {
                preg_match('/src="([^"]+)/i',$imgTags[0][$i], $imgage);
                $origImageSrc[] = str_ireplace( 'src="', '',  $imgage[0]);
            }

            foreach($origImageSrc as $image) {
                $n = str_replace("https://img.giaibaitap.me/picture/article/", "", $image);
                $contents = file_get_contents($image);
                $name = substr($n, strrpos($n, '/images/')+10);
                Storage::disk('public')->put($name, $contents);

                $url = "http://127.0.0.1:8080/";
                echo "<script>window.open('".$url.$image."', '_blank');</script>";
            }

            //
            $main = "";
            $array = explode("https://img.giaibaitap.me/picture/article/", $test);
            
            for ($i=0; $i < sizeof($array); $i++) {
                if($i == 0) {
                    $main = $main.$array[$i];
                } else {
                    list($width, $height, $type, $attr) = getimagesize($origImageSrc[$i-1]);
                    $main = $main.'http://127.0.0.1:8080/'."thumb_".$width."x".$height."/".substr($array[$i], strrpos($array[$i], '/images/')+10);
                }
            }

            $data = Lesson::create([
                'id_chapter' => $chapter->id_chapter,
                'name_lesson' => ucwords($request->input('name_lesson')),
                'content' => $main,
                'page' => $request->input('page'),
                'slug' => Str::slug($request->input('name_lesson'))
            ]);
        }

        // return Redirect('/auth/login/admin/lesson/add');
    }

    // update
    public function update($id) {
        $data = Lesson::find($id);
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $dataChapter = DB::table('chapters')->where('id_chapter', $data->id_chapter)->first();

        return View('admin.lesson.update')
        ->with('lesson', $data)
        ->with('dataChapter', $dataChapter)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('grades', $grades);
    }
    public function updateData(Request $request) {
        if ($request->name_lesson != null && $request->name_chapter != null) {
            $array = explode(" - ", $request->name_chapter);

            $grade = DB::table('grades')->where('name_grade', $array[0])->first();
            $subject = DB::table('subjects')->where('name_subject', $array[1])->where('id_grade', $grade->id_grade)->first();
            $chapter = DB::table('chapters')->where('name_chapter', $array[2])->where('id_subject', $subject->id_subject)->first();

            $filter = Str::contains($request->content, 'img.giaibaitap.me');

            preg_match_all('/<img[^>]+>/i', $request->content, $imgTags); 
            for ($i = 0; $i < count($imgTags[0]); $i++) {
                preg_match('/src="([^"]+)/i',$imgTags[0][$i], $image);
                $origImageSrc[] = str_ireplace( 'src="', '',  $image[0]);
            }

            $main = "";

            if($filter) {
                foreach($origImageSrc as $image) {
                    $n = str_replace("https://img.giaibaitap.me/picture/article/", "", $image);
                    $contents = file_get_contents($image);
                    $name = substr($n, strrpos($n, '/images/')+10);
                    Storage::disk('public')->put($name, $contents);
    
                    $url = "http://127.0.0.1:8080/";
                    echo "<script>window.open('".$url.$image."', '_blank');</script>";
                }
    
                $array = explode("https://img.giaibaitap.me/picture/article/", $request->content);
                
                for ($i=0; $i < sizeof($array); $i++) {
                    if($i == 0) {
                        $main = $main.$array[$i];
                    } else {
                        list($width, $height, $type, $attr) = getimagesize($origImageSrc[$i-1]);
                        $main = $main.'http://127.0.0.1:8080/'."thumb_".$width."x".$height."/".substr($array[$i], strrpos($array[$i], '/images/')+10);
                    }
                }
            } else {
                // $array = explode("http://127.0.0.1:8080/thumb_", $request->content);
                
                // for ($i=0; $i < sizeof($array); $i++) {
                //     if($i == 0) {
                //         $main = $main.$array[$i];
                //     } else {
                //         list($width, $height, $type, $attr) = getimagesize($origImageSrc[$i-1]);
                //         $main = $main.'http://127.0.0.1:8080/'."thumb_".$width."x".$height."/".substr($array[$i], strrpos($array[$i], '/images/')+7);
                //     }
                // }

                $main = $request->content;
            }

            // dd($main);

            $data = DB::table('lessons')->where('id_lesson', $request->id)
            ->update([
                'id_chapter' => $chapter->id_chapter, 
                'name_lesson' => ucwords($request->name_lesson), 
                'content' => $main, 
                'page' => $request->page, 
                'slug' => Str::slug($request->name_lesson)
            ]);
        }
        // return Redirect('/auth/login/admin/lesson');
    }

    // delete
    public function delete($id) {
        $data = Lesson::find($id);
        $data->delete();
        return Redirect('/auth/login/admin/lesson');
    }
}
