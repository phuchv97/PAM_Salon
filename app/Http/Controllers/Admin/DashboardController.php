<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Gallery;
use App\Model\HairStylist;
use App\Model\Posts;
use App\Model\Product;
use App\Model\Services;
use App\Model\Comment;
use App\Model\Categories;
use App\Model\FeedbackHairStylist;

use App\User;



class DashboardController extends Controller
{
    public function index(){
        $gallery = Gallery::count();
        $hairStylist = HairStylist::count();
        $posts = Posts::count();
        $product = Product::count();
        $services = Services::count();
        $users = User::where('role_id','<','4')->count();
        $comment = Comment::count();
        $category = Categories::count();
        $feedback = FeedbackHairStylist::count();
        return view('admin.dashboard.index',compact('gallery','hairStylist','posts','product','services','users','comment','category','feedback'));
    }
    
}
