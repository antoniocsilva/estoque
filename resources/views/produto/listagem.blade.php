@extends('layout.principal')
@section('conteudo')
@if(empty($produtos))
<div calss="alert alert-danger">Nenhum produto cadastrado.</div>
@else
<h1>Listagem de produtos</h1>
		<table class="table table-striped table-bordered table-hover">
			<th>Nome</th>
			<th>Valor</th>
			<th>Decrição</th>
			<th>Quantidade</th>
			<th colspan="3">Ações</th>
			@foreach ($produtos as $p)
			<tr class="{{$p->quantidade<=1 ? 'danger' : ''}}">
				<td>{{ $p->nome }}</td>
				<td>{{ $p->valor }}</td>
				<td>{{ $p->descricao }}</td>
				<td>{{ $p->quantidade }}</td>
				<td>
					<a href="{{action('ProdutoController@mostra', $p->id)}}"> 
						<span class="glyphicon glyphicon-search"></span>
				    </a>
				 </td>
				 <td>
				 	<a href="{{action('ProdutoController@atualiza', $p->id)}}">
				 		<span class="glyphicon glyphicon-refresh"></span>
				 	</a>
				 </td>	
				 <td>
				 	<a href="{{action('ProdutoController@remove', $p->id)}}">
				 		<span class="glyphicon glyphicon-trash"></span>
				 	</a>
				</td>
			</tr>
			@endforeach
		</table>
@endif
<h4><span class="label label-danger pull-right">
		Um ou menos itens no estoque
	</span>
</h4>
@if(old('nome'))
<div class="alert alert-success">
	<strong>Sucesso!</strong> 
		O produto {{ old('nome') }} foi adicionado! 
</div>
@endif		
@stop