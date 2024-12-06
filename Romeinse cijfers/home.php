<?php
function decimalToRoman($num) {
    $map = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );
 
    $result = '';
 
    foreach ($map as $roman => $value) {
        $matches = intval($num / $value);
        $result .= str_repeat($roman, $matches);
        $num = $num % $value;
    }
 
    return $result;
}
 
$decimalNumber = ""; // Vervang dit met het gewenste decimale getal
if ($decimalNumber > 0 && $decimalNumber <= 5000) {
    $romanNumber = decimalToRoman($decimalNumber);
    echo "Het Romeinse cijfer equivalent van $decimalNumber is: $romanNumber";
} else {
    echo "Het ingevoerde getal moet tussen 1 en 5000 liggen.";
}
?>