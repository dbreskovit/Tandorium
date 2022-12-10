<?php
    if (isset($_FILES['capa'])) {
        include 'db_connect.php';
        $extensao = strtolower(substr($_FILES['capa']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = 'img/uploads/';
        $a = move_uploaded_file($_FILES['capa']['tmp_name'], "../".$diretorio . $novo_nome);
        $capa = $diretorio . $novo_nome;

        if ($a) {
            $sql = "INSERT INTO filmes (nome, path_poster, path_teaser, categoria) VALUES ('$_POST[nome]', '$capa', '$_POST[link]', '$_POST[categoria]')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Filme cadastrado com sucesso!');</script>";
                header('Location: ../'); 
               
            } else {
                echo "<script>alert('Erro ao cadastrar Filme!');</script>";
            }
        } else {
            echo "<script>alert('Erro ao cadastrar Filme!');</script>";
        }
    }
?>