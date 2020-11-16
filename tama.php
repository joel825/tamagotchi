<?php 
 class tama {
    public $gana;
    public $felicitat;
    public $edat = 0;
    public $pes;
    public $disciplina;
    public $estat;
    
    //GETERS & SETERS

    function getGana(){
        return $this->gana;
    }
    function setGana($newGana){
       return $this->gana = $newGana;
    }

    function getFelicitat(){
        return $this->felicitat;
    }
    function setFelicitat($newFelicitat){
       return $this->felicitat = $newFelicitat;
    }

    function getEPes(){
    return $this->pes;
    }
    function setPes($newPes){
    return $this->pes = $newPes;
    }
   
    function getEdat(){
    return $this->edat;
    }
    function setEdat($newEdat){
    return $this->edat = $newEdat;
    }

    function getDisciplina(){
        return $this->disciplina;
    }
    function setDisciplina($newDisciplina){
       return $this->disciplina = $newDisciplina;
    }

    function getEstat(){
        return $this->estat;
    }
    function setEstat($newEstat){
       return $this->estat = $newEstat;
    }

    //METHODS

    function jugar()
    {
        echo "  
          LOVE    LOVE
        LOVELOVELOVELOVE
      LOVELOVELOVELOVELOVE
        LOVELOVELOVELOVE
          LOVELOVELOVE
            LOVELOVE
              LOVE
        ";
    }
 
    function menjar1()
    {
        echo "caramelo" . "\n";
    }
    function menjar2()
    {
        echo "galeta" . "\n";
    }
    function dormir()
    {
        echo "dormir" . "\n";    
    }

   }
?>