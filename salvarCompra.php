<?php


            include_once 'conection.php';
            
            /* identificação do usuário (não oficial)*/
              
      $nome  = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
      $senha = filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_STRING);
      $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
		  
      echo "$senha ";
	  	$result_usuario = "insert into Usuario(nome,email,senha) values('$nome', '$email','$senha')";
      $resultado_usuario = mysqli_query($con,$result_usuario);  
		
		  $estado = filter_input(INPUT_POST, 'Estado', FILTER_SANITIZE_STRING);
      $cidade = filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_STRING);
      $numero = filter_input(INPUT_POST, 'Numero', FILTER_SANITIZE_NUMBER_INT);

      $result_endereco = "insert into Endereco(cidade,estado,numero) values('$cidade','$estado','$numero')";
      $resultado_endereco = mysqli_query($con,$result_endereco);
    
			$cor = filter_input(INPUT_POST, 'Cor', FILTER_SANITIZE_STRING);
			$qtd = filter_input(INPUT_POST, 'Qtd', FILTER_SANITIZE_NUMBER_INT);
			$valor = filter_input(INPUT_POST, 'Preco', FILTER_SANITIZE_NUMBER_INT);

			$result_compra = "insert into Compra(cor, quantidade,preco) values('$cor','$qtd,'$valor')";
			$resultado_compra = mysqli_query($con, $result_compra);

			$select = "select * from Usuario";
			$result =  mysqli_query($con,$select);


     
      

/* */
?>
