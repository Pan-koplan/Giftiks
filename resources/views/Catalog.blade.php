@extends('maket')
@section('title')каталог@endsection
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
    </style>
    <h2 style="text-align: center; margin-top: 2%;">Категории подарков&#9760;</h2>
    <div class="catalog">
        <div>
            <a href="Categ.php">
                <img src="/Images/Catalog.png" alt="">
                <p>Интерьер</p>
            </a>
        </div>
        <div>
            <a href="Categ.php">
                <img src="/Images/Catalog.png" alt="">
                <p>Интерьер</p>
            </a>
        </div>
        <div>
            <a href="Categ.php">
                <img src="/Images/Catalog.png" alt="">
                <p>Интерьер</p>
            </a>
        </div>
        <div>
            <a href="Categ.php">
                <img src="/Images/Catalog.png" alt="">
                <p>Интерьер</p>
            </a>
        </div>
        <div>
            <a href="Categ.php">
                <img src="/Images/Catalog.png" alt="">
                <p>Интерьер</p>
            </a>
        </div>
        <div>
            <a href="Categ.php">
                <img src="/Images/Catalog.png" alt="">
                <p>Интерьер</p>
            </a>
        </div>
    </div>
@endsection