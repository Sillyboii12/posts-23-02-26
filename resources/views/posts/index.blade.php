<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    @foreach ($posts as $post)
        <div><h2>{{ $post->title }}</h2> <p>{{ $post->content}}</p></div>
        <a href="/post/{{$post->id}}">Show</a>
    @endforeach
    </ul>
</body>
</html>