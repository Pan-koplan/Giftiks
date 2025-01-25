@extends('maket')
@section('title')Подбор подарка@endsection
@section('maincontent')
    <div class="main-page">
        <div id="descript-promt">
            <form method="post" action={{ route("YATAG") }}>
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Опишите человека, которому выбираете подарок</label>
                    <textarea class="form-control" style="resize: none;" id="descript_prompt" rows="1" name="descript_prompt" placeholder="Место работы, увлечения, вкусы и все что придет в голову о нем"></textarea>
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
                <button class="btn btn-secondary w-30 py-10" type="submit">Подобрать подарок</button>
            </form>
        </div>
        <img src="{{ asset('storage/Images/cat.png') }}" alt="котик колдует">
    </div>  
@endsection