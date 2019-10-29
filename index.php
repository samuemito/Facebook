<?php
session_start();
require 'bd.php';
if(isset($_SESSION['logado'])):
$infos = "SELECT * FROM users WHERE Email = :email";
$infos = $pdo->prepare($infos);
$infos->bindValue(":email", $_SESSION['email']);
$infos->execute();
$dado = $infos->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
	<link
		rel="stylesheet"
		type="text/css"
		href="assets/css/logado.css"
	>
	<link
		rel="shortcut icon"
		href="assets/images/logo.ico"
		type="image/x-icon"
	/>
</head>
<body>
	<div
		id="menu"
	>
		<img
			src="assets/images/facebook.png"
			id="branco"
		/>
		<form
			style="float: left;width: 44%;"
		>
			<div
				id="borda"
			>
				<input
					placeholder="Pesquisar"
					type="text"
					name="pesquisar"
					id="pesquisar"
				/>
				<button
				id="botao">
					<i
						id="botaoi"
					>
					</i>
				</button>
			</div>
		</form>
		<div
			style="float: left;margin-left: 140px;"
			id="perfi"
		>
			<?php
				echo '<img src="users/'.$dado[1].$dado[2].'/avatar/'.$dado[8].'" />';
				echo '<p title='.$dado[1].'>'.$dado[1].'</p>';
			?>
		</div>
		<div id='barra1'></div>
		<div
			style="
				color: white;
				position: relative;
				width: 100px;
				text-align: center;
				left: 708px;
				cursor: pointer;
				top: -18px;
				border-radius: 3px;
				height: 28px;
				line-height: 14px;
			"
			id="pag"
		>
			<p>Página Inicial</p>
		</div>
	</div>
	<div>
		<div
			id="options"
		>
			<div
				id="perfil"
			>
				<img
					<?php echo 'src="users/'.$dado[1].$dado[2].'/avatar/'.$dado[8].'"'; ?>
					id="perfilimage"
				/>
				<p>
					<?php
						echo $dado[1]." ".$dado[2];
					?>
				</p>
			</div>
			<br/>
			<div
				id="perfil"
			>
				<i 
					id="feed"
					style="background-position: -63px -1649px;" 
				>
				</i>
				<p>
					Feed de Notícias
				</p>
			</div>
			<div
				id="perfil"
			>
				<i 
					id="feed"
					style="background-position: -74px -1065px;" 
				>
				</i>
				<p>
					Messenger
				</p>
			</div>
			<div
				id="perfil"
			>
				<i 
					id="feed"
					style="background-position: -63px -1754px;"
				>
				</i>
				<p>
					Watch
				</p>
			</div>
			<p
				id="exp"
			>
				Explorar
			</p>
			<div
				id="perfil"
			>
				<i 
					id="feed"
					style="background-position: -74px -1107px;"
				>
				</i>
				<p>
					Páginas
				</p>
			</div>

			<div
				id="perfil"
			>
				<i 
					id="feed"
					style="background-position: -74px -1002px;"
				>
				</i>
				<p>
					Grupos
				</p>
			</div>
			<div
				id="perfil"
			>
				<i 
					id="feed"
					style="background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/4xhBZzFIOU7.png)"
				>
				</i>
				<p>
					Eventos
				</p>
			</div>
			<div
				id="perfil"
			>
				<i 
					id="feed"
					style="background-position: -75px -1575px;"
				>
				</i>
				<p>
					Campanhas de arrecadação de fundos
				</p>
			</div>
			<div
				id="perfil"
			>
				<i 
					id="feed"
					style="background-position: -42px -1670px;"
				>
				</i>
				<p>
					Lembranças
				</p>
			</div>
		</div>
	</div>
</body>
</html>
<?php
return;
endif;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Facebook - entre ou cadastre-se</title>
	<link
		rel="stylesheet"
		type="text/css"
		href="assets/css/index.css">
	<link
		rel="shortcut icon"
		href="assets/images/logo.ico"
		type="image/x-icon"
	/>
