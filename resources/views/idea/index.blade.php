<!-- @foreach($ideas as $idea)
    <div class="article">
        <h3><a href="{{route('ideas.show',['idea'=>$idea])}}">Idea name: {{ $idea->nom}}</a></h3>
        <p>{{ $idea->description}}</p>
        <p>
            <a href="{{ route('ideas.edit',['idea'=>$idea])}}">Editar</a>
            <form action="{{route('ideas.destroy',['idea'=>$idea])}}" method="POST">
                @csrf 
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </p>
    </div>
@endforeach -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
   <!-- Latest compiled and minified Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
   <style>
    h1{
        text-align: center;
    }
    body{
        margin: 0 25% 0 25%;
    }
    tr, th{
        text-align: center;
    }
    </style>
</head>
<body>
<div class="row">
        <div class="col-12">
            <h1>CRUD IDEA</h1>
            <a href="{{route('ideas.create')}}" class="btn btn-success">Agregar
		    </a><br><br>
            <table class="table table-striped">
                <thead>
                <tr class="bg-primary">
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Descripció</th>
                    <th>Veure</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ideas as $idea)
                    <tr>
                        <td>{{ $idea->id}}</td>
                        <td>{{ $idea->nom}}</td>
                        <td>{{ $idea->description}}</td>
                        <td>
                            <a href="{{route('ideas.show',['idea'=>$idea])}}" class="btn btn-primary">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('ideas.edit',['idea'=>$idea])}}">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                        </td>
                        <td>
                        <form action="{{route('ideas.destroy',['idea'=>$idea])}}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</body>
</html>