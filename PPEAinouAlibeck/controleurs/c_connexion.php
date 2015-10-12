<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$utilisateur = $pdo->getInfosUtilisateur($login,$mdp);
		if(!is_array( $utilisateur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			$id = $utilisateur['id'];
			$nom =  $utilisateur['nom'];
			$prenom = $utilisateur['prenom'];
                        $type_utilisateur = $utilisateur['type_utilisateur'];
			connecter($id,$nom,$prenom);
                        if ($type_utilisateur==0) {
			include("vues/v_sommaire.php");
                        }
                        else{
                        include("vues/v_sommaire1.php");
                        }
                         
		}
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>
