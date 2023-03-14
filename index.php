<?php include_once "header.php"; ?>
<body>
<div class="wrapper">
    <section class="form signup">
        <header>Gerçek Zamanlı Sohbet Uygulaması</header>
        <form action="#" enctype="multipart/form-data" autocomplete="off">
            <div class="error-txt"></div>
            <div class="name-details">
                <div class="field input">
                    <label>Adınız </label>
                    <input type="text" name="fname" placeholder="Adınız" required>
                </div>
                <div class="field input">
                    <label>Soyadınız </label>
                    <input type="text" name="lname" placeholder="Soyadınız" required>
                </div>
                <div class="field input">
                    <label>Mail : </label>
                    <input type="text" name="mail" placeholder="Mailinizi giriniz" required>
                </div>
                <div class="field input">
                    <label>Şifre</label>
                    <input type="password" name="password" placeholder="Şifrenizi giriniz" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Dosya Seç</label>
                    <input type="file" name="image" placeholder="Dosya Sesçiniz" required>
                </div>
                <div class="field button">
                    <button type="submit" value="Kaydol">Kaydol</button>
                </div>
            </div>
        </form>
        <div class="link">Üye Oldunuz mu ?<a href="login.php">Giriş yap</a> </div>
    </section>
</div>
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signup.js"></script>
</body>
