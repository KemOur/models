<?php
require __DIR__ . "/../vendor/autoload.php";
use App\Models\User;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

try {
    $pdo = new PDO(
        "{$_ENV['DB_CONNECTION']}:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}",$_ENV['DB_USER'],$_ENV['DB_PASSWORD']);
} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare("SELECT * FROM users");
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_CLASS, User::class);
print_r($users);

/*

for($i = 0; $i < 10; $i++){
    $db = dbConnect();
    $faker = Faker\Factory::create('fr_FR');
    $title = $faker->catchPhrase;
    $body = $faker->text;
    $statement = $db->prepare('INSERT INTO posts (title, body) VALUES ( :title, :body)');
    $statement->execute([
        'title' => $title,
        'body' => $body,
    ]);
}
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Full name</th>
                <th>email</th>
                <th>Password</th>
                <th>Json</th>
            </tr>
        </thead>
        <tbody>
        <br>
        <br>
        <br>
        <br>
        <br>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user->getCreated()->format('d/m/Y') ?></td>
                    <td><?= $user->getUpdated()?></td>
                    <td><?= $user->getFullName() ?></td>
                    <td><?= $user->getEmail() ?></td>
                    <td><?= $user->getPassword() ?></td>
                    <td><?= json_encode($user, JSON_PRETTY_PRINT)?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>

