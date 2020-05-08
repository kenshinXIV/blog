@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                <h3>{{ $post->title}}</h3>
                <hr>
                <img src="{{ URL::asset('image/' . $post->image) }}"  width="100%" height ="50%" class="img">	
                <hr>
                <p> {{ $post->content}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                     <h5>Created Date: </h5>
                     <p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                     <h5>Updated Date: </h5>
                     <p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                    
                  
                    <a href="{{route('posts.index')}}" class="btn btn-primary m-2"> <i class="fa fa-reply">Back</i></a>
                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-success m-2"> <i class="	fa fa-pencil-square-o">Edit</i></a>
                </div>
            </div>
            
            
        </div>
    
    </div>
    
       
       
    

</div>

@endsection