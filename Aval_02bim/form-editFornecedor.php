<?php
	require 'init.php';
	//pega o ID da URL
	$id = isset($_GET ['id']) ? (int) $_GET['id'] : null;
	//valida o ID
	if(empty($id))
	{
 echo "ID para alteração não definido";
 exit;
 }
 // busca os dados do usuário a ser editado
 $PDO = db_connect();
 $sql = "SELECT nomeFornecedor, dataFundacao, email FROM fornecedores WHERE idFornecedor = :id";
 $stmt = $PDO->prepare($sql);
 $stmt->bindParam(':id', $id, PDO::PARAM_INT);
 $stmt->execute() ;
 $fornecedor = $stmt->fetch(PDO::FETCH_ASSOC);
 /* se o método fetch () não retornar um array
 significa que o ID não corresponde a um usuário válido */
 if(!is_array($fornecedor))
 {
    echo "Nenhum fornecedor encontrado";
    exit;
 }
 $dataOK = dateConvert($fornecedor['dataFundacao']);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Eletronica Hélle</title>
		<meta charset="utf-8">
		<link type="text/css" href="css/jquery-ui.css" rel="stylesheet"/>
		<link type="text/css" href="css/layout.css" rel="stylesheet"/>
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/datepicker-pt-BR.js"></script>
	</head>
	<body>
		<div class ="tudo">
			<div class="topo">
				<div class="imgTopo">
				<img src="img/logo.png" alt="Logo Iron Maiden">
			</div>
			<div class="menuTopo">
				<nav>
					<ul>
						<li><a href="index.html"> Home </a></li>
						<li><a href="cliente.php"> Clientes </a></li>
						<li><a href="fornecedor.php"> Fornecedores </a></li>
						<li><a href="sobre.html"> Sobre </a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="principal" >
			<div class ="container">
				<div class="idBlog">
					<img src="img/idBlog.png" alt="Fã Club Iron Maiden">
	<div class="conteudo" id="conteudo">
    <form method="post" name="formAltera" action="editFornecedores.php" enctype="multipart/form-data" onSubmit="return verifica()">
        <h1>Edição de dados</h1>
        <table width="100%">
            <tr>
                <th width="18%">Nome do Fornecedor</th>
                <td width="82%"><input type="text" name="txtNome" id="nome" value="<?php echo $fornecedor['nomeFornecedor']?>"></td>
            </tr>
            <tr>
                <th>Data de Fundação</th>
                <td><input type="text" name="txtData" id="data" class="cF" value="<?php echo $dataOK ?>">
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="txtEmail" id="email" readonly value="<?php echo $fornecedor['email']?>"></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <td><input type="submit" name="btnEnviar" value="Alterar"></td>
                <td><input type="reset" name="btnLimpar" value="Limpar"></td>
            </tr>
        </table>
    </form>
	<div class="rodape">
	<h5> Grupo MW &copy ; Copyright 2016 - Todos os
	direitos reservados </h5>
	</div>
</body>
</html>
