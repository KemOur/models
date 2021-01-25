<?php
require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

try {
    $pdo = new PDO(
        "{$_ENV['DB_CONNECTION']}:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}",$_ENV['DB_USER'],$_ENV['DB_PASSWORD']);
} catch (PDOException $e) {
    die($e->getMessage());
}

$faker = Faker\Factory::create('fr_FR');
for ($i = 0; $i < 5; $i++){
$created_at = $faker->date($format = 'Y-m-d H:i:s', $max = 'now');
$updated_at = $faker->date($format = 'Y-m-d H:i:s', $max = $created_at);
$first_name = $faker->firstName;
$last_name = $faker->lastName;
$email = $faker->email;
$password = $faker->password;


$statement = $pdo->prepare("INSERT INTO users (created_at, updated_at, first_name, last_name, email, password) VALUES (:created_at, :updated_at, :first_name, :last_name, :email, :password)");
$statement->execute([
'created_at' => $created_at,
'updated_at' => $updated_at,
'first_name' => $first_name,
'last_name' => $last_name,
'email' => $email,
'password' => $password,
]);
echo $pdo->lastInsertId().' ; ';
}