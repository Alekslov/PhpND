<!-- Pirma uzduotis -->
<?php
echo 'Pirma uzduotis<br>';
$vardas = 'Aleksandra';
$pavarde = 'Lovcova';
$gimimo_metai = '1993';
$einamieji_metai = '2021';
$mano_metai = $einamieji_metai - $gimimo_metai;
echo "Aš esu $vardas $pavarde. Man yra $mano_metai metai.<br>";


// Antra uzduotis

echo '<br>Antra uzduotis<br>';
$pirmas_skaicius = rand(0, 4);
$antras_skaicius = rand(0, 4);
if ($pirmas_skaicius === 0 || $antras_skaicius === 0) {
    echo 'Dalyba is 0 negalima<br>';
    } elseif ($pirmas_skaicius > $antras_skaicius) {
        echo 'Dalybos rezultatas '.number_format($pirmas_skaicius / $antras_skaicius, 2).'<br>';
    } elseif ($pirmas_skaicius < $antras_skaicius) {
        echo 'Dalybos rezultatas '.number_format($antras_skaicius / $pirmas_skaicius, 2).'<br>';
    } elseif ($pirmas_skaicius === $antras_skaicius) {
        echo 'Skaiciai lygus.<br>';
}
// Trecia uzduotis

echo '<br>Trecia uzduotis<br>';
$kint_pirmas = rand(0, 25);
$kint_antras = rand(0, 25);
$kint_trecias = rand(0, 25);

if ($kint_pirmas > $kint_antras && $kint_pirmas < $kint_trecias || $kint_pirmas < $kint_antras && $kint_pirmas > $kint_trecias) {
    echo "Vidurinis skaicius yra $kint_pirmas, nes antras $kint_antras, o trecias yra $kint_trecias.<br>";
} elseif ($kint_antras > $kint_pirmas && $kint_antras < $kint_trecias || $kint_antras < $kint_pirmas && $kint_antras > $kint_trecias) {
    echo "Vidurinis skaicius yra $kint_antras, nes pirmas $kint_pirmas, o trecias yra $kint_trecias.<br>";
} elseif ($kint_trecias > $kint_antras && $kint_trecias < $kint_pirmas || $kint_trecias < $kint_antras && $kint_trecias > $kint_pirmas) {
    echo "Vidurinis skaicius yra $kint_trecias, nes antras $kint_antras, o pirmas yra $kint_pirmas.<br>";
} else 
echo "Lygus skaiciai: pirmas skaicius $kint_pirmas, antras skaicius $kint_antras, trecias skaicius $kint_trecias.<br>";

// Ketvirta uzduotis

echo '<br>Ketvirta uzduotis<br>';
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1,10);
// $a =1;
// $b = 5;
// $c = 10;
if ($a + $b > $c || $b + $c > $a || $c + $a > $b){
    echo "Galima, nes a=$a, b=$b, c=$c.<br>";
} else
echo "negalima, nes a=$a, b=$b, c=$c .<br>";

// Penkta uzduotis

echo '<br>Penkta uzduotis<br>';
$k1 = rand(0, 2);
$k2 = rand(0, 2);
$k3 = rand(0, 2);
$k4 = rand(0, 2);
$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;
if ($k1 === 0) $nuliai++;
if ($k2 === 0) $nuliai++; 
if ($k3 === 0) $nuliai++;
if ($k4 === 0) $nuliai++;
if ($k1 === 1) $vienetai++;
if ($k2 === 1) $vienetai++;
if ($k3 === 1) $vienetai++;
if ($k4 === 1) $vienetai++;
if ($k1 === 2) $dvejetai++;
if ($k2 === 2) $dvejetai++;
if ($k3 === 2) $dvejetai++;
if ($k4 === 2) $dvejetai++;
echo "Nuliu yra: $nuliai, vienetu yra: $vienetai, dvejetu yra: $dvejetai.<br>";

// Sesta uzduotis

