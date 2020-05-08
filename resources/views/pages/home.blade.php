@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron jumbotron-fluid" id="hero">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>TITLE OF A LONGER FEATURED BLOG POST</h1>
                    <h5>Enjoy your browsing and helping to each other's. </h5>
               </div>
                    <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ URL::asset('/image/logo2.PNG') }}" class="img-fluid animated" width="90%;" alt="">
                    </div>
                </div>
            </div>
        </div>         
    </div>
    

   <div class="container">
    <div class="row">
            <div class="col-md-8">
                <h1 class="text ">Latest Blog</h1>
                <hr>
                <div class="row">
                        @foreach($posts as $post)
                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" >
                            <div class="container">
                                <div class="card" style="width:350px;height:350px;">
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
            <div class="col-md-4">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCSGCVSUR&tabs=timeline&width=280&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="400" style="margin-top:70px;"  scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                <br>
                <hr>
                <a class="twitter-timeline" data-width="280" data-height="400" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
         </div>
         
    </div>
@endsection