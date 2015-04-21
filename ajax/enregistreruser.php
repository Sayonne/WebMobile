<?php
$nom = $_REQUEST['nom'];
$prenom = $_REQUEST['prenom'];
$mail = $_REQUEST['mail'];
$type = $_REQUEST['type'];
$tel = $_REQUEST['tel'];
// enregistrerEnBase(...); pas dans cette itération
// générer le nom de user : à faire
// générer le mdp travail à faire

$login = $nom.".".$prenom rand(1, 100);
//	Générer un mot de passe aléatoire
// ---------------------------------------------------------------------
function genererMDP ($longueur = 4){
	// initialiser la variable $mdp
	$mdp = "";
 
	// Définir tout les caractères possibles dans le mot de passe, 
	// Il est possible de rajouter des voyelles ou bien des caractères spéciaux
	$possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";
 
	// obtenir le nombre de caractères dans la chaîne précédente
	// cette valeur sera utilisé plus tard
	$longueurMax = strlen($possible);
 
	if ($longueur > $longueurMax) {
		$longueur = $longueurMax;
	}
 
	// initialiser le compteur
	$i = 0;
 
	// ajouter un caractère aléatoire à $mdp jusqu'à ce que $longueur soit atteint
	while ($i < $longueur) {
		// prendre un caractère aléatoire
		$caractere = substr($possible, mt_rand(0, $longueurMax-1), 1);
 
		// vérifier si le caractère est déjà utilisé dans $mdp
		if (!strstr($mdp, $caractere)) {
			// Si non, ajouter le caractère à $mdp et augmenter le compteur
			$mdp .= $caractere;
			$i++;
		}
	}
 
	// retourner le résultat final
	return $mdp;
}
$mdp = genererMDP();

echo " login : ".$login."<br>Mot de passe : ".$mdp."<br>Merci de votre visite et à bientôt";
?>
