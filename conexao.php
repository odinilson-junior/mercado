<?php //session_start();

	//$servidor = "localhost";
	//$usuario = "root";
	//$senha = "";
	//$db_name = "mercadinho_leandro";

	$servidor = "us-cdbr-east-06.cleardb.net";
	$usuario = "b70da6efaeb485";
	$senha = "b74961b2";
	$db_name = "heroku_e03f3c801b1bfc4";
	
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');
	
	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/";

	$url_admin = "http://".$host_ip."/admin";
	$url_aluno = "http://".$host_ip."/admin/aluno";
	$url_cliente = "http://".$host_ip."/admin/cliente";
	$url_vendedor = "http://".$host_ip."/admin/vendedor";
	$url_fornecedor = "http://".$host_ip."/admin/fornecedor";
	$url_fornecedor = "http://".$host_ip."/admin/item";
	$url_fornecedor = "http://".$host_ip."/admin/pedido";
	$url_fornecedor = "http://".$host_ip."/admin/produto";
	
	
?>