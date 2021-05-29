function sifreGoster()
{
    var x = document.getElementById("sifre");
    if (x.type === "text") {
      x.type = "password";
    } else {
      x.type = "text";
    }
    change1();
}
function change1()
{
    var deger1 = document.getElementById("but1");
    if (deger1.value=="Gizle") deger1.value = "Göster";
    else deger1.value = "Gizle";
}
