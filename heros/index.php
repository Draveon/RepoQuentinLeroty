

  <?php
  require 'Hero.php';
  require 'Viking.php';
  require 'Chevalier.php';
  require 'Combat.php';
  $combat = new Combat();
  $viking = new Viking();
  $viking->setName("Boby");
  $viking->setArme("Hache");
  $combat->addJoueurs($viking);
  $chevalier = new Chevalier();
  $chevalier->setName("Jack");
  $chevalier->setArme("epee");
  $combat->addJoueurs($chevalier);
  $combat->debut();
?>
