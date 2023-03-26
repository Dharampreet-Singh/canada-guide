@extends('layouts.main')

@section('content')
<section id="blog">

    <div class="blog-heading">
        <span> Sharing is for Caring </span>
        <h3> All Blogs </h3>
    </div>

    <div class="blog-container">

        @foreach($blogs as $blog)
        <!-- 1 -->
        <div class="blog-box">
            <div class="blog-img">
                 <img src="{{ asset('images/photo1.jpg') }}" alt="Blog">
            </div>
            <div class="blog-text">
                <span> 21st October 1999 </span>
                <a href="{{ url('/blogs', $blog->id) }}" class="blog-title"> {{$blog->title}} </a>
                <a href="{{ url('/blogs', $blog->id) }}">Read More</a>
            </div>
        </div>
        @endforeach

    </div>

</section>
@endsection
