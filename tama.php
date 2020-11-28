<?php 

/* c:\xampp/php/php.exe C:\Users\Labhdeep\Desktop\tamagotchi\main.php */
 class tama {
    public $gana = True;
    public $felicitat;
    public $edat = 0;
    public $pes = 0;
    public $disciplina;
    public $estat;
    public $lavabo = 0;
    public $mort = false;
    
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

    function getPes(){
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

    function getLavabo(){
        return $this->lavabo;
    }
    function setLavabo($newLavabo){
       return $this->lavabo = $newLavabo;
    }

    function getMort(){
        return $this->mort;
    }
    function setMort($newMort){
       return $this->mort = $newMort;
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

        if($this->mort == false){
            if ($this->getGana()){
                echo " \n\n\n Gelat" . "\n
                              _.-.
                            ,'/ //\
                           /// // /)
                          /// // //|
                         /// // ///
                        /// // ///
                       (`: // ///
                        `;`: ///
                        / /:`:/
                       / /  `'
                      / /
                     (_/      
                            \n";

                $feli = $this->getFelicitat();
                $this->setFelicitat($feli+1);
                
                $pesActual = $this->getPes();
                $this->setPes($pesActual+0.6);

                $lav = $this->getLavabo();
                $this->setLavabo($lav+0.8);

                $this->setGana(False);



                echo "\n Felicitat:  " ;
                echo $this->getFelicitat();
        
                echo "\n Pes:        " ;
                echo $this->getPes();

                echo "\n Edat: " ;
                echo $this->edat;

                echo "\n Ganes de anar al Lavabo: " ;
                echo $this->getLavabo();
                
            }else{
                echo "\n\n\n No vol menjar" . "\n
                 _   _                    _                           _            
                | \ | |                  | |                         (_)           
                |  \| | ___   __   _____ | |     _ __ ___   ___ _ __  _  __ _ _ __ 
                | . ` |/ _ \  \ \ / / _ \| |    | '_ ` _ \ / _ \ '_ \| |/ _` | '__|
                | |\  | (_) |  \ V / (_) | |    | | | | | |  __/ | | | | (_| | |   
                \_| \_/\___/    \_/ \___/|_|    |_| |_| |_|\___|_| |_| |\__,_|_|   
                                                                    _/ |           
                                                                   |__/           
                ";

                echo "\n Felicitat:  " ;
                echo $this->getFelicitat();
        
                echo "\n Pes:        " ;
                echo $this->getPes();

                echo "\n Edat: " ;
                echo $this->edat;

                echo "\n Ganes de anar al Lavabo: " ;
                echo $this->getLavabo();
            }


            if($this->getLavabo() >= 10){
                $this->death();
            }
        }
    }
    function menjar2()
    {
        echo "galeta" . "\n";
    }
    function dormir()
    {
        echo "dormir" . "\n";    
    }


    function death(){

        echo "
        HA MENJAT MASSSA!!!!! \n\n
            _.-^^---....,,--       
        _--                  --_  
       <                        >)
       |                         | 
        \._                   _./  
           ```--. . , ; .--'''       
                 | |   |             
              .-=||  | |=-.   
              `-=#$%&%$#=-'   
                 | ;  :|     
        _____.,-#%&$@%#&#~,._____
        ";

        $this->setMort(true);

        exit;
    }

    function calcularEdat($cont){
        switch($cont){
            case $cont < 3:
                echo "\n\n\n OU";
            break;
            case $cont > 3 and $cont < 5:
                echo "\n\n\n Nado";
            break;
        }
    }

   }
?>