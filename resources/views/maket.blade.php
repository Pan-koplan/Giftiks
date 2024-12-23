<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<header>
    <div class="header-container">
        <div class="logo">Лого</div>

        <div class="burger-menu" onclick="toggleMobileMenu()">
            <div class="burger-line"></div>
            <div class="burger-line"></div>
            <div class="burger-line"></div>
        </div>

        <ul class="nav-links">
            <li><a href="/Catalog">Каталог</a></li>
            <li><a href="/Library">Подборки</a></li>
            <li><a href="/Auth">Персональный подбор</a></li>
            <?php
            if (isset($_COOKIE['name']))
                echo '<li><a href="/User">Личный кабинет</a></li>';
            else {
                echo '<li><a href="/LogIn">Регистрация</a></li>';
                echo '<li><a href="/Auth">Авторизация</a></li></ul>';
            }
            ?>


    </div>

    <div class="mobile-menu">
        <span class="close-menu" onclick="toggleMobileMenu()">×</span>
        <a href="/Catalog">Каталог</a>
        <a href="/Index">Подборки</a>
        <a href="#personal">Персональный подбор</a>
        <?php
        if (isset($_COOKIE['name']))
            echo '<a href="/User">Личный кабинет</a>';
        else {
            echo '<a href="/LogIn">Регистрация</a>';
            echo '<a href="/Auth">Авторизация</a>';
        }
        ?>
        <!-- <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Профиль</a> -->
    </div>
</header>
<script>
    function toggleMobileMenu() {
        const mobileMenu = document.querySelector('.mobile-menu');
        mobileMenu.classList.toggle('active');
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body>
@yield('maincontent') 
</body>
   
<footer class="site-footer" style="margin-top: 5%;">
    <div class="footer-container">
        <div class="footer-columns">

            <div class="footer-column">
                <h4>Для коммерческой связи</h4>
                <p>Email: info@example.com</p>
                <p>Телефон: +7 (999) 123-45-67</p>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-links">
                <a href="#">Политика конфиденциальности</a>
                <a href="#">Пользовательское соглашение</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
