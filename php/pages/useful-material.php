<?php
require_once __DIR__ . '/../../connect.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/../../');

$db_table_name= $_ENV['DB_TABLE_NAME'];
$query = "SELECT * FROM $db_table_name";

$dotenv->load();

$result = pg_query($connection, $query);

if ($result === false) {
    die('Ошибка выполнения запроса: ' . pg_last_error());
}

echo '<table border="1">';
echo '<tr><th>ID</th><th>Title</th><th>URL</th><th>Description</th></tr>';

while ($row = pg_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['title'] . '</td>';
    echo '<td><a href="' . $row['url'] . '" target="_blank">' . $row['url'] . '</a></td>';
    echo '<td>' . $row['description'] . '</td>';
    echo '</tr>';
}

echo '</table>';
