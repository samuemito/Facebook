<?php
session_start();
if(isset($_SESSION['logado'])) {
	unset($_SESSION['logado']);
	header('Location: ../');
} else {
	header('Location: ../');
}
?>