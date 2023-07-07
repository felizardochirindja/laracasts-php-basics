<?php

use Core\Database;

$config = require basePath('config.php');
$db = new Database($config['database']);

$currentUserId = 6;

$note = $db->query('select * from notes where id = :id', [
    ':id' => $_POST['id'],
])->find();

if (!$note) {
    abort();
}

authorize($note['user_id'] == $currentUserId);

$db->query('delete from notes where id = :id', [
    ':id' => $_POST['id']
]);

header('location: /notes');
exit;
