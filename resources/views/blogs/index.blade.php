@extends('layouts.app')

@section('content')
    
    

   <div class="container">

  
       <div class="row">
        @foreach($posts as $post)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" >
                <div class="container">
                    <div class="card" style="width:350px;">
                        <img class="card-img-top" src="{{ URL::asset('image/' . $post->image) }}" alt="Card image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <a href="{{ route('blogs.show',$post->id)}}" class="btn btn-dark">Read more</a>
                        </div>
                    </div>
                </div>
                
            </div>
            @endforeach
       </div>
    </div>
@endsection