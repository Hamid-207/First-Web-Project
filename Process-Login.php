<?php
// Geçerli kullanıcı bilgileri: Şifre öğrenci numarası
$validEmail = "b251210583@sakarya.edu.tr";
$validPassword = "b251210583";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Boş alan kontrolü (Güvenlik için arka planda da kontrol ediyoruz)
    if (empty($email) || empty($password)) {
        header("Location: Login.html");
        exit();
    }

    if ($email == $validEmail && $password == $validPassword) {
        // Öğrenci numarasını ayırma (Hoşgeldiniz [Öğrenci No] mesajı için)
        $parts = explode("@", $email);
        $studentNumber = $parts[0];

        echo '<!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <title>Hoşgeldiniz</title>
        </head>
        <body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="text-center p-5 bg-white border rounded shadow border-success">
                <h1 class="text-success mb-3">Hoşgeldiniz ' . htmlspecialchars($studentNumber) . '</h1>
                <p class="lead">Giriş işleminiz başarıyla tamamlandı.</p>
                <a href="Index.html" class="btn btn-primary mt-3">Ana Sayfaya Dön</a>
            </div>
        </body>
        </html>';

    } else {
        echo '<!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <title>Hata</title>
        </head>
        <body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="text-center p-5 bg-white border rounded shadow border-danger">
                <h2 class="text-danger mb-3">Hata!</h2>
                <p class="lead">Email veya şifre hatalı. Lütfen tekrar deneyiniz.</p>
                <a href="Login.html" class="btn btn-outline-danger mt-3">Geri Dön</a>
            </div>
        </body>
        </html>';
    }

} else {
    header("Location: Login.html");
    exit();
}
?>