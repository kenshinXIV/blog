@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="card">
               
                <div class="card-body">
                    <h1>Create Post</h1>
                    <form method="Post" action="{{ route('posts.store') }}" enctype="multipart/form-data" >
                    @csrf 

                    <div class="form-group">
                        <label >Title</label>
                        <input type="text"  class="form-control" name="title"">
                    </div>
                    <div class="form-group">
                        <label >Content</label>
                        <textarea class="form-control" name="content"  cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label >Image</label>
                        <input type="file"  class="form-control" name="image" required>
                    </div>
                    <button class="btn btn-info ">Save</button>
                </form>  
            </div>
    
            <hr>

        </div>
      
    
    </div>
    
       
       
    

</div>

@endsection