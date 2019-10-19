<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
    //

    public function create($album_id){

        return view('photos.create')->with('album_id',$album_id);



    }

    public function store(Request $request){

    	
        $this->validate($request,
        [
            'title' => 'required',
            'description' => 'min:6',
            'photo' => 'required|image'
        ]
        );
        // doing the below process in order to not having problem if we upload an image with the same name
       
        // get file name with extension
        $fileNameWithExtension = $request->file('photo')->getClientOriginalName();
        
        // get just file name
        $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);

        // get file extension

        $extension = $request->file('photo')->getClientOriginalExtension();

        // create new file name with extension

        $fileNameToStore = $fileName.'_'.time().'.'.$extension;

        $path = $request->file('photo')->storeAs('public/photos/'.$request->album_id,$fileNameToStore);

        
        // upload photo
        $photo = new Photo;
        $photo->album_id = $request->album_id;
        $photo->title = $request->title;
        $photo->description = $request->description;
        $photo->size = $request->file('photo')->getClientSize();
        $photo->photo = $fileNameToStore;


        $photo->save();

        // return redirect()->route('albums')->with('success','Album Has Been Created Successfuly');

        return redirect('/albums/'.$request->album_id)->with('success', 'Photo Uploaded');
        
    }


    // public function show($id){
        
    //     $album = Album::with('photos')->find($id);

    //     return view('albums.show')->with('album',$album);

    // }

    public function show($id){

    	$photo = Photo::find($id);

    	return view('photos.show')->with('photo',$photo);


    }
}
