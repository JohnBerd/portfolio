<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$error = 0;
	$name = $_POST['name'];
	$mail = $_POST['e-mail'];
	$message = $_POST['message'];
	if (!isset($name))
		$error++;
	if (strlen($name) < 3)
		$error++;
	if (!isset($message))
		$error++;
	if (strlen($message) < 3)
		$error++;
	if (!isset($mail))
		$error++;
	if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
		$error++;
	if ($error == 0)
	{
		$da = 'lecunffxavier@gmail.com';
		$subject = 'New message from your e-portfolio';
		$content = '<!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8"><title>E-Portfolio message</title></head><body>';
		$content .= '<p><strong>From:</strong> '.$name.'</p>';
		$content .= '<p><strong>E-mail:</strong> '.$mail.'</p>';
		$content .= '<p><strong>Message :</strong> '.$message.'</p></body></html>';
		$headers = 'MIME-Version: 1.0'."\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
		mail($da, $subject, $content, $headers);
	}
}
?>
<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta name="viewport" content="width=device-width">
		<meta charset="utf-8">

		<meta name="title" content="Xavier Le Cunff | E-Portfolio">
		<meta name="description" content="Qui je suis, qu'est-ce que je fais dans la vie... Présentation d'un passionné d'informatique sur son petit bonhomme de chemin">
		<meta name="keywords" content="developpeur, programmeur, android, c, c++, java, html, css, javascript, react, arduino, cv, 2020">
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="French">
		<meta name="author" content="XAVIER LE CUNFF">

		<title>Xavier Le Cunff</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	</head>
	<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
	echo '<div id="sent">Votre message a bien été envoyé</div>';
