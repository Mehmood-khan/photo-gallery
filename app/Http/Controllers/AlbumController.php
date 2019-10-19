<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{
    //

    public function index(){

        $albums = Album::with('photos')->get();
        return view('albums.index')->with('albums',$albums);
        
    }
    
    
    public function create(){

        return view('albums.create');
    }
    
    
    public function store(Request $request){
        
        $this->validate($request,
        [
            'name' => 'required',
            'description' => 'min:6',
            'cover_image' => 'required|image'
        ]
        );
        // doing the below process in order to not having problem if we upload an image with the same name
       
        // get file name with extension
        $fileNameWithExtension = $request->file('cover_image')->getClientOriginalName();
        
        // get just file name
        $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);

        // get file extension

        $extension = $request->file('cover_image')->getClientOriginalExtension();

        // create new file name with extension

        $fileNameToStore = $fileName.'_'.time().'.'.$extension;

        $path = $request->file('cover_image')->storeAs('public/album_covers',$fileNameToStore);

        
        // create new album
        $album = new Album;
        $album->name = $request->name;
        $album->description = $request->description;
        $album->cover_image = $fileNameToStore;


        $album->save();

        return redirect()->route('albums')->with('success','Album Has Been Created Successfuly');
        
    }


    public function show($id){
        
        $album = Album::with('photos')->find($id);

        return view('albums.show')->with('album',$album);

    }
}
