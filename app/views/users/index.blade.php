@extends('layouts.index')

@section('titulo')
	Usuários
@stop
@section('conteudo')
	@if ($users)
	<ul>
		@foreach($users as $user)
		<li>{{ $user->real_name }} - {{ $user->email }}</li>
		@endforeach
	</ul>
	@else
		Nenhum Usuario cadastrado no sistema
	@endif
@stop