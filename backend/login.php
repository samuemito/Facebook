<?php
session_start();
require '../bd.php';
if(isset($_POST['emaill']) && !empty($_POST['emaill'])
	&& isset($_POST['senhal']) && !empty($_POST['senhal'])) {
	$email = addslashes($_POST['emaill']);
	$senha = md5(addslashes($_POST['senhal']));
	$existe = "SELECT * FROM users WHERE Email = :email";
	$existe = $pdo->prepare($existe);
	$existe->bindValue(":email", $email);
	$existe->execute();
	if($existe->rowCount() > 0) {
		$dados = $existe->fetch();
		if($dados[4] == $senha) {
			$_SESSION['logado'] = true;
			header('Location: ../');
		} else {
			header('Location: ../');
		}
	} else {
		header('Location: ../');
	}
} else {
	header('Location: ../');
}
?>