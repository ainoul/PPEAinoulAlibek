<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idUtilisateur = $_SESSION['idUtilisateur'];
switch($action){
    case 'selectionnerMois':
        {
		$lesMois=$pdo->getLesMoisDisponibles($idUtilisateur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		include("vues/v_listeMois.php");
		break;
	}
        
    case 'choisirVisiteur':
        {
        
        }
        
    case 'choisirFichesPaiement':
        {
        
        }
}

