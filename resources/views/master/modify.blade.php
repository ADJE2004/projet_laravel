<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de de modification </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="/modify/traitement" method="POST">
            @csrf
            <input type="text" name="id" style="display: none;" value="{{$posts->id}}">
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" name="title" id="" value="{{$posts->title}}">
            </div>

            <div class="mb-3">
                <label for="Content" class="form-label">Description</label>
                <textarea type="text" class="form-control" name="content" id="" >{{$posts->content}}</textarea>
            </div>

            

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/" class="btn btn-warning" >Revenir</a>
        </form>
    </div>    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>