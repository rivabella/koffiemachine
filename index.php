<?php 
include 'CoffeeMachine.php';
include 'filename.php';
?>
<html>
    <head>
        <title>koffie apparaat</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' href='css/style.php' />
    </head>
    <body>
        <div class="box" id="coffee" >
            <p>Kies uw koffie:</p>
            <form method="GET" action="" >
                <input type="submit" name="cafeLungo" value="1 Cafe Lungo">
                <input type="submit" name="espresso" value="1 Espresso">
                <input type="submit" name="ristreto" value="1 Ristreto"><br>
            </form>     
        <?php       
        
 //to create a new instance of the class coffeemachine in memory
$coffeeMachine = new CoffeeMachine($newWater, $newBeans);
//variables for the amount of cups
$a = $coffeeMachine->getWater();
$b = $coffeeMachine->getBeans();

//get cafeLungo
if(isset($_GET['cafeLungo'])){
    echo $coffeeMachine->getCafeLungo($a,$b);    
}
//get espresso
if(isset($_GET['espresso'])){
    echo $coffeeMachine->getEspresso($a,$b);       
}
//get ristreto
if(isset($_GET['ristreto'])){
    echo $coffeeMachine->getRistreto($a,$b);
}
//add water and beans    
if(isset($_GET['WaterBeans'])){
$coffeeMachine->setWaterAndBeans(500,65);
}
?>
<br>
<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
<input type="submit" name="WaterBeans" value="Add water and beans">
</form>
<?php            
print "Er zit nog ".$coffeeMachine->getWater()." ml water in de machine<br>";
print "Er zit nog ".$coffeeMachine->getBeans()." gram bonen in de machine";
?>
</div>
  <div class="box" id="coffee-mug"></div>
        

    </body>
</html>