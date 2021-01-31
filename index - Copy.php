 <?php
$user ="root";
$pass ="";
$dbh= new PDO('mysql:host=localhost;dbname=voyage', $user, $pass);

$req= $dbh -> query("SELECT * FROM  menu");

?>
<!DOCTYPE html>
<html>
<head>
	<title> BIENVENUE SUR TRAVEL AGENCY</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>

<div class="title"><h2>Travel Agency<span style="color: #EB9F22">.</span></h1></div>

<nav>
	<ul>
		<?php while($x = $req -> fetch()){ ?>

			<li><a href="<?= $x['lien']; ?>"> <?=$x['nom']; ?> </a></li>


		<?php } ?>

	</ul>
</nav>

<img src="img/eiffel.jpg" style="width: 100%; margin-top: 30px;">

<div class="title2">
	<h2 class="title3">&nbsp;&nbsp;&nbsp;&nbsp;ORGANISER VOTRE<br> <span class="title4">VOYAGE SUR MESURE</span></h2>
</div>

<a href="#"><button class="bouton1">Par ici</button></a>

<div class="imag_png"><img src="img/steps-icon-1.png" style="margin-right: 300px;">
	<img src="img/steps-icon-1.png">
		<img src="img/steps-icon-3.png" style="width: 125px; margin-left: 300px; "></div>

<div class="text1"><h4>PLANIFIER</h4> </div>
<div class="text2"><h4>ORGANISER</h4></div>
<div class="text3"><h4>VOYAGER</h4></div>

<div class="text4"><h4>confiez-nous vos reve d'evation : en<br> famille ou autre amis ,nous trouverons la<br> formule qui combler vos attentes.</h4></div>
<div class="text5"><h5>Beneficiez de l'expertise de nos specialites<br> de chaque destination, il vous accompagnent<br> dans la realisation de votre voyage.</h5></div>
	<div class="text6"><h5>Nous nous chargeons d'assurer votre <br> securite et de veiller a votre pleine serenite<br>tout au long de votre voyage.</h5></div>

<div class="div1">

	<div class="div2">
		<img src="img/diapo1.jpg" style="width:  500px; height: 300px; border-radius: 15px;">

	</div>

	<div class="div3">
		<img src="img/voyage-etranger-956.jpg" style="width: 500px; height: 300px; border-radius: 15px;">

		</div>

</div>

	<div class="div2a">
		<h2 class="text7" style="font-family:  'PT sans', sans-serif;"><br> PARTEZ EN<br>&nbsp;FAMILLE</h2>
		<hr width="200px" noshade=" noshade" size="2">
		<h5 class="text8">Offrez le meilleur a ceux que<br>vous aimez et partager des<br> moments fabuleux !</h5>
		<button class="bouton2">Plus d'infos</button>

	</div>
	<div class="div3a">
		<h2 class="text7" style="font-family: ' PT sans', sans-serif;"><br>PARTEZ EN<br>&nbsp;FAMILLE</h2>
		<hr width=" 200px;" noshade="noshade" size="2">
		<h5 class="text9">Parfois un peu d'evasion serait<br> le bienvenue et ferait le plus<br> grand bien !</h5>
		<button class="bouton2">Plus d'infos</button>
	</div>

	<div class="contact">
		<h1 class="text10">
			CONTACTEZ-NOUS
		</h1>
		<hr class="bar" width="500px">
		<h4 class="text11">Chez Travel Agency nous savons que voyager est une aventure humaine mais egalement un engagement financier
			important pour vous.<br> c'est pourquoi nous mettons un piont d'honneur a prendre en compte chacune de vos attentes pour vous aidez dans la preparation<br> de votre sejour, circuit ou voyager sur mesure.</h4>
		</div>

		<div class="formulaire">
			<forum>

				<span class="text12">Nom</span><input class="input1" type="text" name="nom" placeholder="votre nom" required="veuillez remplir ce champs">
				<span class="text12">Prenom</span><input class="input1" type="text" name="nom" placeholder="votre nom" required="veuillez remplir ce champs">
				<input type="submit" name="send" value="ok">

			</forum>
		</div>

		<div class="footer">
			<h1 class="title5"><br><br>Travel Agency<span style="color: #EB9F22">.</span></h1>
			<h5 class="copyright">copyright &#169; 2020. Tous droits reserves</h5>
		</div>

		<img src=""
	</body>
	</html>











	





</body>
</html