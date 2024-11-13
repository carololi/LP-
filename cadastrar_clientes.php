<?php
    include "conexao.php";

    if(isset($_POST['nome'])){
        //entrada
        $nome = trim($_POST['nome']);
        $telefone = trim($_POST['telefone']);
        $email = trim($_POST['email']);

        //processamento - inserindo dados no banco de dados
        $sql = "insert into cliente(nome,telefone,email) values('$nome','$telefone','$email')";
        $cadastrar = mysqli_query($conexao,$sql);

        //saida feedback ao usuário
        if($cadastrar){
            echo "
                <script> 
                    alert('Cliente Cadastrado com Sucesso!');
                    window.location = 'listar_clientes.php';
                </script>
            ";
        }
        else{
            echo "
                <p> Banco de dados Temporariamente fora do ar. Tente novamente mais tarde. Entre em contato com o adminitrador do site para reportar o problema.  </p>

                <p> Clique <a href='clientes.php'> aqui </a> para retornar ao formulário de cadastro </p>
            ";
        }
    }
    else{//tratamento de erro e redirecionamento
        echo "
            <p> Esta é uma página de tratamento de dados </p>
            <p> Clique <a href='clientes.php'> aqui </a> para a acessar o formulário de cadastro </p>
        ";
    }

?>