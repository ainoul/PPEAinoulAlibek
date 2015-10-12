<?php
include("vues/v_sommaire1.php");
$action = $_REQUEST['action'];
$idUtilisateur = $_SESSION['idUtilisateur'];
switch($action){
    case 'listeMoisComptable':
        {
		$lesMois=$pdo->lesMois();
		include("vues/v_listeMoisComptable.php");
		break;
	}
        
    case 'choisirVisiteur':
        {

         $mois= $_REQUEST['lstMois']; 
         $lesVisiteurs = $pdo -> lesVisiteurs($mois);
         include("vues/v_listeVisiteur.php");          
         break ;
         
         
        }
        
    case 'fraisVisiteur':
        {
        $mois= $_REQUEST['mois'];
        $idUtilisateur = $_REQUEST['lstVisiteurs'];
        $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idUtilisateur,$mois);
	$lesFraisForfait= $pdo->getLesFraisForfait($idUtilisateur,$mois);
        include("vues/v_fraisVisiteur");
        }
        
    case 'validerMajFraisForfait':
        {
        
        }
        
    case 'supprimerFrais':
        {
        
        }
        
    case 'validerCreationFrais':
        {
        
        }
}

