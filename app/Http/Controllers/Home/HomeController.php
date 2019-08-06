<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Services;
use App\Model\Categories;
use App\Model\Menus;
use App\Model\Posts;
use App\Model\HairStylist;
use App\Model\Gallery;




class HomeController extends Controller
{
    function __construct(){
        $menus = Menus::all();
        view()->share('menus',$menus);
    }

    public function index(){
        $posts = Posts::all();
        $services = Services::all();
        $hairStylist = HairStylist::all();
        $gallery = Gallery::take(4)->get();
        return view('home.index', compact('services','posts','hairStylist','gallery'));
    }
    public function service(){
        $services = Services::all();
        return view('home.service',['services'=>$services]);
    }
    public function blog(){
        $posts = Posts::all();
         return view('home.blog', compact('posts'));
    }
    public function produce(){
        return view('home.produce');
    }
    public function album(){
        $gallery = Gallery::all();
        return view('home.album',['gallery'=>$gallery]);
    }
    public function contact(){
        return view('home.contact');
    }
}
