<h2>Agregar IDEA</h2>
<form action="{{route('ideas.store')}}" method="POST">
@csrf
<label>Idea: </label>
<input type="text" name="nom" > <br><br>

<label>Descripció: </label>
<input type="text" name="description" > <br><br>

<input type="submit" value="Enviar">

</form>