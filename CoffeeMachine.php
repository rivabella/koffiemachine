<?php


class CoffeeMachine {
    
    protected $water;
    protected $beans;
    
    //when you make an instance of the class this functionis called
    public function __construct($newWater,$newBeans) {
        $this->water = $newWater;
        $this->beans = $newBeans; 
        }

    //--------set-------
    public function setWaterAndBeans ($water,$beans) 
    {
        $this->water = $water;
        $this->beans = $beans;
        $newwater=  $this->water;
        $newbeans=  $this->beans;
             
        // to save the variabelen to filename.php to put in the construct again
        $var_strwater = var_export($newwater, true);
        $var_strbeans = var_export($newbeans,true);

        $var = '<?php'." \n ".'$newWater ='." $var_strwater".';'."\n".'$newBeans ='." $var_strbeans".';?>';
        file_put_contents('filename.php', $var);
        
        $this->cafeCups(100,10,$newwater,$newbeans);
    }
   
      
    //------get---------  
    public function getWater() 
    {   
        return $this->water;         
    }
    public function getBeans()
    {
        return $this->beans;   
    }
    
    
    // to check if you need to fill the machine
    public function fill($hWater, $hBeans) 
    {
        $iCupsBeans = array($this->beans/$hBeans);
        $iCupsWater = array($this->water/$hWater); 
       
         if (min($iCupsWater)<2)
       {
           echo "<div class='red'>U moet water bijvullen.</div>";
       }
       
       if (min($iCupsBeans)<2)
       {
           echo "<div class='red'>U moet de bonen bij vullen.</div>";  
       }     
        
    }
    //to check how much cups you can still make
    public function cafeCups($hWater,$hBeans,$newWater,$newbeans) 
    {   
        //get the maximum of cups for the beans
        $iCupsBeans = array(intval($newbeans/$hBeans));
        //get the maximum of cups for the water
        $iCupsWater = array(intval($newWater/$hWater)); 
        //checks the lowest number of cups
       $Amounts = min (array($iCupsWater,$iCupsBeans));
        //display the amount of cups still left
        foreach ($Amounts as $amount)
        {
            if($amount<0){
                print'';
            }
            else{
            switch ($amount) {
                case 0: 
                    print "";
                    break;
                case 1:
                    print"U kunt nog $amount kopje zetten.</br>";
                    break;
                case 1:
                    print"";
                    break;
                default:
                    print"U kunt nog $amount kopjes zetten.</br>";
                    break;
            }}
        
        }
               
    }
    
    //one CafeLungo needs 100 ml water and 10 gram beans
    public function getCafeLungo($a,$b) 
    {
        $this->fill(100,10);        
        $this->water = $a - 100;
        $newwater=  $this->water;
        $this->beans = $b -10; 
        $newbeans=  $this->beans;
            
        // to save the variabele to filename.php to put in the construct again
        $var_strwater = var_export($newwater, true);
        $var_strbeans = var_export($newbeans,true);

        $var = '<?php'." \n ".'$newWater ='." $var_strwater".';'."\n".'$newBeans ='." $var_strbeans".';?>';
        file_put_contents('filename.php', $var);
        
        $this->cafeCups(100,10,$newwater,$newbeans);
        
        
    }
    //one Espresse needs 30 ml water and 8 gram beans
    public function getEspresso($a,$b) 
    {
        $this->fill(30,8);        
        $this->water = $a - 30;
        $newwater=  $this->water;
        $this->beans = $b -8; 
        $newbeans=  $this->beans;
            
        // to save the variabele to filename.php to put in the construct again
        $var_strwater = var_export($newwater, true);
        $var_strbeans = var_export($newbeans,true);

        $var = '<?php'." \n ".'$newWater ='." $var_strwater".';'."\n".'$newBeans ='." $var_strbeans".';?>';
        file_put_contents('filename.php', $var);
        
        $this->cafeCups(30,8,$newwater,$newbeans);
    }
    //one Ristreto needs 25 ml water and 8 gram beans
    public function getRistreto($a,$b) 
    {
        $this->fill(25,8);        
        $this->water = $a - 25;
        $newwater=  $this->water;
        $this->beans = $b -8; 
        $newbeans=  $this->beans;
            
        // to save the variabele to filename.php to put in the construct again
        $var_strwater = var_export($newwater, true);
        $var_strbeans = var_export($newbeans,true);

        $var = '<?php'." \n ".'$newWater ='." $var_strwater".';'."\n".'$newBeans ='." $var_strbeans".';?>';
        file_put_contents('filename.php', $var);
        
        $this->cafeCups(25,8,$newwater,$newbeans);     
    }
}


