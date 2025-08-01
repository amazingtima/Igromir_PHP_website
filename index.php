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

        <div class="hero container">
            <div class="hero--info">
                <h2>Новости мира 3D-разработки</h2>
                <h1>Индустрия не стоит на месте</h1>
                <p>Новое поколение видеокарт открывает новые<br> возможности как для геймеров, так и для разработчиков<br> игр. Зарегистрируйтесь и получайте последние<br> новости о мире игр на свою почту!</p>
                <a href="/contacts.php" class="btn">Зарегистрироваться</a>
            </div>
            <img src="img/joystick.png" alt="">
        </div>

        <div class="container trending">
            <a href="/trending.php" class="see-all">Смотреть все</a>
            <h3>Популярное</h3>


            <div class="games">
                <?php
                    require_once "lib/db.php";
                    $sql = 'SELECT * FROM trending ORDER BY id DESC LIMIT 4';
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $games = $query->fetchAll(PDO::FETCH_OBJ);
                    foreach($games as $el)
                        echo
                    '<div class="block">
                        <img src="/img/'.$el->image.'" alt="">
                        <span><img src="/img/fire.svg" alt=""> '.$el->followers.' Просмотров</span>
                    </div>';
                ?>
            </div>
        </div>

        <div class="container big-text">
            <p>Индустрия видеоигр — это крупный<br> и постоянно растущий рынок, для которого прогнозируется дальнейшее расширение в ближайшие годы.</p>
        </div>

        <div class="container banner">

            <img src="/img/banner.png" alt="">
        </div>



    </div>

    <div class="features">
        <div class="container">
            <h3>Тренд разработка игр для мультиплатформ </h3>
            <p>Геймеры играют на чем угодно - каждому свое</p>
            <div class="info">
                <div class="block">
                    <img src="/img/feature1.png" alt="">
                    <p>Мобильный гейминг</p>
                    <img src="/img/arrow1.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature2.png" alt="">
                    <p>Разработка игр для ПК</p>
                    <img src="/img/arrow1.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature3.png" alt="">
                    <p>Консольный гейминг</p>
                    <img src="/img/arrow1.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature4.png" alt="">
                    <p>AR/VR дополненная реальность</p>
                    <img src="/img/arrow1.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature5.png" alt="">
                    <p>Виртуальный дизайн</p>
                    <img src="/img/arrow1.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature6.png" alt="">
                    <p>3D-моделирование как отдельная область</p>
                    <img src="/img/arrow1.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">


        <div class="container projects">
            <h3>Играют где угодно</h3>
            <p>Будь то дом, компьютерный клуб или даже игорные заведения.</p>
            <div class="images">
                <img src="/img/pic1.png" alt="">
                <img src="/img/pic2.png" alt="">
                <img src="/img/pic3.png" alt="">
            </div>
            <div class="images">
                <img src="/img/pic4.png" alt="">
                <img src="/img/pic5.png" alt="">
                <img src="/img/pic6.png" alt="">
            </div>

        </div>


        <div class="container email">

            <div class="block">
                <div>
                    <h4>Будьте в курсе</h4>
                    <p>Оставьте свой email и читайте последние<br> новости из мира Игровой индустрии!</p>
                </div>
                <input type="email" id="emailField" placeholder="Введите свой email">
                <button onclick="checkEmail()">Отправить</button>
            </div>
        </div>
    </div>
    </div>
    <?php require_once "blocks/footer.php"; ?>


    <script>
        function checkEmail() {
            let email = document.querySelector('#emailField').value;
            if (!email.includes('@')) alert('Нет символа @');
            else if (!email.includes('.')) alert('Нет символа .');
            else alert('Все отлично!');
        }
    </script>
</body>

</html>