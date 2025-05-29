<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['is_completed'])) {
    $id = intval($_POST['id']);
    $is_completed = $_POST['is_completed'] == 1 ? 1 : 0;

    $stmt = $pdo->prepare("UPDATE tasks SET is_completed = :is_completed WHERE id = :id");
    $stmt->execute([
        'is_completed' => $is_completed,
        'id' => $id
    ]);

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['error' => 'Geçersiz istek']);
}
