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
        $posts = Posts::take(3)->get();
        $service_detail = Services::all();
        $services = Services::take(4)->get();
        $hairStylist = HairStylist::limit(4)->get();
        $gallery = Gallery::take(4)->get();
        return view('home.index', compact('services','posts','service_detail','hairStylist','gallery'));
    }
    public function blog_detail($id){
        $post = Posts::where('id','=', $id)->first();
        $post_new = Posts::orderBy('id','desc')->limit(3)->get();
        return view('home.blog-detail',['post'=>$post,'post_new'=>$post_new]);
    }
    public function service(){
        $service = Services::limit(4)->get();
        $service_detail = Services::all();
        return view('home.service',['service_detail'=>$service_detail, 'service'=>$service]);
    }
    public function blog(){
        $posts = Posts::all();
         return view('home.blog', compact('posts'));
    }
    public function product(){
        return view('home.product');
    }
    public function product_detail(){
        return view('home.product-detail');
    }
    public function album(){
        $gallery = Gallery::all();
        return view('home.album',['gallery'=>$gallery]);
    }
    public function contact(){
        return view('home.contact');
    }
}
