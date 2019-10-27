<?php
$dsn = "mysql:dbname=facebook;host=localhost";
$dbuser = "root";
$dbpass = "";
try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "Error: ".$e;
}
?>
<!--
	Para criar a tabela que é usada no video execute:


	
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(250) NOT NULL DEFAULT '0',
  `Sobrenome` varchar(250) NOT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Senha` varchar(32) DEFAULT NULL,
  `Sexo` int(2) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `DTCreate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;
-->