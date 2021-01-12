<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Book;
use App\Models\ScholarshipPhd;
use App\Models\ScholarshipMaster;
use App\Models\ScholarshipBachelor;
use App\Models\ScholarshipHighschool;
use App\Models\Video;
use App\Models\Website;
use Illuminate\Http\Request;

class HomeInterfaceController extends Controller
{
    public function scholar_highschool(){
        $highschools= ScholarshipHighschool::latest()->get();
        $bachelors = ScholarshipBachelor::latest()->get();
        $masters = ScholarshipMaster::latest()->get();
        $phds = ScholarshipPhd::latest()->get();
        $books = Book::latest()->get();
        $videos = Video::latest()->get();
        $websites = Website::latest()->get();
        return view('HomeUserInterface.allcontent',compact("highschools","bachelors","masters","phds","books","videos","websites"))->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function scholar_bachelor(){
        $highschools= ScholarshipHighschool::latest()->get();
        return view('HomeUserInterface.allcontent',compact("highschools"))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function scholar_master(){

    }
    public function scholar_phd(){

    }
    public function source_book(){

    }
    public function source_video(){

    }
    public function source_website(){

    }


}
