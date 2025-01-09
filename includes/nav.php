<div class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
        <!-- Liste des liens -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Acceuil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="discographie.php">Discographie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="photo.php">Photos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="videos.php">Vidéos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="actualite.php">Actualitée</a>
            </li>
        </ul>
        <!-- Formulaire de recherche -->
        <form class="form-inline" action="search.php" method="post">
            <input class="form-control mr-sm-2" type="text" name="search" placeholder="Rechercher" data-error="Merci tapper un mot." required="required">
            <button class="btn-search btn " type="submit">Rechercher</button>
        </form>
    </div>
</div>