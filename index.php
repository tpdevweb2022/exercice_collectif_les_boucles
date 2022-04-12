<?php

// Créez un tableau composé de 5 codes postaux de l’Aube ainsi qu’une commune associée, puis grâce à une boucle afficher les paires clés valeurs

// 10000 - Troyes
// 10100 - Romilly-sur-Seine
// 10600 - La Chapelle St Luc
// 10120 - Saint André les Vergers
// 10300 - Sainte Savine

$arrayCommunes = [
    "10000" => [
        "Troyes"
    ],
    "10100" => [
        "Romilly-sur-Seine",
        "Pars-les-Romilly"
    ],
    "10600" => [
        "La Chapelle-St-Luc",
        "Barberey-Saint-Sulpice"
    ],
    "10120" => [
        "Saint-André-les-Vergers"
    ],
    "52000" => [
        "Chaumont",
        "Choignes"
    ],
    "10300" => [
        "Sainte-Savine"
    ],
];

$arrayCommunes["52100"] = ["Saint-Dizier", "Chancenay"];
// ksort($arrayCommunes);

// foreach ($array as $key => $value) {
//     echo $key . " " . $value;
// }

// Pour chaque code postal composé de communes
foreach ($arrayCommunes as $code_postal => $communes) {
    echo "$code_postal - " . implode(", ", $communes) . "<br>";
}


// $colors = [
//     "red",
//     "blue",
//     "green"
// ];
// echo implode(", ", $colors);


// Ecrivez une boucle en PHP avec la méthode la plus adaptée allant du chiffre 23 au chiffre 87, 
// et mentionnez la phrase « nouvelle dizaine » après chaque dizaine (30, 40, 50 …) affichée
$x = 23;
while ($x <= 500) {
    echo "La valeur est de " . $x;
    if ($x % 10 === 0) {
        echo " - C'est une dizaine";
    };
    echo "<br>";
    $x++;
}

// Affichez les éléments pairs d’une boucle allant de 7 à 28 en tant que $i. Puis, séparé par une virgule, affichez le résultat de la multiplication de l’élément affiché ($i) par la moitié de son triple.
for ($i = 7; $i <= 28; $i++) {
    if ($i % 2 === 0) { // On a un élément pair
        echo $i . ", " . $i * ($i * 3 / 2) . "<br>"; // On affiche notre valeur actuelle, suivie de la multiplication de la valeur avec la moitié de son triple
    }
}
