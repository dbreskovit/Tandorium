<?php
     session_start();
     include 'db_connect.php';

    $movie = $_POST['movie'];
    $user = $_SESSION['username'];

    $sql = "UPDATE filmes SET `curtidas` = `curtidas` + 1 WHERE cod = '$movie'";
    $result = mysqli_query($conn, $sql);
    header("Location: ../index.php");

    $movie = intval($movie);
    $sql = "INSERT INTO avaliacoes (usuario, cod_filme) VALUES ('$user', $movie)";
    $result = mysqli_query($conn, $sql);

?>