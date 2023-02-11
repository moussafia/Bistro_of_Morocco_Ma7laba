<?php

namespace App\Http\Controllers;

use App\Models\plat;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAddReques;
use App\Traits\UploadImageTrait;



class PlatController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fetsh=plat::get();
        return view('pages.dashboard',compact('fetsh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddReques $request)
    {
        $validata = $request->validated();
        // dd($validata); // var_dump() + die()
        
        // plat::create([
        //     'title'=>$request->Title,
        //     'description'=>$request->description,
        //     'path' => $image_path,
        // ]);
        // session()->flash('succes', 'image été enregistrer');
        $image_path = $request->file('imagePlat')->getClientOriginalName();
        $path=$request->$image_path->storeAs($foldername,date('YmdHi').$image_path,'mohammed');
        return $path;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function show(plat $plat)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function edit(plat $plat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, plat $plat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function destroy(plat $plat)
    {
        //
    }
}
