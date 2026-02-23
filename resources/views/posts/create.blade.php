<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/posts" method="POST">
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

