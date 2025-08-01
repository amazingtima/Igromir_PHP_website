<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php"; ?>

        <div class="hero-about container">
            <div class="info">
                <h1 style="font-size: 48px;">Мы сообщество энтузиастов</h1>
                <p>Регистрируйся и получи возможность добавлять<br> свои игровые посты, которые увидят миллионы!</p>
                <a href="/contacts.php" class="btn" style="margin-top: 40px; display: inline-block;">Зарегистрироваться</a>

            </div>
            <img src="/img/banner_main.png" alt="">
        </div>

        <div class="container work">
            <h2>Клуб продвинутых геймеров ждет тебя!</h2>
            <div class="blocks">
                <div class="block">
                    <span class="badge purple">#уникальность</span>
                    <h3>Уникальный опыт</h3>
                    <p style="margin-top: -10px;">Геймеры делятся своим уникальным опытом и обзорами игр.</p>
                </div>
                <div class="block">
                    <span class="badge brown">#коммьюнити</span>
                    <h3>Будь на связи</h3>
                    <p style="margin-top: -10px;">Находи друзей по интересам<br> и обсуждай самое интересное.</p>
                </div>
                <div class="block">
                    <span class="badge green">#карьера</span>
                    <h3>Работа мечты</h3>
                    <p style="margin-top: -10px;">Самая интересная индустрия<br> ждет тебя на работу!</p>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "blocks/footer.php"; ?>

</body>

</html>