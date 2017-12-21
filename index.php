

  <?php
  require 'Hero.php';
  require 'bucheron.php';
  require 'Chevalier.php';
  require 'Combat.php';


  $combat = new Combat();

  $bucheron = new bucheron();
        $bucheron->setName("Boby");
        $bucheron->setArme("Hache");
        $bucheron->setSortspe("parade"); //du chevalier
        $combat->addJoueurs($bucheron);

  $chevalier = new Chevalier();
        $chevalier->setName("Jack");
        $chevalier->setArme("epee");

        $combat->addJoueurs($chevalier);

  $combat->debut();
?>
