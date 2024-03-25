<!-- Скелет сайта -->
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
    <!-- form on the site -->
    <div class="flex">
        <div class="sign-in">
                <div class="flex-sign">
                    <h1>Войти в систему</h1>
                    <a href="./reg.php">Регистрация</a>
                </div>
            <div>
                <form action="./log.php" method="post" name="form" class="form-sign">
                    <p>Вход с помощью электронной почты</p>
                    <input name = 'Email' type="text">
                    <p>Пароль</p>
                    <input name = 'Password' type="password">
                    <div class="div-submit-sign">
                        <input type="submit">
                        <a href="#">Забыли пароль?</a>
                    </div>
                </form>
            </div>
        </div>
        <img src="../assets/books.jpg" class="form-img">
    </div>
    <script src="./script.js"></script>
</body>
</html>