// İletişim formunu doğrulamak için JavaScript fonksiyonu
function validateContactForm() {
    // E-posta alanındaki değeri al
    let emailInput = document.getElementById("email").value;
    
    // E-posta formatını kontrol etmek için Regex (Düzenli İfade)
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    // Eğer format yanlışsa uyarı ver ve formu durdur
    if (!emailRegex.test(emailInput)) {
        alert("Lütfen geçerli bir e-posta adresi giriniz!");
        return false;
    }
    
    // Her şey doğruysa formun gönderilmesine izin ver
    return true;
}