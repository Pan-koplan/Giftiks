@extends('maket')
@section('title')Подбор подарка@endsection
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
    {{-- <div class="main-page">
        <div id="descript-promt">
            <form method="post" action={{ route("db_out") }}>
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
    </div>   --}}
    <div class="lent">
            <div class="lent-items">
                @if($gifts->isEmpty())
                    <p>Подарков по этому запросу не найдено.</p>
                @endif
                @foreach ($gifts as $gift)
                    <div class="card">
                        <a href={{ url('/gift/' . $gift->id) }}>
                            <?php
                                $photo_url = str($gift->id);
                                $photo= '/Images/wbshkaa_' . $photo_url . '_1.jpg';
                            ?>
                            
                            <img src="{{ Storage::url($photo) }}" alt={{$gift->name}}>
                            <h3 class="name">{{$gift->name}}</h3>
                        </a>
                        <div class="cost">{{$gift->cost}}</div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection