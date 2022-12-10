<!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="#">Início</a></li>
                                <li><a href="#">Categorias <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="#matematica">Matemática</a></li>
                                        <li><a href="#historia">História</a></li>
                                        <li><a href="#informatica">Informática</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contato</a></li>
                                <li><a href="#">Sobre</a></li>
                                <?php
                                if (@$_SESSION['username'])
                                    echo '<li><a href="#" data-toggle="modal" data-target="#modal_cadastro">Cadastrar filme</a></li>';
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <?php
                    if (@$_SESSION['username']) {
                        echo '<div class="col-lg-2">
                                <div class="header__right">
                                <div class="header__right__auth">
                                    <a href="logout.php"><i class="fa fa-close"></i></a>
                                </div>
                                </div>
                              </div>';
                    } 
                    else{
                        echo '<div class="col-lg-2">
                                <div class="header__right">
                                <div class="header__right__auth">
                                    <a href="login.php"><i class="fa fa-user"></i></a>
                                </div>
                                </div>
                              </div>';
                    }
                ?>
            </div>
        </div>

        <?php
        if (@$_SESSION['username']) {
            echo '
                <div class="modal fade" id="modal_cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered " role="document">
                    <div class="modal-content color-dark">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Cadastrar Filme</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form enctype="multipart/form-data" method="POST" action="./php/db_register.php" >
                        <div class="input__item">
                            <input name="nome" type="text" placeholder="Nome do Filme" autocomplete="off">
                        </div>
                        <br>
                        <div class="input__item">
                            <input name="link" type="text" placeholder="Link do Filme" autocomplete="off">
                        </div>
                        <br>
                        <select class="select-darkmode" name="categoria">
                            <option value="" selected disabled hidden>Categoria</option>
                            <option value="matematica">Matemática</option>
                            <option value="historia">História</option>
                            <option value="informatica">Informática</option>
                        </select>
                        <br><br><br>
                            <label for="upload-photo">Selecione a imagem de capa...</label>
                            <input type="file" name="capa" id="upload-photo"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
            ';
        }
            ?>

    </header>
    <!-- Header End -->