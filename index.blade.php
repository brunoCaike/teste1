<!DOCTYPE html>
<html>
	<head>
		<title>Auto Escola</title>
	</head>
	<body>
		<div>
			<a href="/carro/listar">Listagem</a>
			<form action="/carro/salvar" method="POST">
				@csrf
				<div>
					<div>	
						<label for="marca">Marca:</label>
						<input type="text" name="marca" value="{{ $carro->marca }}" />
					</div>
					<div>	
						<label for="modelo">Modelo:</label>
						<input type="text" name="modelo" value="{{ $carro->modelo}}" />
					</div>
				</div>
				<div>
					<div>	
						<label for="placa">Placa:</label>
						<input type="text" name="placa" value="{{ $carro->placa }}" />
					</div>
					<div>	
						<label for="cor">Cor:</label>
						<input type="text" name="cor" value="{{ $carro->cor }}" />
					</div>
					<div>	
						<label for="ano">Ano:</label>
						<input type="number" name="ano" value="{{ $carro->ano }}" />
					</div>
				</div>
				<div>
					<div>
						<input type="hidden" name="id" value="{{ $carro->id }}" />
						<button type="submit">Salvar</button>
					</div>
					<div>
						<button type="reset">Limpar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>