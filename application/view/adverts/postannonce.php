<?php

if (isset($_POST['emailInput']) && isset($_POST['titreInput']) && isset($_POST['descriptionInput'])) {
    $n = 0;
    $infosfichier = null;
    if (isset($_FILES['photoInput']) AND $_FILES['photoInput']['error'] == 0) {
        $n = rand(10000, 99999);
        if ($_FILES['photoInput']['size'] <= 5000000) {
            $infosfichier = pathinfo($_FILES['photoInput']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees)) {
                move_uploaded_file($_FILES['photoInput']['tmp_name'], realpath(dirname('')) . '/uploads/' . $n . "." . $infosfichier['extension']);
            }
        }
    }
    $advert->postAdvert($_POST['titreInput'], $_POST['descriptionInput'], $_POST['emailInput'], isset($_POST['copie']) ? $_POST['copie'] : 0, $infosfichier == null ? "" : $n . "." . $infosfichier['extension']);
}



?>

<link href="<?php echo URL; ?>css/advert.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <br>
        <div class="twelve columns">
            <h1>Poster une annonce</h1>
        </div>
        <br><br><br><br>

        <a class="button button-primary" href="/adverts/">Revenir aux annonces</a>

        <br><br>

        <div class="annonce">
            <form method="post" enctype="multipart/form-data">

                <label for="emailInput">Adresse mail</label>
                <input class="u-full-width" placeholder="Adresse mail" id="emailInput" name="emailInput" type="email">

                <label for="titreInput">Titre</label>
                <input class="u-full-width" placeholder="Titre" id="titreInput" name="titreInput" type="text">

                <label for="descriptionInput">Description</label>
                <textarea class="u-full-width" placeholder="Description..." id="descriptionInput" name="descriptionInput"></textarea>

                <label for="photoInput">Photo (Max. 5 Mo)</label>
                <input type="file" id="photoInput" name="photoInput" />

                <label>
                    <input type="checkbox" id="copie" name="copie">
                    <span class="label-body">Envoyer une copie par mail</span>
                </label>

                <input class="button-primary" value="Poster" type="submit">
            </form>
        </div>
    </div>


</div>

</body>
</html>