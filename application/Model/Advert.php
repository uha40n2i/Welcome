<?php

namespace Mini\Model;

use Mini\Core\Model;

class Advert extends Model
{
    public function getAdverts($page)
    {
        $sql = "SELECT * FROM annonces WHERE valid = 1 ORDER BY id DESC LIMIT " . 50 * ($page - 1) . ", 50";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function postAdvert($name, $description, $email, $copy, $image)
    {
        $req = $this->db->prepare('INSERT INTO annonces(name, description, email, image) VALUES(:name, :desc, :email, :image)');
        $req->execute(array(
            'name' => htmlspecialchars($name),
            'desc' => htmlspecialchars($description),
            'email' => $email,
            'image' => $image
        ));
    }
}