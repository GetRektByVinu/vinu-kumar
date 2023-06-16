<?php

// function berekenKwadraat($getal) {
//     $kwadraat = $getal * $getal;
//     return $kwadraat;
//     }

//     $resultaat = berekenKwadraat(5);
// echo $resultaat; // Geeft 25 uit

// function zegHallo($naam) {
//     echo "Hallo, Welkom $naam";
// } 
// zegHallo("Omer");
// echo "<br>";
// zegHallo("Vinu");

// function optellen($getal1, $getal2) {
//     echo "Het uitkomst is " . $getal1 + $getal2;
// }
// if (isset($_GET['knop'])) {
//     $cijfer = $_GET['getal1'];
//     $cijfer2 = $_GET['getal2'];

//     optellen($cijfer, $cijfer2);
// }

// $datum = date("H:I");


// if ($datum < "12:00") {
//     echo"Goedemorgen";
// } 
// else if ($datum < "18:00") {
//     echo"Goedenmiddag";
// } else {
//     echo"Goedenavond";
// }

// echo "<BR>";

// function gemiddelde($getal1, $getal2) {
// $bereken = ($getal1 + $getal2) / 2;
// echo "Het resultaat is " . $bereken;
// }
// $getal4 = 10;
// $getal5 = 5;
// gemiddelde($getal4, $getal5);

    
//function dagenTotEindeJaar()
// {
//     $Datumvannu = date_create();
//     $eindeJaarnu = date_create(date("Y") . "-12-31");
//     $vergelijking = date_diff($Datumvannu, $eindeJaarnu);
//     $dagen = $vergelijking->format("%a");
//      echo "Aantal dagen tot het einde van het jaar: " . $dagen;

// }
// dagenTotEindeJaar();

echo "<br>";

function berekenTotaleLengte($strings)

{
    $totaalLengte = 0;
    foreach ($strings as $string) {
        $totaalLengte += strlen($string);
    }
    return $totaalLengte;
}
$games = array("Fortnite", "Fifa", "Agario", "Valorant", "Gta V", "Sonic", "Among us");
echo "Totale lengte van de strings: " . berekenTotaleLengte($games);

?>

