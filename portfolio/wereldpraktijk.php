<?php
$ceu = array(
    "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
    "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna",
    "Poland"=>"Warsaw") ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoofdsteden Quiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <p class="font-weight-bold"><?php 
        $country = array_rand($ceu);
        $capital = $ceu[$country];
        echo "What is the Capital of ".$country."? <br>"; 
        ?></p>

    <form action="wereldpraktijk.php" method="GET">
    <select class="custom-select custom-select-lg mb-3" name="city">
        
        <?php
        asort($ceu);
        foreach ($ceu as $ce) {
        ?>
        
        <option ><?php  echo $ce ?></option>
        <?php } ?>

    </select>
    <input type="hidden" name="antwoord" value="<?php echo $capital ?>">
    <input type="hidden" name="land" value="<?php echo $country?>">
    <input class="btn btn-outline-success" type="submit" value="Check my answer">
    </form>

    <p><?php
        if(isset($_GET["city"]) && isset($_GET["antwoord"]) && isset($_GET["land"]))
        {
            $city = $_GET["city"] ;
            $answer = $_GET["antwoord"] ;
            $land = $_GET["land"];
            if($city == $answer){
                echo "Good Job! The capital of ".$land." is ".$answer ;
            }else{
                echo "Wrong the capital of ".$land." is ".$answer;
            }
        }
        else
        {
        echo "";
        }
    ?></p>

</div>
</body>
</html>
