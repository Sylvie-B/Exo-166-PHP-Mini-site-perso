<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	}
	elseif(isset($_GET['page']) && $_GET['page'] == "bio") {

        include __DIR__.'/../pages/bio.php';
    }
	elseif(isset($_GET['page']) && $_GET['page'] == "contact") {

        include __DIR__.'/../pages/contact.php';
    }
}

function getPart($name) {
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData () {
    $infosJson = file_get_contents("http://sylvie.up-to.fr/Exo-166-PHP-Mini-site-perso/data/user.json");
    $infos = json_decode($infosJson, true);

    echo $infos['first_name']." ".$infos['name']."<br>".$infos['occupation']."<br>";
    foreach ($infos['experiences'] as $info){
        foreach ($info as $item => $value){
            echo $value."<br>";
        }
    }
}

