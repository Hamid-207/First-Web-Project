<?php
// Formun POST metoduyla gelip gelmediğini kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Formdan gelen verileri al ve güvenlik için htmlspecialchars kullan
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Ekrana yazdır
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Mesaj Gönderildi</title>
    </head>
    <body class="bg-light p-5">
        <div class="container">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h2 class="mb-0">Mesajınız Başarıyla Alındı!</h2>
                </div>
                <div class="card-body">
                    <p><strong>Gönderen İsim:</strong> ' . $name . '</p>
                    <p><strong>E-posta:</strong> ' . $email . '</p>
                    <hr>
                    <p><strong>Mesaj İçeriği:</strong><br>' . nl2br($message) . '</p>
                    <a href="Contact.html" class="btn btn-outline-primary mt-3">Geri Dön</a>
                </div>
            </div>
        </div>
    </body>
    </html>';

} else {
    // Eğer sayfaya direkt girilmeye çalışılırsa Contact sayfasına yönlendir
    header("Location: Contact.html");
    exit();
}
?>