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
            <h3>CONTACT</h3>
            <div class="contact-container">
                <h2>Contactez Nous</h2>
                <form class="contact-form">
                    <div class="form-group flex-container">
                        <div class="form-field">
                            <label for="first-name">Nom</label>
                            <input type="text" id="first-name" name="first-name" placeholder="Nom" required>
                        </div>
                        <div class="form-field">
                            <label for="last-name">Prénom</label>
                            <input type="text" id="last-name" name="last-name" placeholder="Prénom" required>
                        </div>
                    </div>
                    <div class="form-group flex-container">
                        <div class="form-field">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="nom-prenom@mail.com" required>
                        </div>
                        <div class="form-field">
                            <label for="phone">Numero de téléphone</label>
                            <input type="tel" id="phone" name="phone" placeholder="123-456-7890" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Your message here..." required></textarea>
                    </div>
                    <button type="submit">Envoyer</button>
                    <p class="thank-you-message">Thanks! We will contact you soon.</p>
                </form>
            </div>
    </div>
    </section>

    <footer>
        <?php include("./includes/footer.php"); ?>
    </footer>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightcase/2.5.0/js/lightcase.min.js"
        integrity="sha512-i+A2/k3mB4TtIRp6fyk8Q+xzJqKusi0bvFgCIfDtdJT1tDEMqYvKo60q3bvp6LzGIeS6BahqN4AklwwxbdSaog=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha384-oWzW34uNcFgBtTDeJQ5FeipkPzP9U3eD7zdsBNOT4vIep7ZBjH0vsr6QDa4jSl1n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7f09a09524.js" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>

</html>