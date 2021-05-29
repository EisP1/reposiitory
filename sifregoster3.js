function sifreGoster3()
{
    var x = document.getElementById("giris-sifresi");
    if (x.type === "text") {
      x.type = "password";
    } else {
      x.type = "text";
    }
    change3();
}
function change3()
{
    var deger3 = document.getElementById("but3");
    if (deger3.value=="Gizle") deger3.value = "Göster";
    else deger3.value = "Gizle";
}