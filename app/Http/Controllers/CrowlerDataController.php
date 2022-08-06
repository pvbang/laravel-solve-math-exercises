<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Chapter;
use App\Models\Lesson;
use App\Http\Controllers\Goutte;
use Weidner\Goutte\GoutteFacade;

class CrowlerDataController extends Controller
{
    //
    public function index(){
        $ok = GoutteFacade::request('GET', 'https://giaibaitap.me/lop-2/giai-bai-1-2-3-4-5-trang-4-sgk-toan-2-a48004.html');
    
        $name = $ok->filter('span')->each(function ($node) {
            // echo ($node->attr('src')) ."</br>";
            echo ($node->text()) ."</br>";
        });

        
    }

}
