<?php
require '../vendor/autoload.php';


$faker = Faker\Factory::create();
echo "Fake Data Generation: <br>";
for ($i = 0; $i < 5; $i++) {
    echo "Name:".$faker->name."\t";
    echo "Address:".$faker->address."<br>";
}
echo "PHP and Nginx are working! <br>";
echo phpinfo();

