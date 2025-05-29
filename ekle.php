<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["title"])) {
    $title = htmlspecialchars(trim($_POST["title"]));

    if ($title !== "") {
        $stmt = $pdo->prepare("INSERT INTO tasks (title) VALUES (:title)");
        $stmt->execute(["title" => $title]);

        echo json_encode(["succes" => true]);
    } else {
        echo json_encode(["error" => "boş başlık"]);
    }
} else {
    echo json_encode(["error" => "Geçersiz istek"]);
}

?>