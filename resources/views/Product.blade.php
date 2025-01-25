@extends('maket')
@section('title') <?= $gift->name?> @endsection
@section('maincontent')
    <style>
        .main_conteiner {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            margin-top: 5%;
            margin-bottom: 5%;
        }

        .main_conteiner>div {
            display: grid;
            grid-column: 2/12;
            grid-template-columns: 1fr 1fr;
            grid-auto-flow: column;
        }

        .left {
            grid-column: 1;
        }

        .right {
            display: flex;
            flex-direction: column;
            margin-left: 5%;
            grid-column: 2;
        }

        .right>.but {
            display: flex;
            flex-direction: row;
            margin-top: auto;
            margin-bottom: 5%;
            margin-left: 5%;
            grid-column: 2;
        }

        .carousel-inner {
            width: 100%;
            height: width;
        }

        @media (max-width: 600px) {
            .main_conteiner>div {
                display: grid;
                grid-column: 2/12;
                grid-auto-flow: row;
                background-color: pink;
                grid-template-columns: 1fr;
            }

            .left {
                display: block;
                grid-column: 1;
            }

            .right {
                display: block;
                grid-column: 1;
            }
        }

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
            background-color: pink;
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

        .offcanvas {
            display: none;
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
    </style>
</head>

<body>

    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="<?= $gift->link ?>" role="button" aria-controls="offcanvasExample">
        Link with href
    </a>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        Button with data-bs-target
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
            </div>
        </div>
    </div>

    <div class="main_conteiner">
        <div class="profile_product">
            <div class="left">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php foreach ($photos as $index => $photo): ?>
                            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                <img src='{{Storage::url($photo)}}' class="d-block w-100" alt="<?= $gift->name?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="right">
                <h1><?= $gift->name ?></h1>
                <p> <?= $gift->description ?></p>
                <div class="but">
                    <button type="button" class="btn btn-outline-primary">OZON</button>
                    <button type="button" class="btn btn-outline-primary">Share</button>
                    <button type="button" class="btn btn-outline-primary">&hearts; Like</button>
                </div>
            </div>

        </div>
    </div>
    <h2 style="text-align: center;">Похожие&#9760; товары</h2>
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