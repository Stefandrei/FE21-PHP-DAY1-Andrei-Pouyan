<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    // * exercise 1
    // $name = "Stefan";
    // $lastName = "Andrei";   
    // echo "<h1> $name $lastName </h1>";



   //* exercise 2 
// $name = "Stefan";
// $lastName = "Andrei";
// $age = "31";
// $job = "Developer";

// function PrintText(){
//          global $name, $lastName, $age, $job;
// 	$fullText = "Hi, my name is ".$name. " " .$lastName. " and i am " .$age. " and i work as a " .$job;
// 	return $fullText;
// }
// echo printText();

//*exercise3

// $arr = array("Mark","John","Georg","Lisa");
// echo "the third player in the team is ".$arr[2];

    

//$ Advanced
//      $asso_array = array(
//    "cartoon" => "Mickey Maouse",
//    "anime" => "Super Mario",
//    "game" => "packman",
//    );
// echo "cartoon : " .$asso_array["cartoon"]. "<br/>";
// echo "anime : " .$asso_array["anime"]. "<br/>" ;
// echo "game : " .$asso_array["game"];
    
    
$list = array(
    	"cartoon" => array
    	    (
    	    "micky_maouse" => 1928,
    	    "the_mole" => 1957,
    	    "Ratatouille"  => 2007
    	    ),
    	"anime" =>  array
    	    (
    	    "fullmetal_alchemist" => 2009,
    	    "attack_on_titak" => 2013,
    	    "hunter_x_hunter"  =>2011
    	    ),
    	"game" =>  array
    	    (
    	    "neverhood" => 1997,
    	    "samorast3" => 2006,
    	    "indsie" => 2016
    	    )
    	);
    	echo "created Year of Mick Mouse: ";
    	echo $list['cartoon']['micky_maouse'] .  "<br/>" ;
    	echo "created Year of Fullmetal Alchemist: ";
    	echo $list['anime']['fullmetal_alchemist'] . "<br/>" ;
    	echo "created Year of Neverhood: ";
    	echo $list['game']['neverhood'] . "<br/>" ;
    
    
    
    
    
    
    
    
    
    
    ?>


</body>
</html>