@extends('layouts.app')



@section('content')

<h2>Albums</h2>
    
    @if(count($albums) > 0)
        
        <div class="row text-center">
            @foreach($albums as $album)

                {{-- @if($i == $colcount) --}}
                
                    <div class="col-sm-4">
                    {{-- {{-- <a href="{{route('albums',$album->id)}}"></a> --}}
                   
                    <a href = "albums/{{$album->id}}"><img style="height:200px;widht:200px;" src="storage/album_covers/{{$album->cover_image}}" alt=""></a>
                    <p><h4>{{$album->name}}</h4></p>

                    </div>


                {{-- @else --}}

                {{-- <div class="col-sm-4">
                    <a href="{{route('albums',$album->id)}}"></a>
                    <img src="storage/album_covers/{{$album->cover_image}}" alt="">
                </div> --}}

                
            @endforeach
        </div>

    @else

        <h3>No Albums Found</h3>

    @endif

@endsection