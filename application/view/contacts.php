
<link href="<?php echo URL; ?>css/contacts.css" rel="stylesheet">

<div class="container">

    <div class="alerts-contacts"></div>

    <br/>

    <center>

        <button class="button-primary" id="host-button">Afficher les Hébergements</button>

        <br/>
        <br/>

        <input class="u-full-width" type="text" placeholder="Votre emplacement (rue + ville)" id="location-input">
        <input class="u-half-width" type="text" placeholder="Rayon de recherche" id="radius-input">

        <hr>

    </center>

        <br/>

        <div class="results-contacts">

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
<script src="<?php echo URL; ?>js/contacts.js"></script>