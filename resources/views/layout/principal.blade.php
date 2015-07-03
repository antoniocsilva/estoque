<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
	<title>Controle de estoque</title>
</head>
<body>
	</div>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand"href="/produtos">Estoque Laravel</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
					<li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
				</ul>
			</div>	
		</nav>
		@yield('conteudo')
		<footer class="footer">
			<p> © Livro de Laravel da Casa do Código.</p>
		</footer>
	</div>
</body>
</html>