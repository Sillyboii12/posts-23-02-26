<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post</h1>

    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>


    <form action="/post/edit/{{$post->id}}" method="post">
        @csrf
        <div>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="content">Content: </label>
            <textarea name="content" id="content"></textarea>
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
</body>
</html>