echo '<br>Sesta uzduotis<br>';
$tagas = rand(1, 6);
echo "<h$tagas>$tagas</h$tagas>";

// Septinta uzduotis

echo '<br>Septinta uzduotis<br>Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.<br>';

$color1 = rand(-10, 10);
$color2 = rand(-10, 10);
$color3 = rand(-10, 10);
if ($color1 < 0) {
    echo '<p style="color: green">'.$color1.', '.'</p>' ;
    } elseif ($color1 > 0) {
        echo '<p style="color: red">'.$color1.', '.'</p>' ;
            } else {
                echo '<p style="color: blue">'.$color1.', '.'</p>' ;
            }   
if ($color2 < 0) {
    echo '<p style="color: green">'.$color2.', '.'</p>' ;
    } elseif ($color2 > 0) {
        echo '<p style="color: red">'.$color2.', '.'</p>' ;
            } else {
                echo '<p style="color: blue">'.$color2.', '.'</p>' ;
            }
if ($color3 < 0) {
    echo '<p style="color: green">'.$color3.', '.'</p>' ;
    } elseif ($color3 > 0) {
        echo '<p style="color: red">'.$color3.', '.'</p>' ;
            } else {
                echo '<p style="color: blue">'.$color3.', '.'</p>' ;
            }
// Astunta uzduotis

echo '<br>Astunta uzduotis<br>';

$zvakiusk = rand(5, 3000);
// $nuolaida = 0;
$galutine_kaina = 0;
$nuolaida_pinigine = 0;
if ($zvakiusk <= 1000 ) {
$galutine_kaina = $zvakiusk;
echo "Perkama $zvakiusk zvakiu uz $galutine_kaina EUR.<br>";
} elseif ($zvakiusk >= 1000 && $zvakiusk < 2000) {
    $nuolaida_proc = 3;
    $nuolaida_pinigine = $nuolaida_proc / 100 * $zvakiusk;
    $galutine_kaina = $zvakiusk - $nuolaida_pinigine;
    echo "Perkama $zvakiusk zvakiu uz $galutine_kaina EUR.<br>";
} elseif ($zvakiusk >= 2000) {
    $nuolaida_proc = 4;
    $nuolaida_pinigine = $nuolaida_proc / 100 * $zvakiusk;
    $galutine_kaina = $zvakiusk - $nuolaida_pinigine;
    echo "Perkama $zvakiusk zvakiu uz $galutine_kaina EUR.<br>";
} 
// Devinta uzduotis

echo '<br>Devinta uzduotis<br>';

$num_one = rand(0, 100);
$num_two = rand(0, 100);
$num_three = rand(0, 100);
echo "Pirmas skaicius $num_one, antras skaicius $num_two, trecias skaicius $num_three<br>";

$dalyviu_skaicius = 0;
$vidurkis_kitu = 0;
$vidurkis = ($num_one + $num_two + $num_three) / 3;
echo 'Triju skaiciu aritmetinis vidurkis yra '.round($vidurkis).'<br>';
if ($num_one > 10 && $num_one < 90) {
    $vidurkis_kitu += $num_one ;
    $dalyviu_skaicius++;
}
if ($num_two > 10 && $num_two < 90) {
    $vidurkis_kitu += $num_two;
    $dalyviu_skaicius++;
}
if ($num_three > 10 && $num_three < 90) {
    $vidurkis_kitu += $num_three;
    $dalyviu_skaicius++;
}
$aritVidurkis = $vidurkis_kitu / $dalyviu_skaicius;

// $vidurkis_kitu = ($number_one + $number_two + $number_three) / $dalyviu_skaicius;
echo 'Kitu skaiciu aritmetinis vidurkis yra '.round($aritVidurkis).'<br>';



// Desimta uzduotis

echo '<br>Desimta uzduotis<br>';
$val = rand(0, 12);
$min = rand(0, 60);
$sek = rand(0, 60);
$papild = rand(0, 300);
echo "$val : $min : $sek"

    ?>