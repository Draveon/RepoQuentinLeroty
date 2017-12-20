
  <?php




  require 'heros.php';
  require 'heros/chevalier.php';
  require 'heros/bucheron.php';

  $Personnage = new Personnage();
  $Personnage->setname('Heros1')
  $Personnage->setpv(100);
    var_dump($Personnage->display('Heros1'))

    $Personnage = new Personnage();
    $Personnage->setname('Heros2')
    $Personnage->setpv(100);
      var_dump($Personnage->display('Heros2'))


  $chevalier = new chevalier();
  $chevalier->setrole('chevalier');
  $chevalier->setarme('épée');
    var_dump($chevalier->display("Chevalier"));

  $chevalier = new chevalier();
  $chevalier->setrole('chevalier');
  $chevalier->setarme('épée');
    var_dump($chevalier->display("Chevalier"));





//TEEEEEEEEEEEEST
/*
class Person {

  private $name;
  private $name2;



  public function getFirstName():string {

    return $this->firstName;
  }
  public function setFirstName(string $name){

        $this->firstName = $name;
  }


  public function getLastName():string {

    return $this->lastName;
  }
  public function setLastName(string $name2) {

        $this->lastName = $name2;
  }
  public function display():string {
        return "je m'appelle " . $this->firstName . ' ' . $this->lastName;
  }
}
$Person = new Person();
$Person->setfirstName("Kadoc");
$Person->getfirstName();
$Person->setlastName("Le docker");
$Person->getlastName();

var_dump($Person->display());

*/




  //AGES
/*
  $age = 10;
  if ($age >=6 && $age <=7) {
  echo 'poussin';
}
else if ($age >=8 && $age <=9)  {
echo 'pupille';
}
else if ($age >=10 && $age <=11)  {
echo 'minime';
}
else {
echo 'cadet';
}
*/

//ENTIER pair ou pas
/*
$entier = 144;
for ($i=0; $i < 1 ; $i++) {
if (($entier%2)== 1){
echo "il est impair";

}
else{
echo "il est pair";
}
}

//CHAINE DE CARACTERE

$chaine = 'blablalblablabla !';

$size = strlen($chaine);
echo $size;

if ($size>3) && ($size<10) {
  echo 'OK';
}
else {
  echo 'pas OK';
}
*/

?>
