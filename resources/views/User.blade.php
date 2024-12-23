@extends('maket')
@section('title')категория@endsection
@section('maincontent')
    <style>
        .lent {
            display: grid;

            margin-left: 5%;
            margin-right: 5%;
        }

        .lent-items {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(6);
            margin-top: 5%;
            margin-bottom: 5%;
            background-color: pink;
        }

        @media (max-width: 600px) {
            .lent-items {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                grid-template-rows: repeat(6);
                margin-top: 5%;
                background-color: pink;
            }
        }

        .card {
            margin-top: 5%;
            margin-inline: 5%;
            background-color: white;
        }

        .cost {
            margin: 5%;
        }

        .name {
            text-align: center;
        }

        .descript {
            margin: 5%;
            font-style: oblique;
            font-size: medium;
        }

        .tags {
            margin: 5%;
            margin-top: 10%;
            font-style: oblique;
            font-size: medium;
        }
    </style>
    <h2 style="text-align: center; margin-top: 2%;">Избранное <?= $_COOKIE['name'] ?></h2>
    <div class="lent">
        <div class="lent-items">
            <div class="card">
                <a href="/Product.php">
                    <img src="/Images/chair.jpg" alt="">
                    <h3 class="name">Стул</h3>
                </a>
                <div class="cost">5 рублей</div>
            </div>
            <div class="card">
                <a href="/Product.php">
                    <img src="/Images/chair.jpg" alt="">
                    <h3 class="name">Стул</h3>
                </a>
                <div class="cost">5 рублей</div>
            </div>
            <div class="card">
                <a href="/Product.php">
                    <img src="/Images/chair.jpg" alt="">
                    <h3 class="name">Стул</h3>
                </a>
                <div class="cost">5 рублей</div>
            </div>
            <div class="card">
                <a href="/Product.php">
                    <img src="/Images/chair.jpg" alt="">
                    <h3 class="name">Стул</h3>
                </a>
                <div class="cost">5 рублей</div>
            </div>
            <div class="card">
                <a href="/Product.php">
                    <img src="/Images/chair.jpg" alt="">
                    <h3 class="name">Стул</h3>
                </a>
                <div class="cost">5 рублей</div>
            </div>
        </div>
    </div>
@endsection