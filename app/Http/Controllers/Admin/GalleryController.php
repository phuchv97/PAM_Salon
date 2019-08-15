<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Gallery;

class GalleryController extends Controller
{
    public function index(Request $request){
        $description = null;
        $query = null;
        if($request->has('description')){
            $description = $request ->description;
            $query = Gallery::where('description','like',"%$description%");
        }else{
            $query = null;
        }
        if($query == null){
            $gallery = Gallery::paginate(8);
        }else{
            $gallery = $query->paginate(8);
        }
        return view('admin.gallery.index',compact('gallery','description'));
    }
    public function delete($id){
        $gallery = Gallery::find($id);

        if($gallery != null){
            $gallery->delete();
        }
        return redirect(route('list_gallery'));
    }
    public function addImage(){
        $gallery = new Gallery();

        return view('admin.gallery.form-gallery',['gallery'=>$gallery]);
    }
    public function save(Request $request){

            
            $validatedData = $request->validate([
                
                'image' => 'required',
                'description' => 'required|max:255',

            ],
            [
                
                'description.max' => 'Maximum length of no more than 255 characters',
                'description.required' => 'Please enter a description for the image',
                'image.required' => 'Please select an Image',
                
            ]
        );
            $model = new Gallery();
            $model->fill($request->all());

            if ($request->hasFile('image')) {
        
                $ext = $request->image->extension();
                
                $filename = $request->image->getClientOriginalName();
                
                $filename = $filename . "-" . str_random(20) . "." . $ext;
                
                $path = $request->image->storeAs('Gallery', $filename);
                
                $model->image = "uploaded/$path";
            }
            $model->save();
            return redirect(route('list_gallery'));

    }
}
