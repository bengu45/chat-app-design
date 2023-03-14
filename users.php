<?php

header("location: login.php");

?>
<?php include_once "header.php"; ?>
<body>
<div class="wrapper">
    <section class="users">
        <header>
            <div class="content">
                Deneme
                <img src="" alt="">
                <div class="details">
                    <span>Bengü Özkan</span>
                    <p>1</p>
                </div>
            </div>
            <a href="" class="logout">Çıkış Yap</a>
        </header>
        <div class="search">
            <span class="text">Sohbeti başlatmak için bir kullanıcı seçin</span>
            <input type="text" placeholder="Aramak için isim girin...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">

        </div>
    </section>
</div>

<script src="javascript/userss.js"></script>

</body>
</html>