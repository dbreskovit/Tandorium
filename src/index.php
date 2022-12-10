<?php
session_start();
include './php/db_connect.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
    <title>Tandorium</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder Begin-->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Page Preloder End-->
    <?php
    if (isset($_GET['login'])  == "true") {
        echo '
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Você realizou o login com sucesso!
            <script>window.setTimeout(function() {$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove();});}, 4000);</script>
            </div>';
    }
    ?>
    <!-- Header Section Begin -->
    <?php include './php/header.php'; ?>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="https://images8.alphacoders.com/428/428531.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>JOBS</h2>
                                <p>Filme relacionado a Informática</p>
                                <a href="#"><span>ASSISTIR</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="https://p4.wallpaperbetter.com/wallpaper/336/555/704/movie-the-imitation-game-benedict-cumberbatch-wallpaper-preview.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">

                                <h2>O Jogo da Imitação</h2>
                                <p>Filme relacionado a Informática</p>
                                <a href="#"><span>ASSISTIR</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="http://s2.glbimg.com/ULrXPPnj4EJ1h_yzTYHZwi6P1M8=/smart/e.glbimg.com/og/ed/f/original/2017/10/04/blade_runner.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>Blade Runner 2049</h2>
                                <p>Filme relacionado a Informática</p>
                                <a href="#"><span>ASSISTIR</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4 id="matematica">MATEMÁTICA</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">VER TODOS<span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            mysqli_set_charset($conn, "utf8");
                            $sql = "SELECT * FROM filmes WHERE categoria = 'matematica' ORDER BY `curtidas` DESC LIMIT 1000;";
                            $result = $conn->query($sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="col-lg-3 col-md-6 col-sm-6">';
                                echo '<div class="product__item">';
                                echo '<div class="product__item__pic set-bg" data-setbg="' . $row['path_poster'] . '">';

                                if (@$_SESSION['username']) {
                                    echo '<div class="comment">';
                                    echo '<form method="POST" action="./php/db_like.php">';
                                    echo '<button class="like-btn" name="movie" value="' . $row['cod'] . '"> ' . $row['curtidas'] . ' <i class="fa fa-heart like"></i></button>';
                                    echo "</form>";
                                    echo '</div>';
                                } else {
                                    echo '<div class="comment">';
                                    echo '<button class="like-btn" name="movie" value="' . $row['cod'] . '"> ' . $row['curtidas'] . ' <i class="fa fa-heart"></i></button>';
                                    echo '</div>';
                                }

                                echo '</div>';
                                echo '<div class="product__item__text">';
                                echo '<ul>';
                                echo '<li>' . $row['categoria'] . '</li>';
                                echo '</ul>';
                                echo '<h5><a target = "_blank" href="' . $row['path_teaser'] . '">' . $row['nome'] . '</a></h5>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }

                            ?>
                        </div>
                    </div>
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4 id="historia">HISTÓRIA</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">VER TODOS<span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            mysqli_set_charset($conn, "utf8");
                            $sql = "SELECT * FROM filmes WHERE categoria = 'historia' ORDER BY `curtidas` DESC LIMIT 1000;";
                            $result = $conn->query($sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="col-lg-3 col-md-6 col-sm-6">';
                                echo '<div class="product__item">';
                                echo '<div class="product__item__pic set-bg" data-setbg="' . $row['path_poster'] . '">';

                                if (@$_SESSION['username']) {
                                    echo '<div class="comment">';
                                    echo '<form method="POST" action="./php/db_like.php">';
                                    echo '<button class="like-btn" name="movie" value="' . $row['cod'] . '"> ' . $row['curtidas'] . ' <i class="fa fa-heart like"></i></button>';
                                    echo "</form>";
                                    echo '</div>';
                                } else {
                                    echo '<div class="comment">';
                                    echo '<button class="like-btn" name="movie" value="' . $row['cod'] . '"> ' . $row['curtidas'] . ' <i class="fa fa-heart"></i></button>';
                                    echo '</div>';
                                }


                                echo '</div>';
                                echo '<div class="product__item__text">';
                                echo '<ul>';
                                echo '<li>' . $row['categoria'] . '</li>';
                                echo '</ul>';
                                echo '<h5><a target = "_blank" href="' . $row['path_teaser'] . '">' . $row['nome'] . '</a></h5>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4 id="informatica">INFORMÁTICA</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">VER TODOS<span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            mysqli_set_charset($conn, "utf8");
                            $sql = "SELECT * FROM filmes WHERE categoria = 'informatica'ORDER BY `curtidas` DESC LIMIT 1000;";
                            $result = $conn->query($sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="col-lg-3 col-md-6 col-sm-6">';
                                echo '<div class="product__item">';
                                echo '<div class="product__item__pic set-bg" data-setbg="' . $row['path_poster'] . '">';

                                if (@$_SESSION['username']) {
                                    echo '<div class="comment">';
                                    echo '<form method="POST" action="./php/db_like.php">';
                                    echo '<button class="like-btn" name="movie" value="' . $row['cod'] . '"> ' . $row['curtidas'] . ' <i class="fa fa-heart like"></i></button>';
                                    echo "</form>";
                                    echo '</div>';
                                } else {
                                    echo '<div class="comment">';
                                    echo '<button class="like-btn" name="movie" value="' . $row['cod'] . '"> ' . $row['curtidas'] . ' <i class="fa fa-heart"></i></button>';
                                    echo '</div>';
                                }

                                echo '</div>';
                                echo '<div class="product__item__text">';
                                echo '<ul>';
                                echo '<li>' . $row['categoria'] . '</li>';
                                echo '</ul>';
                                echo '<h5><a target = "_blank" href="' . $row['path_teaser'] . '">' . $row['nome'] . '</a></h5>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Product Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Js Plugins End-->
</body>

</html>