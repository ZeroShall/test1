@extends('layouts.master')
@section('title') Tin Tức @endsection
@section('danhmuc') @include('layouts.danhmuc') @endsection
@section('content')
    <div class="col-sm-9">
        <div class="blog-post-area">
            <h2 class="title text-center">Latest From our Blog</h2>
            @foreach($new as $item)
                <div class="single-blog-post">
                    <h3>{{ $item->title }}</h3>
                    <div class="post-meta">
                        <ul>
                            <li><i class="fa fa-user"></i> Mac Doe</li>
                            <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                            <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                        </ul>
                        <span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
                    </div>
                    <a href="">
                        <img src="uploads/news/{{ $item->image }}" alt="">
                    </a>
                    <p>{{ $item->content }}</p>
                    <a class="btn btn-primary" href="">Read More</a>
                </div>
            @endforeach
            <div class="pagination-area">
                <ul class="pagination">
                    <li><a href="" class="active">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

