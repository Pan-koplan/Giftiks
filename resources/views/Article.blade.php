@extends('maket')
@section('title')категория@endsection
@section('maincontent')
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .catalog {
            display: grid;
            color: #4fc3f7;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: repeat(3);
            text-align: center;
        }

        .catalog>div {
            margin-top: 10%;
        }

        .catalog>div>img {
            width: 60%;
            margin-bottom: 2%;
            margin-top: 10%;
        }

        @media (max-width: 600px) {
            .catalog {
                display: grid;
                color: #4fc3f7;
                grid-template-columns: 1fr;
                grid-template-rows: repeat(9);
                text-align: center;
            }

            .catalog>div>img {
                width: 100%;
                margin-bottom: 1%;
            }
        }

        .card-body>img {
            position: absolute;
            z-index: 0;
        }

        .card-body>p {
            position: absolute;
            z-index: 1;
        }

        .reader>div {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(1);
        }

        .col-12 {
            grid-column: 4/11;
        }

        .col {
            grid-column: 2/4;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php require_once "Block/Header.php" ?>
    <h2 style="text-align: center; margin-top: 2%;">Что подарить на новый год?&#9760;</h2>

    <div class="reader">
        <div class="row">
            <div class="col">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Универсальный хаб Ugreen USB-C Adapter</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Универсальный хаб Ugreen USB-C Adapter</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Универсальный хаб Ugreen USB-C Adapter</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Универсальный хаб Ugreen USB-C Adapter</a>
                </div>
            </div>
            <div class="col-12">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                    <h4 id="list-item-1">Универсальный хаб Ugreen USB-C Adapter</h4>
                    <img src="/Images/hub.jpg" alt="">
                    <p>В одном товаре — подборка сразу из 13 разветвителей, которые пригодятся владельцам ноутбуков и планшетов с USB-C. Список портов и цена зависят от конкретной модели: USB-A, USB-C и HDMI есть у всех, тогда как набор дополнительных разъёмов включает Ethernet, VGA и слоты под карточки SD и microSD.</p>
                    <a href="Product.php"><button>купить</button></a>

                    <h4 id="list-item-2">Универсальный хаб Ugreen USB-C Adapter</h4>
                    <img src="/Images/hub.jpg" alt="">
                    <p>В одном товаре — подборка сразу из 13 разветвителей, которые пригодятся владельцам ноутбуков и планшетов с USB-C. Список портов и цена зависят от конкретной модели: USB-A, USB-C и HDMI есть у всех, тогда как набор дополнительных разъёмов включает Ethernet, VGA и слоты под карточки SD и microSD.</p>
                    <button>купить</button>

                    <h4 id="list-item-3">Универсальный хаб Ugreen USB-C Adapter</h4>
                    <img src="/Images/hub.jpg" alt="">
                    <p>В одном товаре — подборка сразу из 13 разветвителей, которые пригодятся владельцам ноутбуков и планшетов с USB-C. Список портов и цена зависят от конкретной модели: USB-A, USB-C и HDMI есть у всех, тогда как набор дополнительных разъёмов включает Ethernet, VGA и слоты под карточки SD и microSD.</p>
                    <button>купить</button>

                    <h4 id="list-item-4">Универсальный хаб Ugreen USB-C Adapter</h4>
                    <img src="/Images/hub.jpg" alt="">
                    <p>В одном товаре — подборка сразу из 13 разветвителей, которые пригодятся владельцам ноутбуков и планшетов с USB-C. Список портов и цена зависят от конкретной модели: USB-A, USB-C и HDMI есть у всех, тогда как набор дополнительных разъёмов включает Ethernet, VGA и слоты под карточки SD и microSD.</p>
                    <button>купить</button>
                </div>
            </div>
        </div>

    </div>
@endsection