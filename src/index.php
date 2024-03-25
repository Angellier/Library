<?php
    session_start();
?>
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
                <?php
                if(!isset($_SESSION["Email"])){
                    echo 
                       '<button class="login" onclick="document.location=\'../src/login.php\'">
                            Вход/регистрация
                        </button>';
                }else{
                    echo 
                       '<button class="logout" onclick="document.location =\'../src/logout.php\'">
                            Выход
                        </button>';
                }
                ?>
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
    <!-- info on the site -->
    <main>
        <p class="info">Главная<span class="black">/Новинки</span></p>
        <div class="flex">
            <div class="rectangle">

            </div>
            <div class="rectangle">

            </div>
            <div class="double-rect">
                <div class="mini-rect"></div>
                <div class="mini-rect"></div>
            </div>
        </div>
        <div class="flex">
            <div class="big-rect">
                
            </div>
            <div class="rect">

            </div>
        </div>
        <div class="flex">
            <div class="double-rect">
                <div class="mini-rect"></div>
                <div class="mini-rect"></div>
            </div>
            <div class="rectangle">

            </div>
            <div class="rectangle">

            </div>
        </div>
        <div class="flex">
            <div class="rect">

            </div>
            <div class="big-rect">
                
            </div>
        </div>
    </main>

    <footer>
        &copy; MegaLib 2023
    </footer>
    <script src="./script.js"></script>
</body>
</html>