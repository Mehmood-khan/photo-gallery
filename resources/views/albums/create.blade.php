@extends('layouts.app')



@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Create An Album</h3>
            {{Form::open(['action' => 'AlbumController@store', 'method' => 'Post', 'enctype' => 'multipart/form-data'])}}

                {{-- {{Form::label('Name')}} --}}
                {{Form::text('name','',['class' => 'form-control', 'placeholder' => 'Enter Album Name' ,'style' => 'margin:5px;'])}}

                {{-- {{Form::label('someting Else')}} --}}
                {{Form::textarea('description','',['class' => 'form-control' , 'placeholder' => 'Enter Description'])}}
    
                {{-- take the id which is --}}
                
                {{Form::file('cover_image',['style' => 'margin-top:6px;'])}}<br>
                {{Form::submit('Create Album',['class' => 'btn btn-success', 'style' => 'margin-top:6px;'])}}
                



            {{Form::close()}}
        </div>
    </div>


@endsection