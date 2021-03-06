@extends('master')
@section("content")

<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($products as $item)
        <div class="item {{$item['id']==10?'active':''}}" style="height: 200px">
        <a href="detail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['gallary']}}">
            <div class="carousel-caption slider-text">
              <h2>{{$item['name']}}</h2>
              <p>{{$item['description']}}</p>
            </div>
            </a>
          </div>
    
          @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
        <div class="trending-wrapper" >
          <h3>Our Products</h3>
          @foreach($products as $item)
            <div class="trening-item">
              
              <a style ="  text-decoration: none;" href="detail/{{$item['id']}}">
              <img class="trending-image" src="{{$item['gallary']}}">
              <div class="" style="">
                <h3 style="text-align: center;">{{$item['name']}}</h3>
                <h3 style="text-align: center; color: #4CAF50;margin-bottom: 25px;">{{$item['price']}}$</h3>
              </div>
            </a>
            </div>
            @endforeach
          </div>
        </div>
      
      
</div>

@endsection