?>
		<div id="popup-bg">
			<div id="popup">
				<div id="close">
					<i class="fa fa-times-circle"></i>
				</div>
				<div id="arrow-left">
					<i class="fa fa-chevron-circle-left"></i>
				</div>
				<div id="arrow-right">
					<i class="fa fa-chevron-circle-right"></i>
				</div>
				<ul id="project-presentation-ul">
					<li id="euler" class="project-presentation onfocus">
						<img class="img-popup" src="images/euler.gif" alt="euler.gif">
						<p class="popup-text">La problématique du cavalier d'Euler est de faire se déplacer le cavalier sur toute les cases de l'échiquier sans que ce dernier repasse par la même case</p>
					</li>
					<li id="mario" class="project-presentation">
						<img class="img-popup" src="images/sokoban-img.png" alt="euler.gif">
						<p class="popup-text">Le but de Mario Sokoban est de pousser toute les caisses sur les points verts</p>
					</li>
				</ul>
			</div>
		</div>
		<div id="body">
			<header id="0">
				<div id="img-header">
					<div class="triangle-first"></div>
					<div id="title">XAVIER LE CUNFF</div>
					<div class="triangle-top-menu"></div>
				</div>
			</header>
			<div id="menu">
				<ul id="ul-button-menu"><li id="button-menu"><i class="fa fa-bars"></i></li></ul>	
				<menu>
					<div class="nom">
						<li><a href="#0">Xavier Le Cunff</a></li>
					</div>
					<li><a href="#1" class="ancre">Présentation</a></li>
					<li><a href="#2" class="ancre">Parcours</a></li>
					<li><a href="#3" class="ancre">Compétences</a></li>
					<li><a href="#4" class="ancre">Hobbies</a></li>
					<li><a href="#5" class="ancre">Contact</a></li>
				</menu>
				<div id="menu-portable">
					<li><a href="#1" class="ancre">Présentation</a></li>
					<li><a href="#2" class="ancre">Parcours</a></li>
					<li><a href="#3" class="ancre">Compétences</a></li>
					<li><a href="#4" class="ancre">Hobbies</a></li>
					<li><a href="#5" class="ancre">Contact</a></li>
				</div>
				<div class="triangle-bottom-menu"></div>
			</div>
			<div class="body">
				<div class="background">
					<div class="background2">
						<div class="blockpair" id="first-block">
							<div class="div-ico">
								<i class="fa fa-user-o" aria-hidden="true"></i>
							</div>
							<h2 id="1">Ma présentation</h2>
							<hr>
							<p>
							Grand passionné d'informatique, je me suis réorienté après un DUT Gestion des Entreprises et des Administrations vers un domaine qui me tenait vraiment à coeur: l'informatique.
							<br>
							Je considère que nous sommes à une époque où les technologies se développent à une vitesse exponentielle, c'est pourquoi je me renseigne sur les toutes nouvelles technologies comme l'intelligence artificielle, le deep learning et la blockchain, tout en apprenant les langages de base de programmation comme le C/C++/C# et le Java (langage permettant la programmation d'applications mobiles).</p>
						</div>
						<div class="triangle-top"></div>
						<div class="blockimpair">
							<div class="div-ico">
								<i class="fa fa-blind" aria-hidden="true"></i>
							</div>
							<h2 id="2">Mon parcours</h2>
							<hr>
							<p>
							Titulaire d'un Bac Scientifique, je me suis orienté vers des études de commerce dans le but d'obtenir mon indépendance financière. Mes différentes expériences, notamment mon travail les week-ends sur les marchés avec mon propre stand et mon stage de validation de diplôme de GEA, m'ont confirmés que ce n'était pas fait pour moi. Pendant ce temps, je me suis découvert une véritable passion pour l'informatique, consultant durant mon temps libre de plus en plus de tutoriaux, d'abord concernant la création de sites internet, puis la programmation et même l'électronique et le hacking. J'ai ensuite passé le concours d'entrée à l'école 42, qui consiste à passer un mois non stop au sein de l'établissement, afin d'apprendre le langage de programmation C. Ceci a pour but de nous enseigner les bases de programmation à la dure (tout devait être fait dans un terminal UNIX, y comprit l'écriture du code). Je me suis ensuite inscrit à l'IUT de Villetaneuse, en année spéciale d'informatique, une formation intensive qui permet d'obtenir son DUT informatique en 1 an au lieu de 2. Pour ma "3ème" année d'étude, j'ai décidé de choisir Epitech, bien parce que c'est le papa de 42 dans sa pédagogie, et que cette expérience de piscine à été la plus belle de ma vie. J'ai été admis en 3ème année spéciale, qui combine les 3 premières années d'Epitech en une. Je fais aujourd'hui ma 4ème année en Hongrie, où je découvre les bases de l'intelligence artificielle.<br>Je vous invite à télécharger mon CV au format PDF ci-dessous.
							</p>
							<div class="download-cv"><a href="cv.pdf" target="_blank"><div><i class="fa fa-download"></i></div></a></p>
						</div>
						<div class="triangle-bottom"></div>
						<div class="blockpair">
							<div class="div-ico">
								<i class="fa fa-line-chart" aria-hidden="true"></i>
							</div>
							<h2 id="3">Mes compétences</h2>
							<hr>
							<div class="div-center" id="div-tab">
								<table>
									<tr><th class="td-title" colspan="2"><h3>En programmation:</h3></th></tr>
									<tr>
										<th class="ico-content"><img class="prog-ico" src="images/c.png" alt="C"></th>
										<td>Bien que plus très utilisé dans les entreprises, hormis pour l'embarqué et pour concevoir des logiciels ultra rapides, c'est le language qui me tient le plus à coeur, étant le premier que j'ai appris. Je le maîtrise quasi parfaitement.
											<br>Un developpeur ne peut pas légitimement connaître le fonctionnement d'un ordinateur sans avoir programmé en C, et sans savoir ce qu'est un "seg fault". Rien n'y est laissé au hasard. C'est en apprenant le C que j'ai appris la rigueur et la patience (j'ai eu quelques fois envie de casser ma machine). Tout un cheminement digne des plus grands moines de Shaolin!
										</td>
									</tr>
									<tr>
										<th class="ico-content"><img class="prog-ico" src="images/java.png" alt="java"></th>
										<td>La programmation orientée objet (POO), quelle meilleure introduction que le Java pour s'y mettre?
											<br>C'est tout un autre monde! On quitte le domaine de l'algorythmie pure pour se concentrer sur la programmation d'un projet et sa sctructure. On y apprend de nouveaux concepts très nombreux et tellement utiles.
											<br>Une fois bien maîtrisé, j'ai pu savourer mes cours de "design pattern" (les différrents types de structures que l'on peu adopter pour un projet ou l'une de ses parties)
										</td>
									</tr>
									<tr><td class="td-title" colspan="2"><h3>En développement web:</h3></td></tr>
									<tr>
										<th class="ico-content"><img class="prog-ico" src="images/html.jpg" alt="C"></th>
										<td>Alors là, on attaque un gros morceau! Avant même de commencer mes études en informatique, je me suis interessé à Wordpress et au HTML/CSS. j'avais compris que j'avais besoin du Javascript pour faire de jolis menus déroulants et du PHP pour interagir avec le serveur, et puis du SQL pour interragir avec une base de donnée! Piou, en fait le web ça n'en finit jamais...
											<br>J'obtiens mon stage de fin de DUT pour m'occuper d'une appli web, ça tombe bien j'ai quelques bases! On me parle d'Angular, de React, de Node, de MongoDB, d'une API! Quoi? C'est quoi tout ça? M'a t-on leurré depuis le début de mes études?
											<br>En fait non. Le monde du developpement évolue de manière exponentielle ces dernières années. Et heureusement, j'ai pu à peu près me mettre à niveau sur toute ces technologies.
										</td>
									</tr>
									<tr>
										<th class="ico-content"><img class="prog-ico" src="images/php.png" alt="C"></th>
										<td colspan="2">Permet la simplification de site web, l'interraction avec l'utilisateur et la création d'un espace membre</td>
									</tr>
									<tr>
										<th class="ico-content"><img class="prog-ico" src="images/js.png" alt="C"></th>
										<td>Permet de dynamiser un site web par des animations et menus déroulants par exemple</td>
									</tr>
									<tr><th class="td-title" colspan="2"><h3>Quelques projets achevés:</h3></th></tr>

								</table>
								<table>
									<tr id="tr-image">
										<td colspan="1" class="projet">
											<span class="project-title">Le cavalier d'Euler</span>
											<div class="project-div">
												<img class="project-img" id="img-euler" src="images/euler-img.png" alt="euler">
											</div>
										</td>
										<td colspan="1" class="projet"><span class="project-title">Mario Sokoban</span><div class="project-div"><img class="project-img" id="img-mario" src="images/sokoban-img.png" alt="sokoban"></div></td>
									</tr>
								</table>
							</div>
							<div class="triangle-top"></div>
							<div class="blockimpair">
								<div class="div-ico">
									<i class="fa fa-heartbeat" aria-hidden="true"></i>
								</div>
								<h2 id="4">Mes hobbies</h2>
								<hr>
								<p>
								Grand passionné de sports de combats, j'ai pratiqué le grappling, une sorte de lutte où le but est de soumettre son adversaire par des clés ou étranglements (dit comme ça on ne dirait pas mais c'est plutôt sympa), de la boxe thaï, kick-boxing et full contact. Je m'intéresse énormément à la sécurité informatique dans mon temps libre, je n'ai certes pas encore le niveau requis pour mettre moi-même des failles de sécurité en évidence mais j'étudie celles qui l'ont déjà été. J'apprends en ce moment les montages Arduino, c'est une carte électronique permettant de s'initier à la domotique.
								</p>
							</div>
							<div class="parallax-image">
								<div class="triangle-bottom-hobbies"></div>

								<div class="triangle-bottom-last"></div>
							</div>
							<div class="lastblock">
								<div class="div-ico">
									<i class="fa fa-envelope-open-o" aria-hidden="true"></i>
								</div>
								<h2 id="5">Me contacter</h2>
								<hr>
								<div class="div-center" id="div-tab">
									<table>
										<form id="contact-form" action="index.php" method="POST" onsubmit="return sbmt()">
											<tr>
												<td>
													<input id="form-name" type="text" placeholder="Votre nom" name="name"></input>
													<div id="form-name-error" class="form-error">Veuillez saisir votre nom</div>
												</td>
											</tr>
											<tr>
												<td>
													<input id="form-e-mail" type="text" placeholder="Votre e-mail" name="e-mail"></input>
													<div id="form-e-mail-error" class="form-error">Veuillez saisir une adresse e-mail valide</div>
												</td>
											</tr>
											<tr>
												<td>
													<textarea id="form-message" placeholder="Votre message" rows="7" cols="40" name="message"></textarea>
													<div id="form-message-error" class="form-error">Veuillez saisir un message</div>
												</td>
											</tr>
											<tr>
												<td>
													<input id="submit" type="submit" value="envoyer"></input>
												</td>
											</tr>
										</form>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer>
				<ul>
					<li><a href="https://plus.google.com/111518889744316262606" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="https://www.linkedin.com/in/xavier-le-cunff-587522157/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://twitter.com/Xavierlecunff" target="_blank"><i class="fa fa-twitter"></i></a></li>
				</ul>
				<p>Xavier Le Cunff - 2020</p>
			</footer>
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/js.js"></script>
			<script type="text/javascript" src="js/parallax.js"></script>
			<script src="http://vjs.zencdn.net/6.6.3/video.js"></script>
		</div>
	</body>
</html>
