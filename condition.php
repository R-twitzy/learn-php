<?php
// menghitung BMI
/*
1. Define weight
2. Define height
3. Count BMI -> weight / height * height
4. Show number of BMI
5. Show category
*/

$weight = 60;
$height = 1.75;
$bmi = $weight / ($height * $height);
echo "Your BMI: $bmi, ";
if ($bmi<18.5){
    echo "berat badan kurang";
}
elseif ($bmi>=18.5 && $bmi<23){
    echo "berat badan normal";
}
elseif ($bmi>=23 && $bmi<30){
    echo "berat badan berlebih";
}
elseif ($bmi<=30){
    echo "obesitas";
}
?>