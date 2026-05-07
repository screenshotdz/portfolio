<?php
$file = __DIR__ . 'visits.txt';

if (!file_exists($file)) {
    file_put_contents($file, "0");
}

$count = (int) file_get_contents($file);
$count++;
file_put_contents($file, (string)$count, LOCK_EX);

header('Content-Type: application/json; charset=utf-8');
echo json_encode(['visits' => $count]);
