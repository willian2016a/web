<?php
	require 'init.php';
?>
<html>
<head>
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/datepicker-pt-BR.js"></script>
</head>
<body>

		<div class="conteudo" id="conteudo">
		<form method="post" name="formCadastro" action="addCliente.php" enctype="multipart/form-data" onSubmit="return verifica()">
			<h1>Cadastro Cliente</h1>
			<table width="100%">
				<tr>
					<th width="18%"> Nome do Cliente </th>
					<td width="82%"><input type="text" name="txtNome" id="nome"></td>
				</tr>
					<th> Data de Cadastro </th>
					<td><input id="data" type="text" name="txtData" class="cC" Value="dd/mm/aaaa" readonly></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><input type="email" name="txtEmail" id="email"></td>
				</tr>
				<tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btnEnviar" value="Cadastrar">
						<input type="reset" name="btnLimpar" value="Limpar"></td>
				</tr>
			</table>
		</form>
		</div>
		</html>
