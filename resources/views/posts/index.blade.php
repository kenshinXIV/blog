@extends ('layouts.app')

@section('content')

<div class="container">
   <div class="row">
      <div class="col-md-12">
         <h1>All Post </h1>
         <a href="{{route('posts.create') }}" class="btn btn-primary btn-block"><i class="fa fa-plus-square-o"></i>Creat New Post</a>
         <table class="table table-striped text-center table-bordered">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th colspan="2">Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($posts as $post)
                  <tr>
                     <th>{{ $post->id}}</th>
                     <td>{{ $post->title}}</td>
                     <td>{{ substr($post->content, 0, 50) }} {{strlen($post->content) > 50 ? "..." : ""}}</td>
                     <td><a href="{{route('posts.show', $post->id) }}" class="btn btn-blocked btn-sm btn-success"><i class="fa fa-eye"></i></a></td>
                     <td><a href="" class="btn btn-blocked btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $post->id }}"><i class="fa fa-trash"></i></a></td>
             
                  </tr>
                   <!-- Delete modal -->
                  <div class="modal fade" id="modal-delete-{{ $post->id }}">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title"><i class="fa fa-trash"></i> Delete</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <p class="text-center">Do you want to delete?</p>
                        </div>
                        <div class="modal-footer">
                           <form action="{{route('posts.destroy', $post->id) }}" method="POST">
                                 {{ csrf_field() }}
                                 {{ method_field('DELETE') }}
                                 <button class="btn btn-info">YES</button>
                           </form>
                           <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                     </div>
                  </div>	
               @endforeach
               
            </tbody>
         </table>
      </div>

   </div>

  
</div>
@endsection