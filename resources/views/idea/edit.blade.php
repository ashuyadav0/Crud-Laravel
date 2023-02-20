<h2>Editar la idea {{$idea->id}}</h2>
<form action="{{route('ideas.update',['idea'=>$idea])}}" method="POST">
@csrf
@method('PUT')
<input type="text" name="nom" value="{{$idea->nom}}"> <br><br>

<input type="text" name="description" value="{{$idea->description}}"> <br><br>

<input type="submit" value="Update">

</form>