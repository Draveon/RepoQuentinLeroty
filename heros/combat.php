<?php
/**
 * Created by PhpStorm.
 * User: nickleus
 * Date: 20/12/17
 * Time: 16:05
 */
class Combat {
    private $joueurs = array();
    /**
     * @return mixed
     */
    public function getJoueurs()
    {
        return $this->joueurs;
    }
    /**
     * @param mixed $joueurs
     */
    public function addJoueurs($joueurs)
    {
        $this->joueurs[] = $joueurs;
    }
    public function debut() {
        var_dump($this->joueurs[0]->getName());
        var_dump($this->joueurs[0]->getAttaque());
        $bucheron = $this->joueurs[0];
        $chevalier = $this->joueurs[1];
        while ($bucheron->getPv() > 0 || $chevalier->getPv() > 0) {
            var_dump($chevalier->getName() . " attaque " . $bucheron->getName());
            $chevalier->attaque($bucheron->getAttaque());
            var_dump($bucheron->getName() . " attaque " . $chevalier->getName());
            $bucheron->attaque($chevalier->getAttaque());
        }
    }
}
