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
        $request->validated();
        // dd($request->Title); // var_dump() + die()
        plat::create([
            'title'=>$request->Title,
            'description'=>$request->description,
            'path' => $this->uploadImage($request)
        ]);
        // session()->flash('succes', 'image été enregistrer');
        return 'nadi';

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
    public function edit($id)
    {
       $post=plat::findorFail($id);
       return view('pages.dashboard',compact('post'));
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
