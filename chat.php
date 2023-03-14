<?php


?>
<?php include_once "header.php"; ?>
<body>
<div class="wrapper">
    <section class="chat-area">
        <header>
            <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
            <img src="php/images/avatar1.png" alt="">
            <div class="details">
                <span>Büşra</span>
                <p>Meşgul
                </p>
            </div>
        </header>
        <div class="chat-box">

            <div class="chat outgoing">
                <img src="" alt="">
                <div class="details">
                    <p>Merhaba</p>
                </div>
            </div>

            <div class="chat incoming">
                <img src="php/images/avatar3.png" alt="">
                <div class="details">
                    <p>Merhaba</p>
                </div>
            </div>
        </div>
        <form action="#" class="typing-area" autocomplete="off">
            <input type="text" name="incoming_id" value="1" hidden>
            <input type="text" name="message" class="input-field " placeholder="Mesaj yazınız..." autocomplete="off">
            <button><i class="fab fa-telegram-plane"></i></button>
        </form>
    </section>
</div>
<script src="javascript/chat.js"></script>
</body>
</html>