<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>BAck office </title>
</head>
<body>
    <div class="container-fluid text-center">
        <a href="/ajouter" class="btn btn-warning" >Ajouter Commentaire</a>
        <a href="/add" class="btn btn-warning" >Add post</a>
        
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th> Description</th>
                <th>Noms de l'Auteur </th>
                <th>Titre du Poste</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($comments as $comment)
        <tbody>
            <td>{{$comment->id}}</td>
            <td>{{$comment->title}}</td>
            <td>{{$comment->content}}</td>
            <td>{{$comment->author_name}}</td>
            <td>{{$comment->post_id}}</td>
            <td>
                <a href="#" class="btn btn-warning"><i class="bi bi-eye"></i></a>
                <a href="/modifier/{{$comment->id}}" class="btn btn-info"><i class="bi bi-pencil"></i></a>
                <form action="{{ route('comments.delete', $comment->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>            
            </td>
        </tbody>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>