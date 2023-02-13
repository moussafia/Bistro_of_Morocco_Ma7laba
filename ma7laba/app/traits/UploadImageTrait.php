<?php 
namespace App\Traits;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAddReques;

trait UploadImageTrait{
    public function uploadImage(StoreAddReques $request){
        $image = $request->file('imagePlat');
        $file_name=date('YmdHi').$image->getClientOriginalName();
        // $path=$request->file('imagePlat')->storeAs($foldername,$image_path,'mohammed');
        return $image->move('mohammed',$file_name);
    }
}