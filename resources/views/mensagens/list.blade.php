<h1>Lista de Mensagens</h1>
<hr>
@foreach($mensagens as $m)
	<h3>{{$m->scheduledto}}</h3>
	<p>{{$m->title}}</p>
	<p>{{$m->text}}</p>
	<br>
@endforeach