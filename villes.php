<?php
$villes = array(
  array(
    'nom' => 'Toulouse',
    'habitants' => '466297',
    'geo' => 'sud-ouest',
    'specialite' => 'Le cassoulet',
    'img' => 'toulouse.jpg'
  ),
  array(
    'nom' => 'Bordeaux',
    'habitants' => '246586',
    'geo' => 'ouest',
    'specialite' => 'Le vin',
    'img' => 'bordeaux.jpg'
  ),
  array(
    'nom' => 'Paris',
    'habitants' => '2200000',
    'geo' => 'centre nord',
    'specialite' => 'Le jambon beurre',
    'img' => 'paris.jpg'
  ),
  array(
    'nom' => 'Marseille',
    'habitants' => '1059000',
    'geo' => 'sud-ouest',
    'specialite' => 'La bouillabaisse',
    'img' => 'marseille.jpg'
  ),
  array(
    'nom' => 'Lyon',
    'habitants' => '500715',
    'geo' => 'sud est',
    'specialite' => 'La quenelle',
    'img' => 'lyon.jpg'
  )
);
?>

<h1>TD - Informations sur des villes</h1>


<?php foreach ($villes as $rang => $ville) { ?>

  <h3>Ville <?= $rang + 1 ?> : <?= $ville['nom'] ?></h3>
  <ul>
    <li>Nombre d'habitant : <?= $ville['habitants'] ?></li>
    <li>Région : <?= $ville['geo'] ?></li>
    <li>Spécialité : <?= $ville['specialite'] ?></li>
  </ul>
  <br>
  <img src="images/<?= $ville['img'] ?>" width="250px">
  <hr>

<?php } ?>


<pre>
<? print_r($villes) ?>
</pre>