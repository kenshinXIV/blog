@extends('layouts.app')

@section('content')

<div class="container py-6">
    <div class="row">
        <div class="col-md-9">
     
            <div class="card">
                <div class="card-body">
                <h3>{{ $post->title}}</h3>
                <img src="{{ URL::asset('image/' . $post->image) }}"  width="100%" height ="50%" class="img">	
                <p> {{ $post->content}}</p>
                <hr>
                <h4>Comment</h4>
                <hr>
             
            @foreach ($comments as $comment)
            <br>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                        <p>
                            <strong>{{$comment->user->name}}</strong> <br>
                            {{ date('M j, Y h:ia', strtotime($comment->created_at)) }}
                        </p>
                        <p></p>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                <p class="">{{$comment->comment}}</p>
                                </div>
                            </div>
                        </div>
                    

                    </div>
                    
                </div>
                <br>
            </div>
           
            @endforeach
            <br>
            <div class="card">
                   @guest
                    <div class="card-body text-center">
                    <p> Want to comment? <a href="{{ route('login') }}"> SIGN IN</a> or <a href="{{ route('register') }}">REGISTER</a> </p>
                    </div>
                    @else
                    <form method="Post" action="{{ route('comments.store')}}">
                        @csrf
                        <input type="hidden" name="idPost" value="{{ $post->id}}">
                        <input type="hidden" name="idUser" value="{{ $post->user->id}}">
                        <textarea class="form-control" name="comment" id="" rows="4"></textarea>
                        
                        <button class="btn btn-primary mt-2 btn-block" >Comment</button>
                    </form>
                    @endguest
                    <br>

            </div>
            </div>
        </div>
        </div>
           
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Posted by: </h5>
                     <p>{{$post->user->name}}</p>
                     <h5>Created Date: </h5>
                     <p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                    
                  
                 </div>
            </div>
            
            
        </div>
    
    </div>
    
       
       
    

</div>

@endsection