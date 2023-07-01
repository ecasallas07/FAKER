<?php 
require_once 'vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();



$db = new PDO('mysql:host=localhost:3307;dbname=organy','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8mb4'));

foreach(range(1,50) as $resgitro) // con range 1,100 se va repetir 100 veces
{
  
    $db->query("INSERT INTO usuario (usu_name,usu_lastname,usu_identification,usu_email,usu_telephone,usu_charge) VALUES ('{$faker->name()}',
    '{$faker->lastname()}',
    '{$faker->randomNumber(9)}',
    '{$faker->email()}',
    '{$faker->phoneNumber()}',
    '{$faker->randomElement($array =array('Tecnico','Administrativo','Ingeniero'))}')");
}