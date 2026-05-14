<?php
// Geçerli kullanıcı bilgileri (Sabitlenmiş - Hardcoded)
$validEmail = "b251210583@sakarya.edu.tr";
$validPassword = "hamid12345";

// Formun POST metoduyla gönderilip gönderilmediğini kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Formdan gelen verileri al
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Girilen bilgilerin doğruluğunu IF yapısı ile kontrol et
    if ($email == $validEmail && $password == $validPassword) {
        
        // Başarılı giriş: Hoşgeldin mesajı göster (Özel isimle)
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <title>Hoşgeldin</title>
        </head>
        <body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="text-center p-5 bg-white border rounded shadow border-success">
                <h1 class="text-success mb-3">Hoşgeldin Hamid!</h1>
                <p class="lead">Giriş işleminiz başarıyla tamamlandı.</p>
                <a href="Index.html" class="btn btn-primary mt-3">Ana Sayfaya Dön</a>
            </div>
        </body>
        </html>';

    } else {
        // Hatalı giriş: Uyarı mesajı göster
        echo '<!DOCTYPE html>
        <html lang="en">
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
    // Sayfaya URL üzerinden direkt erişilmeye çalışılırsa Login sayfasına yönlendir
    header("Location: Login.html");
    exit();
}
?>