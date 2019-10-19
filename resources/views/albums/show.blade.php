@extends('layouts.app')



@section('content')
<h3>{{$album->name}}</h3>
<a href="{{route('albums')}}" class="btn btn-primary btn-sm">Go Back</a>
<a href="/photos/create/{{$album->id}}" class="btn btn-success btn-sm">Upload Photo To This Album</a>
<hr>
{{-- show the photos related to the album --}}


	
<h2>Photos of {{ $album->name }}</h2>
    
    @if(count($album->photos) > 0)
        
        <div class="row text-center">
            @foreach($album->photos as $photo)

                {{-- @if($i == $colcount) --}}
                
                    <div class="col-sm-4">
                    
                   
              <a href = "{{ $photo->id }}"><img style="height:200px;widht:200px;" src="/storage/photos/{{$photo->album_id}}/{{ $photo->photo }}" alt="{{ $photo->title }}"></a>
                    <p><h4>{{$photo->title}}</h4></p>

                    </div>


                {{-- @else --}}

                {{-- <div class="col-sm-4">
                    <a href="{{route('albums',$album->id)}}"></a>
                    <img src="storage/album_covers/{{$album->cover_image}}" alt="">
                </div> --}}

                
            @endforeach
        </div>

    @else

        <h3>No Photo Found</h3>

    @endif

<hr>


@endsection