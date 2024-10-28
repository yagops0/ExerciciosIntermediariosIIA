<?php 
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $fone = $_POST["fone"];
    $avaliacao = $_POST["avaliacoes"];
    $cor = $_POST["cor"];
    $comments = $_POST["comments"];

    echo "Seu Nome: $nome <br>";
    echo "<br>";
    echo "Seu Email: $email <br>";
    echo "<br>";
    echo "Seu Fone: $fone <br>";
    echo "<br>";
    echo "Você achou o site: $avaliacao <br>";
    echo "<br>";
    echo "Seu Comentário: $comments<br>";
    echo "<br>";

    if(str_contains($comments, "Gostei") || str_contains($comments, "legal") || str_contains($comments, "bom") || str_contains($comments, "interessante") || str_contains($comments, "feliz")){
        echo "Ficamos felizes que você deixou observações positivas sobre nosso site!<br>";
    }

    if($cor == "EscolherCor"){
        echo "Você não gostou de nenhuma cor<br>";
    }
    else if($cor == "Preto"){
        //echo "A cor escolhida foi preto!";
        echo "<script>alert('O preto no geral representa tristeza, solidão, medo e isolamento. Caso você não esteja bem e precisando de ajuda, acesse o site e precisando de ajuda, acesse o site: https://cvv.org.br/');</script>";
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