@extends('maket')
@section('title')Подбор подарка@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/suggest.css') }}">
    <div class="main_container">
    <div class="content">
      <div class="suggest_product">
        <div class="title_center">Подобранные подарки</div>
        
        <div class="product_line">
          @if($gifts->isEmpty())
            <p>Подарков по этому запросу не найдено.</p>
          @endif
          @foreach ($gifts as $gift)
            <div class="featured-products">
                <a href={{ url('/gift/' . $gift->id) }}>
                  <?php
                      $photo_url = str($gift->id);
                      $photo= '/Images/wbshkaa_' . $photo_url . '_1.jpg';
                  ?>
                  
                  <img src="{{ Storage::url($photo) }}" class="product_image" alt={{$gift->name}}>
                  <p class="price">{{$gift->cost}}</p>
                  <div class="product-name">
                    <p class="product-name2">{{$gift->name}}</p>
                    <p class="sort-description">Stylish cafe chair</p>
                  </div>
                </a>
                <div class="cost"></div>
            </div>
          @endforeach

          
        
      </div>
      {{$gifts->links()}}
       
    </div>

  </div>
@endsection