<?php
# Load Fakers own autoloader
require_once 'vendor/fzaninotto/Faker/src/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

for ($i = 0; $i < 20; $i++) {
    echo $faker->name . "<br>";
}



?>