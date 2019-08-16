<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\FeedbackHairStylist;

class FeedbackController extends Controller
{
    public function index(Request $request){
    	
        $feedbackHairStylist = FeedbackHairStylist::paginate(8);
        
        return view('admin.feedback-hair-stylist.index',['feedbackHairStylist'=>$feedbackHairStylist]);
    }
    public function delete($id){

    	$feedbackHairStylist = FeedbackHairStylist::find($id);
    	if($feedbackHairStylist != null){
    		$feedbackHairStylist->delete();
    	}
    	return redirect(route('list_feedback'));
    }
}
