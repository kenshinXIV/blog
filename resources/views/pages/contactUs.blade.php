@extends ('layouts.app')


@section('content')
<div class="container">
    <div class="row py-1">
        <div class="col-md-4">
            <img src="{{ URL::asset('/image/logo2.PNG') }}" class="img-fluid animated" width="90%;" alt="">
                   
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Contact us</h1>   
                    <form action="">
                        <label >Name</label>
                        <input type="text" class="form-control">
                        <label >Email</label>
                        <input type="text" class="form-control">
                        <label >Message</label>
                        <textarea name="" id=""  class="form-control" rows="10"></textarea>
                        <button class="btn btn-dark btn-block mt-2" >Send</button>
                    </form>
                      
                    
                </div>
            </div>
          </div>
    </div>
</div>


@endsection