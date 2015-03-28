@extends('layouts.index')

@section('titulo')
	Usuários
@stop
@section('conteudo')
	<table class="table table-bordered">
        <tr>
			<th width="2%">#</th>
			<th>Nome</th>
			<th>E-Mail</th>
			<th width="10%">Ações</th>
        </tr>
	@if ($users)
		@foreach($users as $user)
        <tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->real_name }}</td>
			<td>{{ $user->email }}</td>
			<td>
				<div class="btn-group pull-right">
                <a class="btn btn-default" title="Editar o registro" href="">
                  <i class="fa fa-pencil-square-o"></i>
                </a>
                <a class="btn btn-danger modal-confirm-action" title="Deletar o registro" href="">
                  <i class="fa fa-trash-o"></i>
                </a>
            </div>
			</td>
        </tr>
		@endforeach
	@else
		Nenhum Usuario cadastrado no sistema
	@endif
	</table>
                
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
@stop