<?php
  $reportage = file_get_contents('db/reportage.link');
  $cours = file_get_contents('db/courses.link');
  $cours_video = file_get_contents('db/video_courses.link');
  $vannerie = file_get_contents('db/vannerie.link');
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf8">
    <title>CPE 2018</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <div class="buttons">
      <div>Bonjour <?=$_SESSION['user'][1]?></div>
      <button onClick="logout()">Se déconnecter</button>
    </div>
    <div class="connected-content">
      <div class="gradient-box">
        <h2>Les cours</h2>
	<a href="<?=$cours?>">Les documents</a>
	<a href="<?=$cours_video?>">Les vidéos</a>
      </div>
      <div class="gradient-box">
        <h2>Liste de diffusion entre élèves</h2>
        <ul>
          <li><a href="mailto:cpe18@framalistes.org">cpe18@framalistes.org</a></li>
          <li><a href="https://framalistes.org/sympa/arc/cpe18">Voir les archives</a></li>
        </ul>
      </div>
      <div class="gradient-box">
        <h2>Livres et flores</h2>
        <a href="https://mega.nz/folder/Wn5jxA7I#MclwaWYrvPAtfljH6crkbQ">Cliquez ici</a>
      </div>
      <div class="gradient-box">
        <h2>Vidéos</h2>
        <ul>
          <li><a href="<?=$reportage?>">Cueilleurs par nature (Stage 2020 en Suisse)</a></li>
          <li><a href="<?=$vannerie?>">Tutoriel vannerie spiralée (Stage 2023 chez Bérangère)</a></li>
	</ul>
      </div>
    </div>
  </body>
</html>
 
