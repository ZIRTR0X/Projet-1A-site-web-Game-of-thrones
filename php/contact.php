<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GOT Actualité</title>
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<link rel="stylesheet" type="text/css" href="../css/general.css">
</head>

<body>
	<header>
		<div id="reseaux_sociaux">
			<a href="#"><img id="facebook" src="../réseaux_sociaux/facebook.png" alt="facebook.png"></a>
			<a href="#"><img id="twitter"src="../réseaux_sociaux/twitter.png" alt="twitter.png"></a>
			<a href="#"><img id="youtube"src="../réseaux_sociaux/youtube.png" alt="youtube.png"></a>
			<a href="#"><img id="instagram"src="../réseaux_sociaux/instagram.png" alt="instagram.png"></a>
		</div>
		<div class="content-wrapper">
			<img id="header_img" src="../page_accueil/img_page_accueil.jpg" alt="img_page_accueil.jpg">
		<div class="text-wrapper">
				<font face="Game_of_Thrones"><h1><a id="text_header" href="../index.html">GOT Actualite</a></h1></font>

		<nav id="menu" role="navigation">
		<ul>
		  <li><a href="../index.html">Accueil</a></li>
		  <li><a href="#">Biographie</a>
		  	<ul id="menu_bio">
		  		<li><a href="../html/stark.html">Stark</a></li>
				<li><a href="../html/lannister.html">Lannister</a></li>
				<li><a href="../html/barathéon.html">Barathéon</a></li>
				<li><a href="../html/greyjoy.html">Greyjoy</a></li>
				<li><a href="../html/tyrell.html">Tyrell</a></li>
				<li><a href="../html/targaryen.html">Targaryen</a></li>
				<li><a href="../html/martell.html">Martell</a></li>
				<li><a href="../html/tully.html">Tully</a></li>
				<li><a href="../html/arryn.html">Arryn</a></li>
		  	</ul>
		  </li>
		  <li>
		  	<a href="#">Résumé</a>
		  	<ul id="menu_resume">
		  		<li><a href="https://fr.wikipedia.org/wiki/Saison_1_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 1</a></li>
				<li><a href="https://fr.wikipedia.org/wiki/Saison_2_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 2</a></li>
				<li><a href="https://fr.wikipedia.org/wiki/Saison_3_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 3</a></li>
				<li><a href="https://fr.wikipedia.org/wiki/Saison_4_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 4</a></li>
				<li><a href="https://fr.wikipedia.org/wiki/Saison_5_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 5</a></li>
				<li><a href="https://fr.wikipedia.org/wiki/Saison_6_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 6</a></li>
				<li><a href="https://fr.wikipedia.org/wiki/Saison_7_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 7</a></li>
				<li><a href="https://fr.wikipedia.org/wiki/Saison_8_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 8</a></li>
		  	</ul>
		  </li>
		  <li><a href="#">Médias</a>
		  	<ul>
		  		<li><a href="../html/photo.html">Photo</a></li>
		  		<li><a href="../html/video.html">Vidéo</a></li>
		  	</ul>
		  </li>
		  <li><a href="../html/carte.html">Carte</a></li>
		  <li><a href="contact.php">Contact</a></li>
		</ul>
		</nav>
	</header>

	<main>
		<section>
			<article class="padding">
				<?php 
					$erreur='';
					$error="";
					$good1="";
					$good2="";
					$good3="";
					@$nom=$_POST["nom"];
					@$adresse_mail=$_POST["adresse_mail"];
					@$telephone=$_POST["telephone"];
					@$premiere_visite=$_POST["premiere_visite"];
					@$message=$_POST["message"];
					@$select=$_POST["select"];
					
					
					if (empty($_POST["nom"])) {
						$erreur=$erreur . ' nom,';
						$error="\n⚠ Erreur, le.s champ.s$erreur ne sont/n'est pas rempli. Veuillez le.s remplir.";
					}

					if (empty($_POST["adresse_mail"])) {
						$erreur=$erreur . ' adresse-mail,';
						$error="\n⚠ Erreur, le.s champ.s$erreur ne sont/n'est pas rempli. Veuillez le.s remplir.";
					}

					if (empty($_POST["premiere_visite"])) {
						$erreur=$erreur . ' première visite,';
						$error="\n⚠ Erreur, le.s champ.s$erreur ne sont/n'est pas rempli. Veuillez le.s remplir.";
					}

					if (empty($_POST["message"])) {
						$erreur=$erreur . ' message,';
						$error="\n⚠ Erreur, le.s champ.s$erreur ne sont/n'est pas rempli. Veuillez le.s remplir.";
					} 

				?>
				<h2 class="title">Contact</h2>
				<p id="form">Vous voulez nous contacter, remplissez le formule ci-dessous.</p>
				<form method="post" action="contact.php">
					Nom et prénom: <input type="text" name="nom" value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>" required/>
					<br/>
					Email: <input type="email" name="adresse_mail" value="<?php if (isset($_POST['adresse_mail'])){echo $_POST['adresse_mail'];} ?>" required/>
					<br/>
					Télephone: <input type="tel" name="telephone" value="<?php if (isset($_POST['telephone'])){echo $_POST['telephone'];} ?>"/>
					<br/>
					Vous nous contactez pour : <select name="select" value="<?php if (isset($_POST['select'])){echo $_POST['select'];} ?>">
						<option value="un bug">Bug</option>
						<option value="une amélioration">Amélioration</option>
						<option value="une autre demande">Autre demande</option>
					</select>
					<br/>
					Première visite ? <input type="radio" name="premiere_visite" value="oui" /> Oui
					<input type="radio" name="premiere_visite" value="non" /> Non
					<br/>
					<textarea name="message" rows="10" cols="30" required placeholder="Entrer votre message."><?php if (isset($_POST['message'])){echo $_POST['message'];} ?></textarea>
					<br/>
					<input type="submit" name="valider">
					<br/>
					<p class="title"> </p>
					<?php
						if (($erreur != NULL)&&(!empty($_POST["valider"]))) {
							echo nl2br($error);
						} 

						if ((filter_var($adresse_mail, FILTER_VALIDATE_EMAIL))&&(!empty($_POST["valider"]))) {
							echo nl2br("\nL'email est valide");
							$good1="1";
						}

						if ((!filter_var($adresse_mail, FILTER_VALIDATE_EMAIL))&&(!empty($_POST["valider"]))) {
							echo nl2br("\nL'email n'est pas valide");
						}
						if (empty($erreur)) {
							$good2="2";
						}
						$good3="$good1$good2";

						if ($good3 == 12) {
							echo nl2br("\n\nVotre message a bien été envoyé!\n\nRecapitulatif:\n\nNom et prénom: $nom\nEmail: $adresse_mail\nTelephone: $telephone\nVous nous contactez pour $select.\nPremière visite?: $premiere_visite\nMessage: $message");
						}
					?>
				</form>
			</article>
		</section>

		<aside>
				<div class="padding" id="rs2">
					<h3 class="title">Réseaux sociaux</h3>
					<div id="reseaux_sociaux_800px">
					<a href="#"><img id="facebook2" src="../réseaux_sociaux/facebook.png" alt="facebook.png"></a>
					<a href="#"><img id="twitter2"src="../réseaux_sociaux/twitter.png" alt="twitter.png"></a>
					<a href="#"><img id="youtube2"src="../réseaux_sociaux/youtube.png" alt="youtube.png"></a>
					<a href="#"><img id="instagram2"src="../réseaux_sociaux/instagram.png" alt="instagram.png"></a>
					</div>
				</div>
				<div class="padding">	
					<h3 class="title">Résumés des saisons</h3>
					<ul id="saison">
						<li><a href="https://fr.wikipedia.org/wiki/Saison_1_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 1</a></li>
						
						<li><a href="https://fr.wikipedia.org/wiki/Saison_2_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 2</a></li>
						
						<li><a href="https://fr.wikipedia.org/wiki/Saison_3_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 3</a></li>
					
						<li><a href="https://fr.wikipedia.org/wiki/Saison_4_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 4</a></li>
						
						<li><a href="https://fr.wikipedia.org/wiki/Saison_5_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 5</a></li>
						
						<li><a href="https://fr.wikipedia.org/wiki/Saison_6_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 6</a></li>
						
						<li><a href="https://fr.wikipedia.org/wiki/Saison_7_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 7</a></li>
						
						<li><a href="https://fr.wikipedia.org/wiki/Saison_8_de_Game_of_Thrones#Liste_des_%C3%A9pisodes">Saison 8</a></li>
					</ul>
				</div>

				<div class="padding">
					<h3 class="title">Biographie des familles et personnages</h3>
					<ul id="saison">
						<li><a href="../html/stark.html">Stark</a></li>
						
						<li><a href="../html/lannister.html">Lannister</a></li>
						
						<li><a href="../html/barathéon.html">Barathéon</a></li>
						
						<li><a href="../html/greyjoy.html">Greyjoy</a></li>
						
						<li><a href="../html/tyrell.html">Tyrell</a></li>
						
						<li><a href="../html/targaryen.html">Targaryen</a></li>
						
						<li><a href="../html/martell.html">Martell</a></li>
					
						<li><a href="../html/tully.html">Tully</a></li>
					
						<li><a href="../html/arryn.html">Arryn</a></li>
					</ul>
				</div>
			</aside>
	</main>


	<footer><p>THÊME Julien Groupe n°2</p></footer>

</body>
</html>