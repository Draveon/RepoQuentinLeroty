<?php

class Hero
{
    private $arme;
    private $name;
    private $pv = 100;
    private $sortspe;
    protected $attaque;
    protected $defence;


    /**
     * @return mixed
     */
    public function getArme()
    {
        return $this->arme;
    }
    /**
     * @param mixed $arme
     */
    public function setArme($arme)
    {
        $this->arme = $arme;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return int
     */
    public function getPv(): int
    {
        return $this->pv;
    }
    /**
     * @param int $pv
     */
    public function setPv(int $pv)
    {
        $this->pv = $pv;
    }

    /**
     * @return int
     */
    public function getSortspe(): int
    {
        return $this->sortspe;
    }
    /**
     * @param int $pv
     */
    public function setSortspe(int $sortspe)
    {
        $this->sortspe = $sortspe;
    }


    /**
     * @return mixed
     */
    public function getAttaque()
    {
        return $this->attaque;
    }
    /**
     * @param mixed $attaque
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;
    }
    /**
     * @return mixed
     */
    public function getDefence()
    {
        return $this->defence;
    }
    /**
     * @param mixed $defence
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;
    }
    public function attaque($pa) {
        var_dump($this->getName());
        $this->setPv($this->getPv() - ($pa - $this->getDefence()));
        var_dump($this->getPv());
        var_dump($this->getDefence());
    }
}

 ?>
