<?php
  $reportage = file_get_contents('db/reportage.link');
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
        <ul>
          <li><a href="https://sites.google.com/site/plateformeechangecpe18annee1/">1ère année</a></li>
          <li><a href="https://sites.google.com/site/plateformeechangecpe18annee2/">2ème année</a></li>
          <li><a href="https://sites.google.com/site/plateformeechangecpe18annee3ok/">3ème année</a></li>
        <ul>
      </div>
      <div class="gradient-box">
        <h2>Liste de diffusion</h2>
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
        <h2>Vu à la télé</h2>
	<a href="<?=$reportage?>">Stage 2020 en Suisse</a>
      </div>
    </div>
  </body>
</html>
 
