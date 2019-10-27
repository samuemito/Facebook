<?php
session_start();
require('../bd.php');
if(isset($_POST['nm']) && !empty($_POST['nm'])
	&& isset($_POST['sb']) && !empty($_POST['sb']) 
	&& isset($_POST['em']) && !empty($_POST['em']) 
	&& isset($_POST['emn']) && !empty($_POST['emn']) 
	&& isset($_POST['sn']) && !empty($_POST['sn']) 
	&& isset($_POST['dia']) && !empty($_POST['dia']) 
	&& isset($_POST['mes']) && !empty($_POST['mes'])
	&& isset($_POST['ano']) && !empty($_POST['ano']) 
	&& isset($_POST['sexo']) && $_POST['mes'] != 'Mês'
	&& $_POST['dia'] != 'Dia' && $_POST['ano'] != 'Ano') {

	$nome = addslashes($_POST['nm']);
	$sobren = addslashes($_POST['sb']);
	$senha = md5(addslashes($_POST['sn']));
	$email = addslashes($_POST['em']);
	$emailnov = addslashes($_POST['emn']);
	$dia = addslashes($_POST['dia']);
	$mes = addslashes($_POST['mes']);
	$ano = addslashes($_POST['ano']);
	$sexo = addslashes($_POST['sexo']);
	switch ($mes) {
		case 'Jan':
			$mest = 1;
			break;
		case 'Fev':
			$mest = 2;
			break;
		case 'Mar':
			$mest = 3;
			break;
		case 'Abr':
			$mest = 4;
			break;
		case 'Mai':
			$mest = 5;
			break;
		case 'Jun':
			$mest = 6;
			break;
		case 'Jul':
			$mest = 7;
			break;
		case 'Ago':
			$mest = 8;
			break;
		case 'Set':
			$mest = 9;
			break;
		case 'Out':
			$mest = 10;
			break;
		case 'Nov':
			$mest = 11;
			break;
		case 'Dez':
			$mest = 12;
			break;
		default:
			break;
	}
	if($email != $emailnov) {
		header('Location: ../');
	} else {
		$slenght = strlen($senha);
		if($slenght < 6) {
			header('Location: ../');
		} else {
			$veri = "SELECT * FROM users WHERE Email = :email";
			$veri = $pdo->prepare($veri);
			$veri->bindValue(":email", $email);
			$veri->execute();
			if($veri->rowCount() == 0) {
				$dt = $ano."-".$mest."-".$dia;
				$data = date('Y-m-d');
				// 2019-10-16
				$createuser = "INSERT INTO users (Nome, Sobrenome, Email, Senha, Sexo, Data, DTCreate) VALUES (:nome, :sb, :email, :senha, :sexo, :data, :DTCreate)";
				$createuser = $pdo->prepare($createuser);
				$createuser->bindValue(":nome", $nome);
				$createuser->bindValue(":sb", $sobren);
				$createuser->bindValue(":email", $email);
				$createuser->bindValue(":senha", $senha);
				$createuser->bindValue(":sexo", $sexo);
				$createuser->bindValue(":data", $dt);
				$createuser->bindValue(":DTCreate", $data);
				$createuser->execute();
				$_SESSION['logado'] = true;
				header('Location: ../');
			} else {
				header('Location: ../');
			}
		}
	}
}



?>