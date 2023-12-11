<?php
session_start();

// Fungsi untuk memeriksa apakah pengguna telah login
function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

// Fungsi untuk memeriksa dan melindungi halaman dengan autentikasi
function authenticate()
{
    if (!isLoggedIn()) {
        // Jika pengguna tidak login, arahkan ke index.php atau halaman login lainnya
        header("Location: index.php");
        exit();
    }
}

// Fungsi untuk login
function login($user_id)
{
    // Simpan ID pengguna dalam sesi
    $_SESSION['user_id'] = $user_id;
}

// Fungsi untuk logout
function logout()
{
    // Hapus semua variabel sesi
    session_unset();

    // Hancurkan sesi
    session_destroy();
    header("Location: index.php");
}

// Fungsi untuk mendapatkan ID pengguna yang saat ini login
function getCurrentUserId()
{
    return isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
}

// Fungsi untuk melakukan otentikasi pengguna menggunakan MySQL
function authenticateUser($username, $password)
{
    // Disarankan untuk menggunakan prepared statement untuk mencegah serangan SQL Injection
    // Gantilah ini dengan koneksi database Anda
    include("../database_connection.php");



    // Lindungi dari serangan SQL Injection dengan menggunakan prepared statement
    $stmt = $connect->prepare("SELECT * FROM login WHERE user=:user AND pass=:pass");
    $stmt->bindParam(":user", $username);
    $stmt->bindParam(":pass", $password);
    // Eksekusi pernyataan
    $stmt->execute();

    // Ambil hasil
    // Fetch the data
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the result is not empty
    if ($result) {
        return $result['id'];
    } else {
        return null;
    }
}

// Anda dapat menambahkan lebih banyak fungsi sesuai kebutuhan

// Panggil fungsi authenticate() di setiap halaman yang memerlukan autentikasi
// Misalnya, di bagian atas file-file yang memerlukan autentikasi, Anda dapat menambahkan:
// authenticate();
