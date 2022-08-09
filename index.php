<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include "includes/head.php" ; ?>

<body>
    <section>
        <?php include "includes/header.php" ; ?>
    </section>
    <section>
    <?php 
    // Inclusion des documents
    // SaisonD
    if (isset($_GET['lundi'])) {
        include "includes/saisond/lundi.php" ;
    } elseif(isset($_GET['mardi'])) {
        include "includes/saisond/mardi.php" ;
    } elseif(isset($_GET['mercredi'])) {
        include "includes/saisond/mercredi.php" ;
    } elseif(isset($_GET['jeudi'])) {
        include "includes/saisond/jeudi.php" ;
    } elseif(isset($_GET['vendredi'])) {
        include "includes/saisond/vendredi.php" ;
    } elseif(isset($_GET['samedi'])) {
        include "includes/saisond/samedi.php" ;
    } elseif(isset($_GET['dimanche'])) {
        include "includes/saisond/dimanche.php" ;
// Hiver
    } elseif (isset($_GET['hiverlundi'])) {
        include "includes/hiver/hiverlundi.php" ;
    } elseif(isset($_GET['hivermardi'])) {
        include "includes/hiver/hivermardi.php" ;
    } elseif(isset($_GET['hivermercredi'])) {
        include "includes/hiver/hivermercredi.php" ;
    } elseif(isset($_GET['hiverjeudi'])) {
        include "includes/hiver/hiverjeudi.php" ;
    } elseif(isset($_GET['hivervendredi'])) {
        include "includes/hiver/hivervendredi.php" ;
    } elseif(isset($_GET['hiversamedi'])) {
        include "includes/hiver/hiversamedi.php" ;
    } elseif(isset($_GET['hiverdimanche'])) {
        include "includes/hiver/hiverdimanche.php" ;
        // Printemps
    } elseif (isset($_GET['printempslundi'])) {
        include "includes/printemps/printempslundi.php" ;
    } elseif(isset($_GET['printempsmardi'])) {
        include "includes/printemps/printempsmardi.php" ;
    } elseif(isset($_GET['printempsmercredi'])) {
        include "includes/printemps/printempsmercredi.php" ;
    } elseif(isset($_GET['printempsjeudi'])) {
        include "includes/printemps/printempsjeudi.php" ;
    } elseif(isset($_GET['printempsvendredi'])) {
        include "includes/printemps/printempsvendredi.php" ;
    } elseif(isset($_GET['printempssamedi'])) {
        include "includes/printemps/printempssamedi.php" ;
    } elseif(isset($_GET['printempsdimanche'])) {
        include "includes/printemps/printempsdimanche.php" ;
    // Automne
    } elseif (isset($_GET['automnelundi'])) {
        include "includes/automne/automnelundi.php" ;
    } elseif(isset($_GET['automnemardi'])) {
        include "includes/automne/automnemardi.php" ;
    } elseif(isset($_GET['automnemercredi'])) {
        include "includes/automne/automnemercredi.php" ;
    } elseif(isset($_GET['automnejeudi'])) {
        include "includes/automne/automnejeudi.php" ;
    } elseif(isset($_GET['automnevendredi'])) {
        include "includes/automne/automnevendredi.php" ;
    } elseif(isset($_GET['automnesamedi'])) {
        include "includes/automne/automnesamedi.php" ;
    } elseif(isset($_GET['automnedimanche'])) {
        include "includes/automne/automnedimanche.php" ;
        // Été
    } elseif (isset($_GET['étélundi'])) {
        include "includes/été/étélundi.php" ; 
    } elseif(isset($_GET['étémardi'])) {
        include "includes/été/étémardi.php" ;
    } elseif(isset($_GET['étémercredi'])) {
        include "includes/été/étémercredi.php" ;
    } elseif(isset($_GET['étéjeudi'])) {
        include "includes/été/étéjeudi.php" ;
    } elseif(isset($_GET['étévendredi'])) {
        include "includes/été/étévendredi.php" ;
    } elseif(isset($_GET['étésamedi'])) {
        include "includes/été/étésamedi.php" ;
    } elseif(isset($_GET['étédimanche'])) {
        include "includes/été/étédimanche.php" ;
    } else include "includes/none.php" ;

        ?>
    <div class="image"> <img src="./images/reactopia.PNG" height="920px" alt=""></div>
    </section>

</body>
<footer>
    <!-- Footer -->
    <?php include "includes/footer.php" ; ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>