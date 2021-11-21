<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>siteLol - Inserção de Dados do Usuário</title>
	</head>
	<body>
		<?php
		// Recebimento dos dados
			$nome        = $_POST["tNome"];	 
			$senha       = $_POST["tSenha"];	 
            $email       = $_POST["tMail"];	 	
			$sexo        = $_POST["tSexo"];	 		
			$nascimento  = $_POST["tNasc"];	 
			$logradouro  = $_POST["tRua"];	 
			$numero      = $_POST["tNum"];	 
			$estado      = $_POST["tEst"];	 
			$cidade      = $_POST["tCid"];	 
			$satisfacao  = $_POST["tUrg"];	 
			$mensagem	 = $_POST["tMsg"];	 

		// Validação dos dados
			if ($nome == "")
				die ("<b>Nome</b> do usuário deve ser informado!");
			
			if ($senha == "")
				die ("<b>Senha</b> do usuário deve ser informada!");
			
            if ($email == "")
				die ("<b>Email</b> do usuário deve ser informado!");
            
			if ($sexo == "")
				die ("<b>Sexo</b> do usuário deve ser informado!");
			
			if ($nascimento == "")
				die ("<b>Data de nascimento</b> do usuário deve ser informada!");
			
			if ($logradouro == "")
				die ("<b>Logradouro</b> do usuário deve ser informado!");
			
			if ($numero == "")
				die ("<b>Numero da casa</b> do usuário deve ser informado!");
			
			if ($estado == "")
				die ("<b>Estado</b> do usuário deve ser informado!");
			
			if ($cidade == "")
				die ("<b>Cidade</b> do usuário deve ser informada!");
			
			if ($satisfacao == "")
				die ("<b>Grau de satisfacao</b> do usuário deve ser informado!");
			
			
		// Exibição dos dados
			echo "O nome do usuário é: <b>$nome</b> <br>";
		  //echo "A senha do usuário é: <b>$senha</b> <br>";
            echo "O email do usuário é <b>$email</b> <br>";
			echo "O sexo do usuário é <b>$sexo</b> <br>";
			echo "A data de nascimento do usuário é <b>$nascimento</b> <br>";
			echo "O logradouro do usuário é <b>$logradouro</b> <br>";
			echo "O número da residência do usuário é <b>$numero</b> <br>";
			echo "O estado do usuário é <b>$estado</b> <br>";
			echo "A cidade do usuário é <b>$cidade</b> <br>";
			echo "O grau de satisfacao do usuário é <b>$satisfacao</b> <br>";
			echo "A mensagem do usuário é <b>$mensagem</b> <br>";
			
		// Conexão com o MYSQL
			$con = mysql_connect("localhost", "root", "");
		
		// Abertura do banco de dados
			mysql_select_db("siteLol", $con)or 
				die("Não foi possível abrir o banco de dados." . mysql_error($con));
				
		// Inserindo os valores 
			$comandoSQL = "INSERT INTO usuario
									(nome, senha, email, sexo, nascimento, logradouro, numero, estado, cidade, satisfacao, mensagem)
						   VALUES 
									('$nome', '$senha', '$email', '$sexo', '$nascimento', '$logradouro', '$numero', '$estado', '$cidade', '$satisfacao', '$mensagem')";
		
		// Enviando para o MYSQL executar
			mysql_query($comandoSQL, $con)or 
				die ("Erro na inserção do cliente: " . mysql_error($con) );
				
			echo "<br>Contato de <b>$nome</b> realizado com sucesso!";

			header("Location: ./fale-conosco.php?cadastrado=true");
			die();
		?>
	</body>
</html>