<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body clss="antialiased">
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <a href class="/posts/{{$post->id}}"><h2 class='title'{{$post->title }}></h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        
        <div class='paginate'>{{ $posts->links()}}</div>
        
        {{--<div>
          @foreach($questions as $question)
              <div>
                  <a href="https://teratail.com/questions/{{ $question['id'] }}">
                      {{ $question['title'] }}
                  </a>
              </div>
          @endforeach
        </div>--}}
        
   </body>
</html>