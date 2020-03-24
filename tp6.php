<?php
echo "<h1>TP6</h1>";

class team
{
    private $nom;
    private $nbretitre;

    public function __construct($name,$titre) {
        $this->nom = $name;
        $this->nbretitre = $titre;
    }


    function getnom (){
        return $this->nom;
    }
    function getnbrtitre(){
        return $this->nbretitre;
    }
    function setnom ($val){
        $this->nom = $val;
    }
    function setnbrtitre ($val){
        $this->nbretitre = $val;
    }
    function display(){

        echo "L'équipe $this->nom a $this->nbretitre titres<br>";

}
    function __destruct()
    {
        $this->nbretitre = NULL;
        $this->nom=NUll;
        echo "Destructor<br>";
    }
}

$t = new team("oui",7);
//$t->setnbrtitre(6);
//$t->setnom("om");
$t->display();


?>
