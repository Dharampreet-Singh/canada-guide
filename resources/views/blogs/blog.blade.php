<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title> Blogs </title>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>
<body>

<section id="blog">

    <!-- 1 -->
    <div class="blog-box">
        <div class="blog-img">
            <img src="{{ asset('images/photo1.jpg') }}" alt="Blog">
        </div>
        <div class="blog-text">
            <span> 21st October 1999 </span>
            <h1 href="#" class="blog-title"> {{$blog->title}} </h1>
            {{--                    <a href="{{ url('/blogs', $blog->id) }}">Read More</a>--}}
            <p>
                {{$blog->description}}
            </p>
        </div>
        <div class="blog-comment">
            <input type="text" placeholder="comment..." name="comment">
            <button type="submit"> Post</button>
        </div>
        <div class="blog-display-comment">
            <h1> Comments: </h1>

            @foreach($comments as $comment)
                <div class="blog-comment-body">
                    @foreach($users as $user)
                        @if($comment->user_id == $user[0]->id)
                            <span> {{$user[0]->name}} </span>
                            <ul>
                                <li> {{$comment->comment}} </li>
                            </ul>
                        @endif
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>

</section>

</body>
</html>

