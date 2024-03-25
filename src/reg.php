<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/Group 1.png">
    <title>MegaLib</title>
</head>
<body>
    <header>
        <nav>
            <!-- logo -->
            <div class="div-logo">
                <img src="../assets/Group 1.png" alt="MegaLib" class="logo">
                <p class="logo-text">MegaLib</a>
            </div>
            <!-- Main search on the site -->
            <div class="div-search">
                <div class="search">
                    <input type="text" class="input-search" placeholder="Автор и/или название">
                    <div class="books">
                        <select name="books" id="">
                            <option value="Book">Книги</option>
                            <option value="Autor">Автор</option>
                        </select>
                    </div>
                </div>
                <button class="search-blue">
                    Найти
                </button>
            </div>
            <!-- login on the site -->
            <div class="div-login">
                <button class="login">
                    Вход/регистрация
                </button>
                <img src="../assets/Burger.svg" class="burger">
            </div>
        </nav>
    </header>
    <div class="menu">
        <a href="#">Электронные читательные залы</a>
        <a href="#">Вопросы и ответы </a>
        <a href="#">Обратная связь </a>
        <a href="#">Продукты</a>
    </div>
    <div class="flex">
        <img src="../assets/books-reg.jpg" class="form-img">
        <div class="reg">
                <div class="flex-sign">
                    <h1>Регистрация</h1>
                    <a href="./login.php">Уже есть аккаунт?</a>
                </div>
            <div>
                <form action="./registration.php" method="post" name="form" class="form-reg">
                    <p>Ваше имя</p>
                    <input name = 'Name' type="text">
                    <p>Дата рождения</p>
                    <input name = 'Date' type="text">
                    <p>Электронная почта</p>
                    <input name = 'Email' type="text">
                    <p>Пароль</p>
                    <input name = 'Password' type="text">
                    <div class="div-submit-reg">
                        <input type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./script.js"></script>
</body>
</html>