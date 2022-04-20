<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create('en_PH');

for ($i=1; $i<=20; $i++){
    $creditCardType = $faker->creditCardType;
    $creditNumber = $faker->creditCardNumber($type = null, $formatted = false, $separator = '-');
    $creditCardExpirationDate = $faker->date($format = 'Y-m-d H:i:s', $max = 'now');
    $numberBetween = $faker->numberBetween($min = 1, $max = 100);

    echo "$i, $creditCardType, $creditNumber, $creditCardExpirationDate, $numberBetween";
}

?>