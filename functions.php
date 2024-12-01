<?php
session_start();

function register($username, $password) {
    global $pdo;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    return $stmt->execute([$username, $hashed_password]);
}

function login($username, $password) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        return true;
    }
    return false;
}

function logout() {
    session_destroy();
}

function submitComplaint($user_id, $complaint) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO complaints (user_id, complaint) VALUES (?, ?)");
    return $stmt->execute([$user_id, $complaint]);
}

function getComplaints() {
    global $pdo;
    $stmt = $pdo->query("SELECT complaints.*, users.username FROM complaints JOIN users ON complaints.user_id = users.id ORDER BY created_at DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>