<nav class="navbar navbar-expand-lg navbar-dark bg-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" alt="BilheteirAberta" height="30px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php $currentPage === "Home"?"active":""; ?>" aria-current="page" href="/">Pagina Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php $currentPage === "Catalogo"?"active":""; ?>" href="/catalogo.php">Catalogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php $currentPage === "Localizacao"?"active":""; ?>" href="/localizacao.php">Localização</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php $currentPage === "Sobre"?"active":""; ?>" href="/sobre.php">Sobre nós</a>
                </li>
            </ul>
        </div>
    </div>
</nav>