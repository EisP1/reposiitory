function sifreDogrulama(){
    var sifreilk = document.forms["kayitFormu"]["sifrem"].value;
    var sifredog = document.forms["kayitFormu"]["sifrecheck"].value;
    if (sifreilk != sifredog)
    {
        alert("Şifreler Eşleşmiyor. Lütfen Kontrol Edin.")
        return false;
    }
}
function sifreBos(){
    var sifrekay = document.forms["kayitFormu"]["sifrem"].value;
    var sifregir = document.forms["girisFormu"]["giris-sifresii"].value;
    if (sifrekay == "" && sifregir == "")
    {
        alert("Şifre Boş Olamaz!");
        return "false";
    }
}