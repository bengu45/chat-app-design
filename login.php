<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerçek Zamanlı Sohbet Uygulaması</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="wrapper">
    <section class="form login">
        <header>Gerçek Zamanlı Sohbet Uygulaması</header>
        <form action="#">
            <div class="error-txt">Hata !</div>
            <div class="name-details">
                <div class="field input">
                    <label>Mail : </label>
                    <input type="text" name="email" placeholder="Mailinizi giriniz">
                </div>
                <div class="field input">
                    <label>Şifre</label>
                    <input type="password" name="password" placeholder="Şifrenizi giriniz">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <button type="submit" value="Kaydol"><a href="chat.php">Kaydol</a></button>
                </div>
            </div>
        </form>
        <div class="link">Üye Olmadınız mı ?<a href="index.php">Kayıt Ol</a> </div>
    </section>
</div>
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/login.js"></script>
</body>
</html>