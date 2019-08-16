<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\FeedbackHairStylist;


class FeedbackHairStylistController extends Controller
{
    
    	public function save(Request $request){
        
        $validatedData = $request->validate([
        
            'feedback'=> 'required', 
        ],
        [
            'feedback.required' => 'Bạn vui lòng đánh giá cho nhà tạo kiểu',
        ]
    );
        $model = new FeedbackHairStylist();
    
    
        $model->hair_stylist_id = $request->hair_stylist_id;
        $model->reservation_id = $request->reservation_id;
        $model->feedback = $request->feedback;
        $model->save();
        
    return redirect(route('profile'));
    }
}
