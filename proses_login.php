<?php 
session_start();

include "../service/env.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (empty($username) || empty($password) || empty($email)) {
        echo "<script>alert('form ga boleh kosong boy'); window.history.back();</script>";
        exit();
    }

    $sql = "SELECT * FROM xrpl2 WHERE username = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if ($data && password_verify($password, $data['password'])) {
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        header("Location: main.php");
        exit();
    } else {
        echo "<script>alert('akun ga ditemukan'); window.history.back();</script>";
        exit();
    }
}