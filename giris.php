<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Space+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="docSlider.css">
    <style>
        .inner{
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 2em;
        }

    </style>
    <title>KeepWeChat</title>
</head>
<body>

<div class="docSlider">
    <section>
        <div class="inner">
            <div class="ilksayfa">
                <header>
                    <h1 id="baslik">KeepWeChat</h1>
                </header>
                <div class="tanitim-kutusu">
                    <br><br>
                    <h3 id="nedir">Bu da nesi?</h3>
                    <br>
                    <p class="tanitim">KeepWeChat, arkadaşlarınla konuşman için oluşturulmuş bir sohbet sitesidir.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="inner">
            <div class="ilksayfa">
                <div id="kayit-kutusu">
                    <h1 style="color: #E3E1E1">Kayıt Ol</h1>
                    <form name="kayitFormu" action="ac-reg.php" method="POST">
                        <section>
                            <label style="padding-top: 6px;" class="tanitim labeller" for="email">E-Mail Adresinizi Girin:   </label>
                            <input type="email" placeholder="E-Mail" name="email" id="email" required>
                        </section>
                        <section class="ikincilabel">
                            <label style="padding-top: 6px;" class="tanitim labeller" for="kullanici-adi">Kullanıcı Adınızı Girin: </label>
                            <input type="text" placeholder="Lütfen özel karakter kullanmayın." name="kullanici-adi" id="kullanici-adi">
                        </section>
                        <section class="ucunculabel">
                            <label style="padding-top: 6px;" class="tanitim labeller" for="sifre">Şifrenizi Belirleyin: </label>
                            <input type="text" placeholder="Şifre" minlength="8" name="sifrem" class="sifrekutulari" id="sifre" required>
                            <input type="button" class="sifrebuttons" id="but1" value="Gizle" onclick="sifreGoster()">
                        </section>
                        <section class="dordunculabel">
                            <label style="padding-top: 6px;" class="tanitim labeller" for="sifrecheck">Şifrenizi Doğrulayın: </label>
                            <input type="text" placeholder="Şifre Doğrulama" name="sifrecheck" class="sifrekutulari" id="sifredogrulama" required>
                            <input type="button" class="sifrebuttons" id="but2" value="Gizle" onclick="sifreGoster2()">
                        </section>
                        <section>
                            <button class="formbuttonlari" id="kayitolbut" onclick="sifreDogrulama(), sifreBos()">Kayıt Ol</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="inner">
            <div class="ilksayfa">
                <div id="giris-kutusu">
                    <h1 style="color: #E3E1E1">Giriş Yap</h1>
                    <form action="acs.php" name="girisFormu" method="POST">
                        <section class="kullaniciadibolumu">
                            <label style="padding-top: 6px;" class="tanitim labeller" for="kullanici-adi">Kullanıcı Adınızı Girin: </label>
                            <input type="text" placeholder="Kullanıcı Adı" name="kullanici-adi" id="kullanici-adi">
                        </section>
                        <section class="besincilabel">
                            <label style="padding-top: 6px;" class="tanitim labeller" for="sifre">Şifrenizi Girin: </label>
                            <input type="text" placeholder="Şifre" minlength="8" name="giris-sifresii" class="sifrekutulari" id="giris-sifresi" required>
                            <input type="button" class="sifrebuttons" id="but3" value="Gizle" onclick="sifreGoster3()">
                        </section>
                        <section>
                            <button type="submit" class="formbuttonlari" id="girisbut" name="giris-button" onclick="sifreBos()">Giriş Yap</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="sifregoster.js"></script>
<script src="sifregoster2.js"></script>
<script src="sifregoster3.js"></script>
<script src="docSlider.min.js"></script>
<script src="sifredogrulama.js"></script>
<script>docSlider.init();</script>
<script>sifreGoster()</script>
<script>sifreGoster2()</script>
<script>sifreGoster3()</script>
<script>sifreDogrulama()</script>
<script>validateForm()</script>
<script>sifreBos()</script>
</body>
</html>
