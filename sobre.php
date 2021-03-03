<?php $titulo = "Sobre Nos - Projeto Final IHC"; ?>
<?php $currentPage = "Sobre"; ?>

<?php include('head.php'); ?>
<header>
    <?php include('navegacao.php'); ?>
</header>
<div class="container" style="color: white">
    <div class="row" style="margin: 30px 0">
        <h3 class="text-center">Sobre nos</h3>
        <p class="text-center" style="width: 400px; margin: 20px auto">Conheça a nossa equipa</p>
    </div>

    <div class="container text-center" style="position:relative;">
        <div class="carousel slide" data-ride="carousel" role="listbox" id="testimonials-slider1-3-carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/gallery/f3.jpg" alt="" title="" media-simple="true">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                Actualmente, sou docente e investigador do Instituto Superior Dom Bosco, onde lecciono módulos da área de TICs.
                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            Ednilson Dava
                        </div>
                        <div class="user_desk mbr-light mbr-fonts-style display-7">
                            ESTUDANTE
                        </div>
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/gallery/f2.jpg" alt="" title="" media-simple="true">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                Sou gerente de Cyber Security na engenharia de veículos na Irlanda (Shannon), mas coordenando projetos e pessoas também na Inglaterra.
                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            Felipe Fernandes
                        </div>
                        <div class="user_desk mbr-light mbr-fonts-style display-7">
                            ESTUDANTE
                        </div>
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/gallery/f1.png" alt="" title="" media-simple="true">
                        </div>
                        <div class="user_text pb-3">
                            <p class="mbr-fonts-style display-7">
                                Sou licenciado em Gestão Empresarial pela Universidade Aberta. Trabalho em Informática , na função Pública, quase a 20 anos.
                            </p>
                        </div>
                        <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            Gualter Sousa
                        </div>
                        <div class="user_desk mbr-light mbr-fonts-style display-7">
                            ESTUDANTE
                        </div>
                    </div>
                </div></div>

            <div class="carousel-controls">
                <a class="carousel-control-prev" role="button" data-slide="prev" href="#testimonials-slider1-3-carousel">
                    <span aria-hidden="true" class="mbri-arrow-prev mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" role="button" data-slide="next" href="#testimonials-slider1-3-carousel">
                    <span aria-hidden="true" class="mbri-arrow-next mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    </div>
<?php include('rodape.php'); ?>