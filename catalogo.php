<?php $titulo = "Catalogo - Projeto Final IHC"; ?>
<?php $currentPage = "Catalogo"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo($titulo);?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="moviehunter/css/style.css" type="text/css" media="all"/>
    <script type="text/javascript" src="moviehunter/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="moviehunter/js/jquery-func.js"></script>
    <!--[if IE 6]>
    <link rel="stylesheet" href="moviehunter/css/ie6.css" type="text/css" media="all"/><![endif]-->
</head>
<body>
<!-- START PAGE SOURCE -->
<?php include('navegacao.php');?>
<div id="shell" style="position: relative; top: 100px;">
    <div id="header">
        <div id="sub-navigation">
            <ul>
                <li><a href="#">TODOS</a></li>
                <li><a href="#">ÚLTIMOS LANÇAMENTOS</a></li>
                <li><a href="#">TOP</a></li>
                <li><a href="#">MAIS COMENTADOS</a></li>
            </ul>
            <div id="search">
                <form action="#" method="get" accept-charset="utf-8">
                    <label for="search-field"></label>
                    <input type="text" name="search field" value="Enter search here" id="search-field"
                           class="blink search-field"/>
                    <button type="submit" value="" class="search-button">PROCURAR</button>
                </form>
            </div>
        </div>
    </div>
    <div id="main">
        <div id="content">
            <div class="box">
                <div class="head">
                    <h2>ÚLTIMOS LANÇAMENTOS</h2>
                    <p class="text-right"><a href="#">Mostrar todos</a></p>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">X-MAN</span></span> <a href="#"><img
                                    src="moviehunter/css/images/movie1.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">SPIDER MAN 2</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie2.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">SPIDER MAN 3</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie3.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">VALKYRIE</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie4.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">GLADIATOR</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie5.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie last">
                    <div class="movie-image"><span class="play"><span class="name">ICE AGE</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie6.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="cl">&nbsp;</div>
            </div>
            <div class="box">
                <div class="head">
                    <h2>TOP</h2>
                    <p class="text-right"><a href="#">Mostrar todos</a></p>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">TRANSFORMERS</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie7.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">MAGNETO</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie8.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">KUNG FU PANDA</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie9.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">EAGLE EYE</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie10.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">NARNIA</span></span> <a href="#"><img
                                    src="moviehunter/css/images/movie11.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie last">
                    <div class="movie-image"><span class="play"><span class="name">ANGELS &amp; DEMONS</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie12.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="cl">&nbsp;</div>
            </div>
            <div class="box">
                <div class="head">
                    <h2>MAIS COMENTADOS</h2>
                    <p class="text-right"><a href="#">Mostrar todos</a></p>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">HOUSE</span></span> <a href="#"><img
                                    src="moviehunter/css/images/movie13.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">VACANCY</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie14.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">MIRRORS</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie15.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">THE KINGDOM</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie16.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie">
                    <div class="movie-image"><span class="play"><span class="name">MOTIVES</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie17.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="movie last">
                    <div class="movie-image"><span class="play"><span class="name">THE PRESTIGE</span></span> <a
                                href="#"><img src="moviehunter/css/images/movie18.jpg" alt=""/></a></div>
                    <div class="rating">
                        <p>Classificação</p>
                        <div class="stars">
                            <div class="stars-in"></div>
                        </div>
                        <span class="comments">12</span></div>
                </div>
                <div class="cl">&nbsp;</div>
            </div>
        </div>
        <div id="news">
            <div class="head">
                <h3>NOVOS</h3>
                <p class="text-right"><a href="#">Mostrar todos</a></p>
            </div>
            <div class="content">
                <p class="date">12.04.09</p>
                <h4>Disney's A Christmas Carol</h4>
                <p>&quot;Disney's A Christmas Carol,&quot; a multi-sensory thrill ride re-envisioned by Academy Award&reg;-winning
                    filmmaker Robert Zemeckis, captures... </p>
                <a href="#">Veja mais</a></div>
            <div class="content">
                <p class="date">11.04.09</p>
                <h4>Where the Wild Things Are</h4>
                <p>Innovative director Spike Jonze collaborates with celebrated author Maurice Sendak to bring one of
                    the most beloved books of all time to the big screen in &quot;Where the Wild Things
                    Are,&quot;...</p>
                <a href="#">Veja mais</a></div>
            <div class="content">
                <p class="date">10.04.09</p>
                <h4>The Box</h4>
                <p>Norma and Arthur Lewis are a suburban couple with a young child who receive an anonymous gift bearing
                    fatal and irrevocable consequences.</p>
                <a href="#">Veja mais</a></div>
        </div>
        <div id="coming">
            <div class="head">
                <h3>ESTREIA<strong>!</strong></h3>
                <p class="text-right"><a href="#">Mostrar todos</a></p>
            </div>
            <div class="content">
                <h4>The Princess and the Frog </h4>
                <a href="#"><img src="moviehunter/css/images/coming-soon1.jpg" alt=""/></a>
                <p>Walt Disney Animation Studios presents the musical &quot;The Princess and the Frog,&quot; an animated
                    comedy set in the great city of New Orleans...</p>
                <a href="#">Veja mais</a></div>
            <div class="cl">&nbsp;</div>
            <div class="content">
                <h4>The Princess and the Frog </h4>
                <a href="#"><img src="moviehunter/css/images/coming-soon2.jpg" alt=""/></a>
                <p>Walt Disney Animation Studios presents the musical &quot;The Princess and the Frog,&quot; an animated
                    comedy set in the great city of New Orleans...</p>
                <a href="#">Veja mais</a></div>
        </div>
        <div class="cl">&nbsp;</div>
    </div>
</div>
<?php include('rodape.php'); ?>
<!-- END PAGE SOURCE -->
</body>
</html>