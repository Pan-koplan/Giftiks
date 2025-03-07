@extends('maket')
@section('title')Подбор подарка@endsection
@section('content')
<div class="main_container">
    <div id="mobile">
        <div class="title_objects" style="background-image: url({{ Storage::url("Images/red-test.png") }}); object-fit: cover;">
        <div id="title_form">
                <h2>Персональный подбор подарков</h2>
                <label>Введите описание человека, которому делаете подарок</label>
                <textarea id="autoExpand" class="textarea" oninput="autoResize(this)" type="text" placeholder="Обожает апельсиновый, слушает рэгги и работает сварщиком"></textarea>
                <button>Подобрать</button>
        </div>  
        </div>
    </div> 
    <div class="main-content" id="desktop">
        <img class="image" style="height: 55vh; margin-top: 20px;"src="{{ Storage::url("Images/Main_page_back.png") }}" />
        <div class="title_objects">
            <div class="title_text">
                <div class="left_grid">
                    <div class="title-left-bar">
                        <div class="icon-line">
                        <img class="gift_icon" src="{{ Storage::url("Images/freemium0.svg") }}" />
                        <img class="gift_icon" src="{{ Storage::url("Images/gift-box-benefits-10.svg") }}" />
                        <img class="gift_icon" src="{{ Storage::url("Images/flower-bouquet0.svg") }}" />
                        <img class="gift_icon" src="{{ Storage::url("Images/gifts0.svg") }}" />
                        <img class="gift_icon" src="{{ Storage::url("Images/gifts0.svg") }}" />
                        </div>
                        <div class="title-text-large">
                        <span>
                            <span class="div-span">
                            НАЙДИТЕ
                            <br />
                            </span>
                            <span class="div-span2">ИДЕАЛЬНЫЙ</span>
                            <span class="div-span">
                            <br />
                            ПОДАРОК ЗДЕСЬ
                            </span>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="right_grid">
                    <div class="title_right_bar">
                        <div class="title_text">
                        Нужен подарок, но не знаете, какой?<br>Опишите получателя, и мы поможем!
                        </div>
                        <form action="{{ route('YATAG') }}" method="POST">
                            @csrf
                            <textarea id="autoExpand" class="textarea" type="text" name="descript_prompt" placeholder="Обожает апельсиновый, слушает рэгги и работает сварщиком"></textarea>
                            <button class="button" type="submit">Подобрать подарок</button>
                        </form>
                        
                        
                    </div>
                </div>
            </div>    
        </div>
    </div>  
    <div class="main-content">
    <div class="sugest_artic">
        <div class="title_center">Подборки по случаю</div>
        <div class="line-suggest-topics">
        <div class="topic">
            <img class="mask-group" src="{{ Storage::url("Images/mask-group0.svg") }}" />
            <p class="title_center">Новый год</p>
        </div>
        <div class="topic">
            <img class="mask-group" src="{{ Storage::url("Images/image-living-room0.svg") }}" />
            <p class="title_center">14 Февраля</p>
        </div>
        <div class="topic">
            <img class="mask-group" src="{{ Storage::url("Images/image-living-room1.svg") }}" />
            <p class="title_center">День рождения</p>
        </div>
        <div class="topic">
            <img class="mask-group" src="{{ Storage::url("Images/image-living-room2.svg") }}" />
            <p class="title_center">Просто так</p>
        </div>
        <div class="topic">
            <img class="mask-group" src="{{ Storage::url("Images/image-living-room3.svg") }}" />
            <p class="title_center">23 февраля</p>
        </div>
        </div>
    </div>
    <div class="suggest_product">
        <div class="title_center">Популярные подарки</div>

        <div class="product_line">
            <div class="featured-products">
                <img class="product_image" src="{{ Storage::url("Images/image-50.svg") }}" />
                <p class="price">2.500.000 р</p>
                <div class="product-name">
                <p class="product-name2">Syltherine</p>
                <p class="sort-description">Stylish cafe chair</p>
                </div>
                
            </div>
            <div class="featured-products">
                <img class="product_image" src="{{ Storage::url("Images/image-50.svg") }}" />
                <p class="price">2.500.000 р</p>
                <div class="product-name">
                <p class="product-name2">Syltherine</p>
                <p class="sort-description">Stylish cafe chair</p>
                </div>
                
            </div>
            <div class="featured-products">
                <img class="product_image" src="{{ Storage::url("Images/image-50.svg") }}" />
                <p class="price">2.500.000 р</p>
                <div class="product-name">
                <p class="product-name2">Syltherine</p>
                <p class="sort-description">Stylish cafe chair</p>
                </div>
                
            </div>
            <div class="featured-products">
                <img class="product_image" src="{{ Storage::url("Images/image-50.svg") }}" />
                <p class="price">2.500.000 р</p>
                <div class="product-name">
                <p class="product-name2">Syltherine</p>
                <p class="sort-description">Stylish cafe chair</p>
                </div>
                
            </div>
            <div class="featured-products">
                <img class="product_image" src="{{ Storage::url("Images/image-50.svg") }}" />
                <p class="price">2.500.000 р</p>
                <div class="product-name">
                <p class="product-name2">Syltherine</p>
                <p class="sort-description">Stylish cafe chair</p>
                </div>
                
            </div>
            <div class="featured-products">
                <img class="product_image" src="{{ Storage::url("Images/image-50.svg") }}" />
                <p class="price">2.500.000 р</p>
                <div class="product-name">
                <p class="product-name2">Syltherine</p>
                <p class="sort-description">Stylish cafe chair</p>
                </div>
                
            </div>
        </div>
        <button class="button">Еще подарки</button>
    </div>
    
    
    </div>
</div>
@endsection