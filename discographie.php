<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./includes/head.php"); ?>
</head>

<body>
    <div class="general">
        <header>
            <?php include("./includes/header.php"); ?>
        </header>
        <nav>
            <?php include("./includes/nav.php"); ?>
        </nav>
        <section class="container my-5">
            <h3>DISCOGRAPHIE</h3>
            <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row justify-content-center">
                                <!-- Card 1 -->
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="./img/discographie/discoCeline1.jpg" class="img-fluid" alt="Album">
                                        <div class="card-body">
                                            <h5 class="card-title">I AM: CELINE DION <br>2024</h5>
                                            <a href="https://open.spotify.com/intl-fr/artist/4S9EykWXhStSc15wEx8QFK"
                                                class="btn btn-primary">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 2 -->
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="./img/discographie/discoCeline2.jpg" class="card-img-top" alt="Album">
                                        <div class="card-body">
                                            <h5 class="card-title">Courage<br>2019</h5>
                                            <a href="https://open.spotify.com/intl-fr/album/0mqNgHFh1NYaxmlMS5IeGc"
                                                class="btn btn-primary">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <!-- Card 3 -->
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="./img/discographie/discoCeline3.jpg" class="card-img-top" alt="Album">
                                        <div class="card-body">
                                            <h5 class="card-title">Miracle<br>2004</h5>
                                            <a href="https://open.spotify.com/intl-fr/album/26wXXszmho7np4Ug6Aw4Ml"
                                                class="btn btn-primary">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 4 -->
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="./img/discographie/discoCeline4.jpg" class="card-img-top" alt="Album">
                                        <div class="card-body">
                                            <h5 class="card-title">D'eux<br>1995</h5>
                                            <a href="https://open.spotify.com/intl-fr/album/0DdTKXdgMLcSqccdyj6D9p"
                                                class="btn btn-primary">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>

        <footer>
            <?php include("./includes/footer.php"); ?>
        </footer>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightcase/2.5.0/js/lightcase.min.js"
        integrity="sha512-i+A2/k3mB4TtIRp6fyk8Q+xzJqKusi0bvFgCIfDtdJT1tDEMqYvKo60q3bvp6LzGIeS6BahqN4AklwwxbdSaog=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha384-oWzW34uNcFgBtTDeJQ5FeipkPzP9U3eD7zdsBNOT4vIep7ZBjH0vsr6QDa4jSl1n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7f09a09524.js" crossorigin="anonymous"></script>

</body>

</html>