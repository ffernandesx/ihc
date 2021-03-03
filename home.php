<?php $titulo = "BilheteirAberta - Projeto Final IHC";?>
<?php $currentPage = "Home";?>

<?php include('head.php');?>
<header>
    <?php include('navegacao.php');?>
    <div class="container reserva-header">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/starwars.jpg" class="d-block carousel-img img-starwars" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Star Wars: The Rise of Skywalker</h5>
                        <p>Com o retorno do Imperador Palpatine, todos voltam a temer seu poder e, com isso, a
                            Resistência toma a frente da batalha que ditará os rumos da galáxia. Treinando para ser
                            uma completa Jedi, Rey (Daisy Ridley) ainda se encontra em conflito com seu passado e
                            futuro, mas teme pelas respostas que pode conseguir a partir de sua complexa ligação com Kylo
                            Ren (Adam Driver), que também se encontra em conflito pela Força.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/jumanji.jpg" class="d-block carousel-img img-jumaji" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jumanji: The Next Level</h5>
                        <p>Tentado em revisitar o mundo de Jumanji, Spencer (Alex Wolff) decide consertar o jogo de
                            videogame que permite que os jogadores sejam transportados ao local. Logo o quarteto
                            formado por Smolder Bravestone (Dwayne Johnson), Moose Finbar (Kevin Hart), Shelly Oberon (Jack
                            Black) e Ruby Roundhouse (Karen Gillan) ressurge, agora comandado por outras pessoas: os
                            avôs de Spencer e Fridge (Danny DeVito e Danny Glover) assumem as personas de Bravestone
                            e Finbar, enquanto o próprio Fridge (Ser’Darius Blain) agora está sob a pele de Oberon.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/v8.jpg" class="d-block carousel-img img-v8" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Velozes e Furiosos 8</h5>
                        <p>Depois que Brian e Mia se aposentaram, e o resto da equipe foi exonerado, Dom e Letty
                            estão em lua de mel e levam uma vida pacata e completamente normal. Mas a adrenalina do
                            passado volta com tudo quando uma mulher misteriosa faz com que Dom retorne ao mundo do crime e da velocidade.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="reservar-panel">
            <div class="reservar-brand">
                Reserva seu filme favorito
            </div>

            <form>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Manter sessão iniciada sempre
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <a class="btn-link" href="#">Criar nova conta.</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sessão</button>
            </form>
        </div>
    </div>
</header>
<div class="container" id="catalogo_prev">
    <div class="col-12">
        <div class="col-9 catalogo-container">
            <div class="catalogo-wide">
                <div class="card">
                    <img src="assets/img/jumanji.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jumanji: The Next Level</h5>
                        <p class="card-text">Tentado em revisitar o mundo de Jumanji, Spencer (Alex Wolff) decide
                            consertar o jogo de
                            videogame que permite que os jogadores sejam transportados ao local...</p>
                        <a href="#" class="btn btn-danger">Reservar</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/jumanji.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jumanji: The Next Level</h5>
                        <p class="card-text">Tentado em revisitar o mundo de Jumanji, Spencer (Alex Wolff) decide
                            consertar o jogo de
                            videogame que permite que os jogadores sejam transportados ao local...</p>
                        <a href="#" class="btn btn-danger">Reservar</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/jumanji.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jumanji: The Next Level</h5>
                        <p class="card-text">Tentado em revisitar o mundo de Jumanji, Spencer (Alex Wolff) decide
                            consertar o jogo de
                            videogame que permite que os jogadores sejam transportados ao local...</p>
                        <a href="#" class="btn btn-danger">Reservar</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/jumanji.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jumanji: The Next Level</h5>
                        <p class="card-text">Tentado em revisitar o mundo de Jumanji, Spencer (Alex Wolff) decide
                            consertar o jogo de
                            videogame que permite que os jogadores sejam transportados ao local...</p>
                        <a href="#" class="btn btn-danger">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
        <aside class="col-3">
            <div id="newsletter" class="card" style="width: 17rem;">
                <div class="card-body">
                    <h5 class="card-title">Receber atualizações</h5>
                    <h6 class="card-text">Obtenha ingressos para assistir as novidades do mundo do cinema</h6>
                    <p class="card-text">Deixe seu melhor e-mail para receber todas novidades</p>
                    <form>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="inputEmail4"
                                       placeholder="meuemail@dominio.com">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </aside>
    </div>
</div>
<?php include('rodape.php');?>

