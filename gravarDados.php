<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>siteLol - Inserção de Dados do Usuário</title>
	</head>
	<body>
		<?php
		// Recebimento dos dados
			$nome        = $_GET["tNome"];	 
			$senha       = $_GET["tSenha"];	 
            $email       = $_GET["tMail"];	 	
			$sexo        = $_GET["tSexo"];	 		
			$nascimento  = $_GET["tNasc"];	 
			$logradouro  = $_GET["tRua"];	 
			$numero      = $_GET["tNum"];	 
			$estado      = $_GET["tEst"];	 
			$cidade      = $_GET["tCid"];	 
			$satisfacao  = $_GET["tUrg"];	 
			$mensagem	 = $_GET["tMsg"];	 

		// Validação dos dados
			if ($nome == "")
				die ("<b>Nome</b> do cliente deve ser informado!");
			
			if ($senha == "")
				die ("<b>Senha</b> do cliente deve ser informada!");
			
            if ($email == "")
				die ("<b>Email</b> do cliente deve ser informado!");
            
			if ($sexo == "")
				die ("<b>Sexo</b> do cliente deve ser informado!");
			
			if ($nascimento == "")
				die ("<b>Data de nascimento</b> do cliente deve ser informada!");
			
			if ($logradouro == "")
				die ("<b>Logradouro</b> do cliente deve ser informado!");
			
			if ($numero == "")
				die ("<b>Numero da casa</b> do cliente deve ser informado!");
			
			if ($estado == "")
				die ("<b>Estado</b> do cliente deve ser informado!");
			
			if ($cidade == "")
				die ("<b>Cidade</b> do cliente deve ser informada!");
			
			if ($satisfacao == "")
				die ("<b>Grau de satisfacao</b> do cliente deve ser informado!");
			
			
		// Exibição dos dados
			echo "O nome do cliente é: <b>$nome</b> <br>";
		  //echo "A senha do cliente é: <b>$senha</b> <br>";
            echo "O email do cliente é <b>$email</b> <br>";
			echo "O sexo do cliente é <b>$sexo</b> <br>";
			echo "A data de nascimento do cliente é <b>$nascimento</b> <br>";
			echo "O logradouro do cliente é <b>$logradouro</b> <br>";
			echo "O número da residência do cliente é <b>$numero</b> <br>";
			echo "O estado do cliente é <b>$estado</b> <br>";
			echo "A cidade do cliente é <b>$cidade</b> <br>";
			echo "O grau de satisfacao do cliente é <b>$satisfacao</b> <br>";
			echo "A mensagem do cliente é <b>$mensagem</b> <br>";
			
		// Conexão com o MYSQL
			$con = mysql_connect("localhost", "root", "");
		
		// Abertura do banco de dados
			mysql_select_db("siteLol", $con)or 
				die("Não foi possível abrir o banco de dados." . mysql_error($con));
				
		// Inserindo os valores 
			$comandoSQL = "INSERT INTO clientes
									(nome, senha, email, sexo, nascimento, logradouro, numero, estado, cidade, satisfacao, mensagem)
						   VALUES 
									('$nome', '$senha', '$email', '$sexo', '$nascimento', '$logradouro', '$numero', '$estado', '$cidade', '$satisfacao', '$mensagem')";
		
		// Enviando para o MYSQL executar
			mysql_query($comandoSQL, $con)or 
				die ("Erro na inserção do cliente: " . mysql_error($con) );
				
			echo "<br>Contato<b>$nome</b> realizado com sucesso!";
		?>
	</body>
</html>