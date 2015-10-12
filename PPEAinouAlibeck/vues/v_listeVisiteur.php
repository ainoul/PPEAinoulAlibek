<div id="contenu">
      <h3>Visiteur a selectionner : </h3>
      <form action="index.php?uc=validerFrais&action=fraisVisiteur" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstVisiteurs" accesskey="n">Visiteurs : </label>
        <select id="lstVisiteurs" name="lstVisiteurs">
<?php
			foreach ($lesVisiteurs as $unVisiteur)
			{
                                $id = $unVisiteur['id'];
				$nom =  $unVisiteur['nom'];
				$prenom =  $unVisiteur['prenom'];
				
                            ?><option value="<?php echo $id ?>"><?php echo  $nom." ".$prenom ?> </option>
				<?php 
                        }			
			
           
?>

                                
      </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input type="hidden" value="<?php echo $mois?> " name="mois"/>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>