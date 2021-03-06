<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1>Add Post Here</h1>
                    </div>
                    <div class="card-body">
                        @if (Session::has('post_created'))
                            <div class="alert alert-success" role="success">
                                {{Session::get('post-created')}}
                            </div>
                        @endif
                        <form method="post" action="{{route('post.addsubmit')}}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" name="title"  class="form-control" placeholder="Enter post title">
                            </div>
                            <div class="form-group">
                                <label for="Body">Post Description</label>
                                <textarea class="form-control" name="body" rows="3" cols=""></textarea>
                            </div>
                            <input type="submit" class="btb btn-success my-3 rounded" value="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>