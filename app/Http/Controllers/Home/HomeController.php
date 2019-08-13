<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Services;
use App\Model\Categories;
use App\Model\Menus;
use App\Model\Posts;
use App\Model\HairStylist;
use App\Model\Gallery;
use App\Model\Product;
use App\Model\Comment;




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
        $post_new = Posts::orderBy('id','desc')->limit(4)->get();
        $comment = Comment::where('post_id','=',"$id")->get();
        return view('home.blog-detail',['post'=>$post,'post_new'=>$post_new,'comment'=>$comment]);
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
        $products = Product::all();
        return view('home.product',['products'=>$products]);
    }
    public function product_detail($id){
        $product = Product::where('id','=',$id)->first();
        $products = Product::orderBy('id','desc')->limit(4)->get();
        return view('home.product-detail',['product'=>$product,'products'=>$products]);
    }
    public function album(){
        $gallery = Gallery::all();
        return view('home.album',['gallery'=>$gallery]);
    }
    public function contact(){
        return view('home.contact');
    }
    public function profile(){
        $user = Auth::user();
        $gallery = Gallery::where('user_id','=',"$user->id")->get();
        
        return view('home.profile',['gallery'=>$gallery,'user'=>$user]);
    }
    public function formdatlich(){
        return view('home.formdatlich');
    }
}
