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
            <div class="row">
                <!-- Video 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div data-bs-toggle="modal" data-bs-target="#videoModal1" class="cursor-pointer">
                            <iframe class="w-100" style="height: 250px; pointer-events: none;"
                                src="https://www.youtube.com/embed/fpl4if07ics"
                                title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- Video 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div data-bs-toggle="modal" data-bs-target="#videoModal2" class="cursor-pointer">
                            <iframe class="w-100" style="height: 250px; pointer-events: none;"
                                src="https://www.youtube.com/embed/AzaTyxMduH4"
                                title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- Video 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div data-bs-toggle="modal" data-bs-target="#videoModal3" class="cursor-pointer">
                            <iframe class="w-100" style="height: 250px; pointer-events: none;"
                                src="https://www.youtube.com/embed/_LTsjwiTN7w"
                                title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modals for Videos -->
    <!-- Modal 1 -->
    <div class="modal fade" id="videoModal1" tabindex="-1" aria-labelledby="videoModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/fpl4if07ics?autoplay=1"
                            title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="videoModal2" tabindex="-1" aria-labelledby="videoModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/AzaTyxMduH4?autoplay=1"
                            title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="videoModal3" tabindex="-1" aria-labelledby="videoModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/_LTsjwiTN7w?autoplay=1"
                            title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include("./includes/footer.php"); ?>

    </footer>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>