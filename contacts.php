<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>
    </div>

    <div class="feedback">
        <div class="container">
            <h2>Добро пожаловать!</h2>
            <p>Заполни данные и расскажи немного о себе.</p>

            <form>
                <div class="inline">
                    <div>
                        <label>First Name</label>
                        <input type="text">
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type="text">
                    </div>
                </div>
                <label>Email Address</label>
                <input type="email" class="one-line">
                <label>Message</label>
                <textarea class="one-line"></textarea>
                <button type="button">Вперед</button>

            </form>


        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>

</body>

</html>