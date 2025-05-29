<?php
header('Content-Type: application/json');
require 'db.php';

$stmt = $pdo->query("SELECT * FROM tasks ORDER BY created_at DESC");
$tasks = $stmt->fetchAll();

echo json_encode($tasks);