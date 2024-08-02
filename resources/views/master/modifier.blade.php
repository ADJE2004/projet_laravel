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
        <form action="/modifier/traitement" method="POST">
            @csrf
            <input type="text" name="id" style="display: none;" value="{{ $comments->id }}">
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" name="title" id="" value="{{$comments->title}}">
            </div>

            <div class="mb-3">
                <label for="Content" class="form-label">Description</label>
                <textarea type="text" class="form-control" name="content" id="" >{{$comments->content}}</textarea>
            </div>

            <div class="mb-3">
                <label for="author_name" class="form-label">Nom de l'Auteur </label>
                <input type="text" class="form-control" name="author_name" id="" value="{{$comments->author_name}}"/>
            </div>

            <div class="mb-3">
                <label for="post_id" class="form-label">Titre du Post</label>
                <select name="post_id" class="form-select" value="{{$comments->post_id}}">
                    @foreach($posts as $post)
                        <option value="{{ $post->id }}" >{{ $post->title}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/" class="btn btn-warning" >Revenir</a>
        </form>
    </div>    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>