<?PHP
date_default_timezone_set('Europe/Paris');
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
		<title>Saisie2</title>
		<meta name="robots" content="all"/>
		<meta name="description" content="Modèle"/>
		<meta name="author" content="DL2017-2018"/>
<!--		<link href="styles.css" rel="stylesheet">
				<script type="text/javascript" src="scripts.js"></script>-->
		<style type="text/css">
		/* Mes feuilles de style  */
            .centre {
                text-align: center;
            }
            #form1 {
                border-collapse:collapse;
            }
            tr td {
                border: 1px solid black;
            }
            button {
                background-color: yellow;
            }
            
            select {
                padding-left: 5px;
                width: 150px;
            }
		</style>
		<script type="text/javascript">
		/* Mes scripts  */
		
		</script>
	</head>
	<body>
	<!-- Mes balises HTML -->
        <form action="retour2.php" id="formulaire" method="post" oninput="valeurnote.value = note.value; return false;">
            <table id="form1">
                <tr>
                    <td style="width:200px;">
                        <label for="prenom">Entrez votre prénom : </label>
                    </td>
                    <td>
                        <input type="text" id="prenom" name="prenom" placeholder="ex:  Jean-Luc"><br/>                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nom">Entrez votre nom : </label>
                    </td>
                    <td>
                        <input type="text" id="nom" name="nom" placeholder="ex:  Picard"><br/> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="psw">Entrez votre mot de passe : </label>                    
                    </td>
                    <td>
                        <input type="password" id="psw" name="psw"><br/>                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nomfich">Entrez le nom du fichier : </label>                    
                    </td>
                    <td>
                        <input type="file" id="nomfich" name="nomfich"><br/>                    
                    </td>
                </tr>
                <tr>
                    <td>Sexe : </td>
                    <td>
                        <input type="radio" id="homme" name="sexe" value="H" checked> Homme &nbsp;&nbsp;&nbsp; <input type="radio" id="femme" name="sexe" value="F">Femme
                    </td>
                </tr>
                <tr>
                    <td>Equipes de foot : </td>
                    <td>
                        <input type="checkbox" name="equipe1" value="Niort">Niort<br/>
                        <input type="checkbox" name="equipe2" value="Tours">Tours<br/>
                        <input type="checkbox" name="equipe3" value="Marseille">Marseille<br/>
                        <input type="checkbox" name="equipe4" value="Angers">Angers<br/>
                        <input type="checkbox" name="equipe5" value="LeMans">Le Mans
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="datenais">Date de naissance : </label>
                    </td>
                    <td>
                        <input type="date" id="datenais" name="datenais"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bio">Biographie : </label>
                    </td>
                    <td>
                        <textarea id="bio" name="bio" rows="4" cols="30" spellcheck="false" placeholder="ex:  Capitaine de l'Enterprise"></textarea>
                    </td>
                </tr>
                <tr>
                    <td  class="centre" colspan="2">
                        <button type="button" onclick="alert('Bonjour');"  >Bonjour</button>
                    </td>
                
                </tr>
                <tr>
                    <td  class="centre" colspan="2">
                        <select name="destinations" size="7">
                            <optgroup label="UFP">
                                <option value="TER">Terre</option>
                                <option value= "VUL" selected>Vulcain</option> <option value= "ALP">Alpha Centauri</option>
                                <option value= "AND">Andoria</option>
                                
                                
                           </optgroup>
                            <optgroup label="Empire klingon">
                                <option value="KRO">Kronos</option>
                                <option value="KHI">Khitomer</option>
                            </optgroup>
                            <optgroup label="Autres">
                                <option value="BAJ">Bajor</option>
                                <option value="FER">Ferenginar</option>
                            </optgroup>
                        </select>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="couleur">Choisissez la couleur : </label>
                    </td>
                    <td>
                        <input type="color"id="couleur" name="couleur">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="temperature">Choisissez la température : </label>
                    </td>
                    <td>
                        <input type="number"id="temperature" min=-273 max=5000 step=100 name="temperature">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="note">Choisissez la note : </label>
                    </td>
                    <td>
                        <input type="range"id="note" min=0 max=20 step=1 name="note">
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Valeur de la note : <output for="note" name="valeurnote" form="formulaire"></output>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type="hidden" id="date" name="date" value="<?PHP echo date('j/m/Y');?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Valider">
                    </td>
                    <td>
                        <input type="reset" value="Fais risette !">
                    </td>
                </tr>
            </table>
         </form>

	</body>
</html>