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
use App\Model\Reservation;
use App\Model\TimeReservation;
use App\Model\Contact;



class HomeController extends Controller
{
    function __construct(){
        $menus = Menus::all();
        view()->share('menus',$menus);
    }

    public function index(){
        $posts = Posts::orderBy('id','desc')->take(3)->get();
        $service_detail = Services::all();
        $services = Services::take(4)->get();
        $hairStylist = HairStylist::limit(4)->get();
        $stylist = HairStylist::all();
        $gallery = Gallery::take(4)->get();
        return view('home.index', compact('services','posts','service_detail','hairStylist','gallery','stylist'));
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
        $postsCate1 = Posts::where('category_id','=','1')->get();
        $postsCate2 = Posts::where('category_id','=','2')->get();
        $postsCate3 = Posts::where('category_id','=','3')->get();

         return view('home.blog', compact('postsCate1','postsCate2','postsCate3'));
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
        $phone_number = $user->phone_number;
        $reservation = Reservation::where('phone_number','=',"$phone_number")->get();
        
        $gallery = Gallery::where('user_id','=',"$user->id")->get();
        
        return view('home.profile',['gallery'=>$gallery,'user'=>$user,'reservation'=>$reservation]);
    }
    public function formBookP1($hair_stylist_id){
        $hairStylist = HairStylist::limit(4)->get();
        $stylist = HairStylist::all();
        return view('home.form-book-p1',compact('hairStylist','stylist','hair_stylist_id'));
    }
    public function formBookP2(Request $request){
        $phone_number = $request->phone_number;
        $reservation_date = $request->reservation_date;
        $hair_stylist = $request->hair_stylist;
        $services = Services::all();
        $reservation_time = TimeReservation::orderBy('time_reservation')->get();
        return view('home.form-book-p2',compact('phone_number','reservation_date','hair_stylist','services','reservation_time'));
    }
    public function save_reservation(Request $request){
        
        

        $time_reservation = $request->time_reservation;
        $time_reservation_id = TimeReservation::where('time_reservation','=',"$time_reservation")->first();
        $reservation_time_id = $time_reservation_id->id;

        $model = new Reservation();
        $model->hair_stylist_id = $request->hair_stylist;
        $model->service_id = $request->service;
        $model->name = $request->name;
        $model->status = 'Chưa Thanh Toán';
        $model->phone_number = $request->phone_number;
        $model->reservation_date = $request->reservation_date;
        $model->reservation_time_id = $reservation_time_id;
        $model->save();

        return view('home.reservation-notice',['model'=>$model]);



    }
    
    public function saveContact(Request $request){
        $validatedData = $request->validate([
                'email' => 'required',
                'name'=> 'required',
                'titles' => 'required',
                'message' => 'required',

            ],
            [
                'name.required' => 'vui lòng nhập tên',
                'email.required' => 'vui lòng nhập email ',
                'titles.required' => 'vui lòng nhập tiêu đề',
                'message.required' => 'vui lòng nhập góp ý của bạn'
                
            ]
        );

        $model = new Contact();
        $model->fill($request->all());
        $model->save();
        return view('home.contact',['notification'=>'Gửi góp ý thành công']);

    }
}
