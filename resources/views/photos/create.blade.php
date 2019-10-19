@extends('layouts.app')



@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Upload A Photo</h3>
            {{Form::open(['action' => 'PhotosController@store', 'method' => 'Post', 'enctype' => 'multipart/form-data'])}}

                {{-- {{Form::label('Name')}} --}}
                {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Enter Title'])}}

                {{-- {{Form::label('someting Else')}} --}}
                {{Form::textarea('description','',['class' => 'form-control' , 'placeholder' => 'Photo Description','style' => 'margin-top:6px;'])}}

                {{-- hidden field --}}
                {{Form::hidden('album_id',$album_id)}}
                {{Form::file('photo',['style' => 'margin-top:6px;'])}}<br>
                {{Form::submit('Create Album',['class' => 'btn btn-success', 'style' => 'margin-top:6px;'])}}
                



            {{Form::close()}}
        </div>
    </div>


@endsection