<?php

/**
 * 1. Importez la table user dans une base de données que vous aurez créée au préalable via PhpMyAdmin
 * 2. En utilisant l'objet de connexion qui a déjà été défini =>
 *    --> Remplacez les informations de connexion ( nom de la base et vérifiez les paramètres d'accès ).
 *    --> Supprimez le dernier utilisateur de la liste, faites une capture d'écran dans PhpMyAdmin pour me montrer que vous avez supprimé l'entrée et pushez la avec votre code.
 *    --> Faites un truncate de la base de données, les auto incréments présents seront remis à 0
 *    --> Insérez un nouvel utilisateur dans la table ( faites un screenshot et ajoutez le au repo )
 *    --> Finalement, vous décidez de supprimer complètement la table
 *    --> Et pour finir, comme vous n'avez plus de table dans la base de données, vous décidez de supprimer aussi la base de données.
 */

require "./Classes/DB.php";

$db = DB::getInstance();

//$sql = "DELETE FROM user WHERE id = 4";
//    if ($db->exec($sql) === true) {
//        echo "Donnée bien supprimé";
//}
//
//$sql2 = "TRUNCATE TABLE user";
//if ($db->exec($sql2) !== false) {
//    echo "Contenu de la table supprimée";
//}
//
//$sql3 = "INSERT INTO user(nom, prenom, rue, numero, code_postal, ville, pays, mail)
//        VALUES ('Chirac', 'Berndaette', 'de la bourgeoisie','1143', '00000', 'Paris', 'France', 'bernadette.chichi@mail.com')";
//if($db->exec($sql3) !== false) {
//    echo "Utilisateur enregistré merci !";
//}
//
//$sql4 = "DROP TABLE user";
//if($db->exec($sql4) !== false) {
//    echo "La table a bien été supprimée (oups)";
//}

$sql5 = "DROP DATABASE exo_193";
if($db->exec($sql5) !== false) {
    echo "Oh non la base de donnée a été supprimée !";
}