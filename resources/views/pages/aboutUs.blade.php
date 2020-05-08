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
                    <h1>About Us</h1>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        <br>
                        All of our bootstrap themes are created with care, fully responsive and cross-browser compatible. You can use our themes in your personal or commercial projects. Right now we have 78 free bootstrap themes and they were downloaded more than 3,239,143 times. We regularly release new bootstrap themes. Follow us using the below channels if you want to be notified.
                    </p>
                </div>
            </div>
          </div>
    </div>
</div>


@endsection