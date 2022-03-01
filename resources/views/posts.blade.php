<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get all posts</title>
</head>
<body>
    <h1>Here all the posts</h1>

    @foreach($posts as $post)
        <h3>{{$post->Title}}</h3>
        <h3>{{$post->Body}}</h3>

    @endforeach
</body>
</html>