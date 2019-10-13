<!DOCTYPE html>
<html>
<head>
	<title>Facebook - Entrar & Registrar</title>
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="shortcut icon" href="assets/images/logo.ico" type="image/x-icon" />
</head>
<body>

	<div id="menu">
		<div id="login">
			<div id="form">
				<ul>
					<form method="POST">
						<li style="margin-left: 12px !important;">
							Email ou telefone
						</li>
						<li style="margin-left: 117px !important;">
							Senha
						</li>
						<br/>
						<input type="text" name="em">
						<input type="password" name="sn">
						<input type="submit" name="Entrar" placeholder="Entrar" value="Entrar" id="button">
						<p id="esq">
							Esqueceu a conta?
						</p>
					</form>
				</ul>
			</div>
		</div>
		<h1 id="titulo">
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