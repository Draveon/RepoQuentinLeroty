

  <?php
  require 'hero.php';
  require 'bucheron.php';
  require 'chevalier.php';
  require 'combat.php';
  $combat = new Combat();
  $viking = new Bucheron();
  $viking->setName("Boby");
  $viking->setArme("Hache");
  $combat->addJoueurs($bucheron);
  $chevalier = new Chevalier();
  $chevalier->setName("Jack");
  $chevalier->setArme("epee");
  $combat->addJoueurs($chevalier);
  $combat->debut();
?>
