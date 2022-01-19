<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='shortcut icon' href='imagem/logo.png'>
    <link rel='stylesheet' href='cs.css'>
    
    <title>Sucesso ao enviar o Formulário</title>
</head>
<body>

    <header class='tphp'><h1 >Formuário enviado com Sucesso!</h1></header>
    <section>
        <div class='php_comand'>
        <?php

        $servername = "localhost";
        $username = "root";
        $database = "formulario2";
        $password = "";

        $conexao = mysqli_connect($servername, $username, $password, $database);
    
        ?>
        <?php

        

        $nome = $_POST['nome'];
        $sexo = $_POST['sex'];
        $stcivil = $_POST['status'];
        $dnasc = $_POST['idade'];
        $email = $_POST['mail'];
        $tel = $_POST['tel'];
        $face = $_POST['fbook'];
        $insta = $_POST['insta'];
        $avaliar = $_POST['avaliar'];
        $comentar = $_POST['comentario'];

        echo "<p>Olá&nbsp;".$nome."&nbsp;seus dados do formulário foi para o nosso banco de dados</p>";

        $sql = "INSERT INTO `usuarios`(`DS_NOME`,`DS_SEX`,`DS_STATUS CIVIL`,`DT_NASC`,`DS_EMAIL`,`NR_TEL`,`DS_FACEBOOK`,`DS_INSTAGRAM`,`DS_AVALIAR`,`DS_COMENTARIO`) VALUES ('$nome','$sexo','$stcivil','$dnasc','$email','$tel','$face','$insta','$avaliar','$comentar')" ;

        $inserir = mysqli_query($conexao,$sql);


        ?>
        </div>
       
    </section>
    <script src='scpt.js'></script>

    
</body>
</html>