<?php 
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $fone = $_POST["fone"];
    $avaliacao = $_POST["avaliacoes"];
    $cor = $_POST["cor"];

    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Fone: $fone <br>";
    echo "Você achou o site: $avaliacao <br>";
    if($cor == "EscolherCor"){
        echo "Você não gostou de nenhuma cor<br>";
    }
    else if($cor == "Preto"){
        echo "<script>
            alert('O preto no geral representa tristeza, solidão, medo e isolamento. Caso você não esteja
bem e precisando de ajuda, acesse o site : ');
        </script>";
    }
    else{
        echo "A cor que mais gostou é: $cor<br>";
    }

    echo "<br>";

    if(ISSET($_POST["novidades"])){
        echo "Enviaremos para você semanalmente todas as novidades!<br>";
    }
    else{
        echo "Não serão enviadas as novidades para você.";
    }
?>