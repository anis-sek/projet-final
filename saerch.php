<?php
include("./includes/head.php");
include("./includes/header.php");
include("./includes/nav.php");
?>

<?php

if (empty($_POST) || empty($_POST['search'])) {
    header('Location:index.php');
} else {
    extract($_POST);
}

?>
<div id="content" class="container">
    <br>
    <h3 style="color:white;">Resultat pour <em><strong><?php echo $search; ?></strong></em> :</h3><br>

    <?php
    function texte_resume_brut($texte, $nbreCar)
    {

        $texte                         = trim(strip_tags($texte)); // suppression des balises HTML
        if (is_numeric($nbreCar)) {
            $PointSuspension        = '...'; // points de suspension (ou '' si vous n'en voulez pas)
            // ---------------------
            // COUPE DU TEXTE pour le RÃ‰SUMÃ‰
            // ajout d'un espace de fin au cas oÃ¹ le texte n'en contiendrait pas...
            $texte                    .= ' ';
            $LongueurAvant            = mb_strlen($texte);
            if ($LongueurAvant > $nbreCar) {
                // pour ne pas couper un mot, on va Ã  l'espace suivant
                $texte                 = mb_substr($texte, 0, strpos($texte, ' ', $nbreCar));
                // On ajoute (ou pas) des points de suspension Ã  la fin si le texte brut est plus long que $nbreCar
                if (!empty($PointSuspension)) {
                    $texte            .= $PointSuspension;
                }
            }
            // ---------------------
        }
        // On renvoie le rÃ©sumÃ© du texte correctement formatÃ©.
        return $texte;
    };

    $bdd = new PDO('mysql:host=localhost;dbname=celinedion', 'root', '') or die(print_r($bdd->errorInfo()));
    $bdd->exec('SET NAMES utf8');


    $req = $bdd->query("SELECT * FROM article WHERE titre LIKE '%$search%' OR contenu LIKE '%$search%' ORDER BY id");
    if ($req->rowCount() > 0) {
        while ($data = $req->fetch(PDO::FETCH_OBJ)) {
            $id = $data->id;
            $texte = $data->contenu;
            $resume = texte_resume_brut($texte, 500);
            echo '<h2 style="color:white;">' . $data->titre . '</h2><br>';
            echo '<p>' . $resume . '</p>';
            switch ($id) {
                case 0:
                    echo '<br><p class="p"><a class="btn btn-primary" href="index.php">Lire plus</a></p><br>';
                    break;
                case 1:
                    echo '<br><p class="p"><a class="btn btn-primary" href="article-1.php">Lire plus</a></p><br>';
                    break;
            }
        }
    } else {
        echo '<h2 class="h2" style="color:white;">Aucun resultat</h2><br>';
    }

    ?>

    <p class="p"><a class="btn btn-primary" href="index.php">Accueil</a></p><br>

</div>

<?php
include("./includes/footer.php");
?>