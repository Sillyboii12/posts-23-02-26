<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/post/edit/{{$post->id}}" method="post">
        @csrf
        <div>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" value="{{$post->title}}">
        </div>
        <div>
            <label for="content">Content: </label>
            <textarea name="content" id="content">{{$post->content}}</textarea>
        </div>
        <div>
            <button>Confirm</button>
        </div>
    </form>
</body>
</html>

