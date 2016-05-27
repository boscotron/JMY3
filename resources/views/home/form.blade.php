<h1>Post</h1>
<form method="post" action="{{url('home/form')}}">
<label>Nombre: </label>
<input type="text" name="name" value="{{$name}}" />
	{{csrf_field()}}
	<button type="submit"> Enviar </button>
</form>
<p>En nombre es : {{$name}}</p>