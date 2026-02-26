<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/post/delete/{{$post->id}}" method="post">
        @csrf
        <h1>Are your sure you want to delete?</h1>
        <p>Action cannot be undone</p>
        <button>Delete</button>
    </form>
</body>
</html>