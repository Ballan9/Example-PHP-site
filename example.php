


<?php



include 'header.php';
echo "<p><center>This is an example page demonstrating the several ways of implementing PHP code into a website</center></p><br>";

$highscore=100;
if ($highscore<=100)
{

    echo "<center><b><br>Highscore:$highscore  You win!</b></center>";
}
else
{
    echo "<center><b>Highscore : $highscore   You lose!</b><br></center>";
}

$shoes = array( "converse", "crocs", "boots", "sneakers", "slippers");

foreach( $shoes as $shoe ) {
    echo "<br><center>I have my $shoe</center>";
}

$year = 2000;

while( $year < 2020) {
    $year++;
    if( $year == 2012 )break;
}
echo ("<center><br>The world ended in $year.</center>" );



for ($age = 21; $age <= 22; $age++){
    echo "<br><center>His age is $age.<br></center>";
}


function carDesc($make, $model){
    echo "<br><center>The cars make is $make and the model is $model.</center>";
}

carDesc("Toyata", "Yaris");
carDesc("Toyota", "Corolla");

include 'footer.php';



