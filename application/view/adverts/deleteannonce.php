<?php

if (isset($_GET['id'])) {
    $advert->deleteAdvert($_GET['id']);
    header('Location: /adverts');
} else {
    header('Location: /adverts');
}
