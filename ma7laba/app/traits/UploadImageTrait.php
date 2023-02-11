<?php 
namespace App\Traits;
use App\Http\Requests\StoreAddReques;

trait UploadImageTrait{
    public function uploadImage(StoreAddReques $request,$foldername){
        $image_path = $request->file('imagePlat')->getClientOriginalName();
        $path=$request->$image_path->storeAs($foldername,date('YmdHi').$image_path,'mohammed');
        return $path;
    }
}