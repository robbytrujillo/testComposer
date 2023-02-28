<?php
# Load Fakers own autoloader
require_once 'vendor/fzaninotto/Faker/src/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('id_ID');
// for ($i = 0; $i < 20; $i++) {
//     echo $faker->name . "<br>";
//     echo $faker->address . "<br><br>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penduduk Indonesia</title>
</head>
<body>
    <h1>Data Penduduk</h1>
    <?php for ($i = 0; $i < 20; $i++) : ?>
    <!-- echo $faker->name . "<br>"; -->
    <!-- echo $faker->address . "<br><br>"; -->

<ul>
<li><?= $faker->name; ?></li>
<li><?= $faker->address; ?></li>
<li><?= $faker->email; ?></li>
</ul>
<?php endfor; ?>
</body>
</html>