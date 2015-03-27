<title>sdadsa</title>
<h1>Lista de Usuarios</h1>
@if ($users)
<ul>
	@foreach($users as $user)
	<li>{{ $user->real_name }} - {{ $user->email }}</li>
	@endforeach
</ul>
@else
	Nenhum Usuario cadastrado no sistema
@endif