</head>
<body>

	<div
		id="menu"
	>
		<div
			id="login"
		>
			<div
				id="form"
			>
				<ul>
					<form
						method="POST"
						action="backend/login.php"
					>
						<li
							style="margin-left: 12px !important;"
						>
							Email ou telefone
						</li>
						<li
							style="margin-left: 117px !important;"
						>
							Senha
						</li>
						<br/>
						<input
							type="text"
							name="emaill"
						>
						<input
							type="password"
							name="senhal"
						>
						<input
							type="submit"
							name="Entrar"
							placeholder="Entrar"
							value="Entrar"
							id="button"
						>
						<p
							id="esq"
						>
							Esqueceu a conta?
						</p>
					</form>
				</ul>
			</div>
		</div>
		<h1
			id="titulo"
		>
			Facebook
		</h1>
		<div
			id="container"
		>
			<div
				id="rede"
			>
				<p
					id="texto"
				>
					O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.
				</p>
				<img
					src="assets/images/rede.png"
					id="redeimg"
				/>
			</div>
			<div
				id="register"
			>
				<h1>
					Abra uma conta
				</h1>
				<p>
					É rápido e fácil.
				</p>
				<div
					id="campos"
				>
					<form
						id="registrarse"
						method="POST"
						action="backend/registrar.php"
					>
						<div
							id="forms"
						>
							<input
								type="text"
								name="nm"
								placeholder="Nome"
								id="n"
							/>
							<br/>
							<input
								type="text"
								name="sb"
								placeholder="Sobrenome"
								id="sb"
							/>
							<input
								type="text"
								name="em"
								placeholder="Celular ou email"
								id="em"
							/>
							<input
								type="text"
								name="emn"
								placeholder="Digite novamente"
								id="em"
							/>
							<input
								type="password"
								name="sn"
								placeholder="Senha"
								id="em"
							/>
						</div>
						<div
							id="data"
						>
							<p
								id="date"
							>
								Data de nascimento
							</p>
							<span
								id="spandata"
							>
								<select
									id="dia"
									title="Dia"
									name="dia"
								>
									<option>
										Dia
									</option>
									<?php
										$dia = 1;
										while($dia <= 31) {
											echo "
											<option>
												".$dia."
											</option>
											";
											++$dia;
										}
									?>
								</select>
								<select
									id="mes"
									title="Mês"
									name="mes"
								>
									<option>
										Mês
									</option>
									<?php
										$meses = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
										$mes = 0;
										while($mes <= 11) {
											echo "
												<option>
													".$meses[$mes]."
												</option>
											";
											++$mes;
										}
									?>
								</select>
								<select
									id="ano"
									title="Ano"
									name="ano"
								>
									<option>
										Ano
									</option>
									<?php
										$ano = 2019;
										while($ano >= 1900) {
											echo "
												<option>
													".$ano."
												</option>
											";
											--$ano;
										}
									?>
								</select>
							</span>
						</div>
						<div
							id="sexo"
						>
							<p
								id="date"
							>
								Gênero
							</p>
							<span
								id="spangen"
							>
								<input
									type="radio"
									name="sexo"
									value="0"
									title="Feminino"
									id="fem"
								>
								<label
									for="fem"
								>
									Feminino
								</label>
							</span>
							<span
								id="mascu"
							>
								<input
									type="radio"
									name="sexo"
									value="1"
									title="Masculino"
									id="asfasdsafas"
								>
								<label
									for="asfasdsafas"
								>
									Masculino
								</label>
							</span>
							<span
								id="outro"
							>
								<input
									type="radio"
									name="sexo"
									value="2"
									title="Outros"
									id="asfa"
								>
								<label
									for="asfa"
								>
									Outros
								</label>
							</span>
						</div>
						<div
							id="enviar"
						>
							<span>
								<input
									type="submit"
									name="cadastrar"
									value="Cadastrar-se"
								>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>