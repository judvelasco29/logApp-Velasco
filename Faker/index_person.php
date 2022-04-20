<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create('en_PH');

for ($i=1; $i<=100; $i++){
	$email = $faker->email;
	$lastName = $faker->lastName;
	$firstName = $faker->firstName;
	$userName = $faker->userName;
	$password = $faker->password($minLenght =6, $maxLenght = 20);

	echo "$i, $email, $lastName, $firstName, $userName, $password";
}


?>