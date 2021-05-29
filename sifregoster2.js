function sifreGoster2()
{
    var x = document.getElementById("sifredogrulama");
    if (x.type === "text") {
      x.type = "password";
    } else {
      x.type = "text";
    }
    change2();
}
function change2()
{
    var deger2 = document.getElementById("but2");
    if (deger2.value=="Gizle") deger2.value = "Göster";
    else deger2.value = "Gizle";
}