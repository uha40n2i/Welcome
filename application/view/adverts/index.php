<link href="<?php echo URL; ?>css/advert.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <br>
        <div class="twelve columns">
            <h1>Annonces</h1>
        </div>
        <br><br><br><br>

        <a class="button button-primary" href="/">Revenir à l'accueil</a>
        <a class="button button-primary" href="/adverts/post">Poster une annonce</a>
        <br><br>
        <?php

        $adverts = $advert->getAdverts(1);
        foreach ($adverts as $a) {

            echo "
            <div class=\"annonce\">
            <h4>" . $a->name . "</h4>";
            if ($a->image != "") {
                echo "<img src=\"/uploads/" . $a->image . "\" alt=\"\"><br><br>";
            }
            echo "<p>" . $a->description . "</p>
            <a class=\"button button-primary\" href=\"mailto:" . $a->email . "\">Contacter</a>
            <a class=\"button button-primary\" href=\"/adverts/delete?id=" . $a->id ."\">Supprimer</a>
        </div><br>
            ";

        }

        ?>
    </div>


</div>

</body>
</html>