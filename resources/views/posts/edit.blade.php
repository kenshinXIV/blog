@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <form method="Post" action="{{route('posts.update',$post->id)}}" enctype="multipart/form-data" >
                    @csrf 
                        <div class="form-group">
                            <label >Image</label>
                            <input type="file"  class="form-control" name="image" >
                        </div>
                        <div class="form-group">
                            <label >Title</label>
                            <input type="text"  class="form-control" name="title" value=" {{ $post->title}}">
                        </div>
                        <div class="form-group">
                            <label >Content</label>
                            <textarea class="form-control" name="content" id="" cols="30" rows="10">{{ $post->content}}</textarea>
                        </div>
                      
                       
                        
                </div>
            </div>
    
            <hr>

        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                     <h5>Created Date: </h5>
                     <p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                     <h5>Updated Date: </h5>
                     <p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                    
                     
                    <a href="{{route('posts.show' ,$post->id)}}" class="btn btn-primary m-2"> <i class="fa fa-reply">Back</i></a>
                    <button  class="btn btn-success m-2"> <i class="	fa fa-pencil-square-o">Save</i></button>
                    </form> 
                </div>
            </div>
            
            
        </div>
    
    </div>
    
       
       
    

</div>

@endsection