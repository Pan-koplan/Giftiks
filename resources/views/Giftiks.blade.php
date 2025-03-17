@extends('maket')
@section('title')
    Подбор подарка
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('css/title_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/suggest.css') }}">
    <div class="main_container">
        <div class="mobile">
            <div class="title_objects"
                style="background-image: url({{ Storage::url('Images/red-test.png') }}); object-fit: cover;">
                <div id="title_form">
                    <h2>Персональный подбор подарков</h2>
                    <label>Введите описание человека, которому делаете подарок</label>
                    <form action="{{ route('YATAG') }}" method="POST">
                        @csrf
                        <textarea id="autoExpand" class="{{ $errors->has('descript_prompt') ? 'textarea active' : 'textarea' }}" type="text"
                            name="descript_prompt" placeholder="Обожает апельсиновый, слушает рэгги и работает сварщиком">{{ trim(old('descript_prompt')) }}</textarea>
                        @error('descript_prompt')
                            <p class="emailStatus">{{ $message }}</p>
                        @enderror
                        <button class="button" type="submit">Подобрать подарок</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="content">

            <div class="desktop">
                <img class="image"
                    style="height: 55vh; margin-top: 20px;"src="{{ Storage::url('Images/Main_page_back.png') }}" />
                <div class="title_objects">
                    <div class="title_text">
                        <div class="left_grid">
                            <div class="title-left-bar">

                                <img class="gift_icon" src="{{ Storage::url('Images/icon_line.png') }}" />

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
                                    <textarea id="autoExpand" class="{{ $errors->has('descript_prompt') ? 'textarea active' : 'textarea' }}" type="text"
                                        name="descript_prompt" placeholder="Обожает апельсиновый, слушает рэгги и работает сварщиком">{{ trim(old('descript_prompt')) }}</textarea>
                                    @error('descript_prompt')
                                        <p class="emailStatus">{{ $message }}</p>
                                    @enderror
                                    <button class="button" type="submit">Подобрать подарок</button>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap_line"></div>
            <div class="gap"></div>
            <div class="suggest_artic">
                <div class="title_center">Подборки по случаю</div>
                <div class="line-suggest-topics">
                    <div class="topic">
                        <img class="mask-group" src="{{ Storage::url('Images/mask-group0.svg') }}" />
                        <p class="title_center">Новый год</p>
                    </div>
                    <div class="topic">
                        <img class="mask-group" src="{{ Storage::url('Images/image-living-room0.svg') }}" />
                        <p class="title_center">14 Февраля</p>
                    </div>
                    <div class="topic">
                        <img class="mask-group" src="{{ Storage::url('Images/image-living-room1.svg') }}" />
                        <p class="title_center">День рождения</p>
                    </div>
                    <div class="topic">
                        <img class="mask-group" src="{{ Storage::url('Images/image-living-room2.svg') }}" />
                        <p class="title_center">Просто так</p>
                    </div>
                    <div class="topic">
                        <img class="mask-group" src="{{ Storage::url('Images/image-living-room3.svg') }}" />
                        <p class="title_center">23 февраля</p>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="gap_line"> </div>
            <div class="gap"></div>
            <div class="suggest_product">
                <div class="title_center">Популярные подарки</div>
                <div class="product_line" id="gifts-container">
                    @include('partials.gifts', ['gifts' => $gifts])


                </div>
                <div class="gap"></div>
                <button class="button" id="load-more-button">Показать ещё</button>
                <div class="gap"></div>
            </div>
        </div>
    </div>
@endsection
