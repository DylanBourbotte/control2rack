<?php

require('includes/config.php');

$mail = $_POST['email'];

if(!isset($_POST['email'])) {
    echo "Désolé mais une érreur c'est produite";
} else {
    $req = $bdd->prepare("INSERT INTO mailpdf (entermail) VALUES ('$mail')");
    $req->execute();
    header('Location: http://www.control2rack.fr/asset/doc/les_modules_formations.pdf');
}
?>