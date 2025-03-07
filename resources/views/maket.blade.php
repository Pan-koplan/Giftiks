<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vars.css') }}">

    <title>@yield('title')</title>
    </head>
    <body>
    <header>
        <div class="header">
            <div class="header-main-line">
            <div class="header-main-line-left">
                <a class="logo" href="/"><img src="{{ Storage::url('Images/head.jpg') }}" alt=""><p class="logo_name">Giftiks</p></a>
            </div>
            <nav class="header-main-line-right">
                <label class="menu__btn" for="menu__toggle">
                <span></span>
                </label>
                <ul class="navig_line">
                <li class="nav_active"><a href="/">Подбор</a></li>
                <li class="nav"><a href="/catalog">Коллекция</a></li>
                <li class="nav"><a href="/library">Подборки</a></li>
                </ul>
                <svg class="akar-icons" onclick="openModal()" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                <a href="/search">
                    <svg class="akar-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M10 2a8 8 0 0 1 5.29 13.71l4.7 4.7-1.41 1.41-4.7-4.7A8 8 0 1 1 10 2m0 2a6 6 0 1 0 0 12A6 6 0 0 0 10 4"/>
                    </svg>
                </a>
            </nav>
            </div>
            <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            
            <ul class="menu__box">
                <li><a class="menu__item" href="#">Подборки</a></li>
                <li><a class="menu__item" href="#">Коллекция</a></li>
                <li><a class="menu__item" href="#">Персональный<br>подбор</a></li>
            </ul>
            </div>
        </div>
    </header>  
    </div>


    <div>@yield('content')</div>


    <div class="modal-overlay" id="modalOverlay">
        <div class="modal">
            <span class="close-btn" onclick="closeModal()">✖</span>
            <div class="text-switcher">
                <div class="switcher-controls">
                    <h2 class="switcher-btn active" data-target="text1">Регистрация</h2>
                    <h2 class="switcher-btn" data-target="text2">Авторизация</h2>
                </div>

                <div class="text-content">
                    <div class="text-block active" id="text1">
                        <form action="{{ route("check.email") }}" method='POST' novalidate>
                            @csrf
                            <label for="name">Введите электронную почту</label>
                            <input type="text" placeholder="name" id="name" name="name">
                            <label for="email">Введите электронную почту</label>
                            <input type="email" placeholder="Abc@def.com" id="email" name="email">
                            <span id="emailStatus" style="color: red;"></span> <!-- Сообщение о статусе email -->
                            <label for="password">Введите пароль</label>
                            <input type="password" placeholder="••••••••" id="password" name="password" required>
                            <label for="password_confirmation">Подтвердите пароль</label>
                            <input type="password" placeholder="••••••••" id="password_confirmation" name="password_confirmation" required>
                            <button id="submit" type="submit">Зарегистрироваться</button>
                        </form>
                    </div>
                    <div class="text-block" id="text2">
                        <form action="{{ route("register") }}" method='POST' novalidate>
                            @csrf
                            <label for="email">Введите электронную почту</label>
                            <input type="email" placeholder="Abc@def.com" id="email" name="email">
                            <label for="password">Введите пароль</label>
                            <input type="password" placeholder="••••••••" id="password" name="password" required>
                            <button type="submit">Войти</button>
                        </form>
                    </div>
                </div>
            </div>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach    
                    </ul>
                </div>
            @endif
            
        </div>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <p class="footer-title"><strong>Giftiks.</strong></p>
            <p class="footer-contact">Коммерческая связь: <a href="mailto:giftiks@gmail.com">giftiks@gmail.com</a></p>
        </div>
        <hr class="footer-line">
        <p class="footer-copyright">2025 Giftiks. All rights reserved</p>
    </footer>
    
    <script>
    let lastScroll = 0;
    let sensitivity = 60; // Чувствительность к изменению скролла
    const header = document.querySelector("header");

    window.addEventListener("scroll", () => {
        let currentScroll = window.scrollY;
        let scrollDifference = Math.abs(currentScroll - lastScroll);

        if (currentScroll > lastScroll && scrollDifference > sensitivity) {
            header.classList.add("hidden"); // Скрыл при скролле вниз
        } else if (currentScroll < lastScroll && scrollDifference > sensitivity) {
            header.classList.remove("hidden"); // Показал при скролле вверх
        }
        // Если скролл вверх ИЛИ пользователь в самом верху страницы
        else if (currentScroll === 0) {
            header.classList.remove("hidden"); // Показываем шапку
        }

        lastScroll = currentScroll;
    });
    function openModal() {
                document.getElementById('modalOverlay').classList.add('active');
            }

    function closeModal() {
        document.getElementById('modalOverlay').classList.remove('active');
    }
    function autoResize(textarea) {
        textarea.style.height = "auto"; // Сбрасываем высоту
        textarea.style.height = textarea.scrollHeight + "px"; // Задаем новую высоту
    }
    document.querySelectorAll('.switcher-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Убираем активный класс у всех кнопок
            document.querySelectorAll('.switcher-btn').forEach(b => b.classList.remove('active'));
            
            // Добавляем активный класс текущей кнопке
            this.classList.add('active');
            
            // Скрываем все текстовые блоки
            document.querySelectorAll('.text-block').forEach(block => block.classList.remove('active'));
            
            // Показываем целевой текстовый блок
            const target = this.getAttribute('data-target');
            document.getElementById(target).classList.add('active');
        });
    });

        $(document).ready(function() {
            $('#submit').on('click', function()  {
                const email = $('#email').val();

                if (email.length > 0) {
                    $.ajax({
                        url: "http://127.0.0.1:8000/check-email",
                        type: "POST",
                        data: {
                            email: email,
                            _token: "{{ csrf_token() }}"
                        },
                        xhrFields: {
                            withCredentials: true // Разрешить передачу кук
                        },
                        crossDomain: true, // Разрешить кросс-доменные запросы
                    })
                    .done(function(response) {
                        console.log(response); // Вывод ответа в консоль для отладки
                        if (response.exists) {
                            $('#emailStatus').text('Этот email уже занят.');
                        } else {
                            $('#emailStatus').text('Этот email доступен.');
                        }
                    })
                    .fail(function(xhr) {
                        console.log(xhr.responseText); // Вывод ошибки в консоль
                        $('#emailStatus').text('Произошла ошибка при проверке email.');
                    });
                } else {
                    $('#emailStatus').text('Поле email не может быть пустым.');
                }
            });
        });
    
    </script>
</body>

</html>