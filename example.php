


<?php



include 'header.php';
echo "<p>This is an example page demonstrating the several ways of implementing PHP code into a website</p><br>";

$highscore=100;
if ($highscore<=100)
{

    echo "<b><br>Highscore:$highscore  You win!</b>";
}
else
{
    echo "<b>Highscore : $highscore   You lose!</b><br>";
}

$shoes = array( "converse", "crocs", "boots", "sneakers", "slippers");

foreach( $shoes as $shoe ) {
    echo "<br>I have my $shoe";
}

$year = 2000;





for ($age = 21; $age <= 22; $age++){
    echo "<br>His age is $age.<br>";
}


function carDescription($make, $model){
    echo "<br>The cars make is $make and the model is $model.";
}

carDescription("Toyata", "Yaris");
carDescription("Toyota", "Corolla");

include 'footer.php';



