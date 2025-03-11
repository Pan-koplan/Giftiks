@extends('maket')
@section('title')
    Регистрация
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <div class="background-photo">
        <div class="main_container">
            <div class="content">
                <div class="modal">
                    <div class="text-switcher">
                        <div class="switcher-controls">
                            <h2 class="switcher-btn active" data-target="text1">Регистрация</h2>
                            <h2 class="switcher-btn" data-target="text2">Авторизация</h2>
                        </div>
                        <div class="gap_line"></div>
                        <div class="text-content">
                            <div class="text-block active" id="text1">
                                <form action="{{ route('reg') }}" method='POST' novalidate>
                                    @csrf


                                    <div class="text-field">
                                        <label class="text-field__label"for="name">Введите имя</label>
                                        <input type="text" value="{{ old('name') }}"
                                            class="{{ $errors->has('name') ? 'text-field__input_invalid' : 'text-field__input' }}"
                                            placeholder="Дмитрий" id="name" name="name">
                                        @error('name')
                                            <p class="emailStatus">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="text-field">
                                        <label class="text-field__label" for="email">Введите электронную почту</label>
                                        <input value="{{ old('email') }}"
                                            class="{{ $errors->has('email') ? 'text-field__input_invalid' : 'text-field__input' }}"
                                            type="email" placeholder="Abc@def.com" id="email" name="email">
                                        @error('email')
                                            <p class="emailStatus">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="text-field">
                                        <label class="text-field__label" for="password">Введите пароль</label>
                                        <input
                                            class="{{ $errors->has('password') ? 'text-field__input_invalid' : 'text-field__input' }}"
                                            type="password" placeholder="Пароль" id="password" name="password" required>
                                        @error('password')
                                            <p class="emailStatus">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="text-field">
                                        <label class="text-field__label" for="password_confirmation">Подтвердите
                                            пароль</label>
                                        <input
                                            class="{{ $errors->has('password') ? 'text-field__input_invalid' : 'text-field__input' }}"
                                            type="password" placeholder="Пароль" id="password_confirmation"
                                            name="password_confirmation" required>
                                        @error('password_confirmation')
                                            <p class="emailStatus">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="gap"></div>
                                    <button id="submit" type="submit">Зарегистрироваться</button>
                                </form>

                            </div>

                            <div class="text-block" id="text2">
                                <form action="{{ route('auth') }}" method='POST' novalidate>
                                    @csrf
                                    <div class="text-field">
                                        <label class="text-field__label" for="email">Введите электронную
                                            почту</label>
                                        <input value="{{ old('email') }}"
                                            class="{{ $errors->has('email') ? 'text-field__input_invalid' : 'text-field__input' }}"
                                            type="email" placeholder="Abc@def.com" id="email" name="email">
                                        @error('email')
                                            <p class="emailStatus">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="text-field">
                                        <label class="text-field__label" for="password">Введите пароль</label>
                                        <input
                                            class="{{ $errors->has('password') ? 'text-field__input_invalid' : 'text-field__input' }}"
                                            type="password" placeholder="Пароль" id="password" name="password" required>
                                        @error('password')
                                            <p class="emailStatus">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="gap"></div>
                                    <button type="submit">Войти</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
