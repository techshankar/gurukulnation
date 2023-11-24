@extends('common.layout')
@section('content')

@php
$packers = [];
$interior = [];
$rsa = [];
foreach($homepagebanners as $key => $val){
$packers = $homepagebanners[0];
$interior = $homepagebanners[1];
$rsa = $homepagebanners[2];
}
@endphp
<main class="index">
  <!-- Banner Start -->
  <section class="banner_area">
    <div class="slick-carousel">
      @foreach($banners as $val)
      <div>
        <div class="slide-content">
          <img src="{{$val->banner}}" alt="">
        </div>
      </div>
      @endforeach
      <!-- <div>
        <div class="slide-content">
          <img src="{{URL::to('public/assets/images/banner_2.jpeg')}}" alt="">
        </div>
      </div>
      <div>
        <div class="slide-content">
          <img src="{{URL::to('public/assets/images/banner_3.jpeg')}}" alt="">
        </div>
      </div> -->
    </div>
  </section>
  <!-- Banner Ends -->
  <section class="our_services">
    <span>Our Services</span>
    <ul>
      <li>
        <!-- comment a href  -->
        <a href="{{route('packers-n-movers')}}">
          <img src="{{URL::to('public/assets/images/service_1.png')}}" alt="">
          <span>Packers & Movers</span>
        </a>
      </li>
      <li>
        <img src="{{URL::to('public/assets/images/service_2.png')}}" alt="">
        <span>Interior Designing</span>
      </li>
      <li>
        <a href="{{route('road-side-assist')}}">
          <img src="{{URL::to('public/assets/images/service_3.png')}}" alt="">
          <span>Road Side Assistance</span>
        </a>
      </li>
      <li>
        <a href="{{route('home-service')}}">
          <img src="{{URL::to('public/assets/images/service_4.png')}}" alt="">
          <span>Home Services</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- Packers Start -->
  <section class="packers">
    <div class="heading">Packers & Movers</div>
    <p>Movers, Relocation, Transport and packers</p>
    <ul>
      <li>
        @if($packers->image1 != '')
        <img src="{{$packers->image1}}" alt="">
        @else
        <img src="{{URL::to('public/assets/images/packers_1.jpeg')}}" alt="">
        @endif
      </li>
      <li>
        @if($packers->image2 != '')
        <img src="{{$packers->image2}}" alt="">
        @else
        <img src="{{URL::to('public/assets/images/packers_2.jpeg')}}" alt="">
        @endif
      </li>
      <li>
        @if($packers->image3 != '')
        <img src="{{$packers->image3}}" alt="">
        @else
        <img src="{{URL::to('public/assets/images/packers_3.jpeg')}}" alt="">
        @endif
      </li>
      <li>
        @if($packers->image4 != '')
        <img src="{{$packers->image4}}" alt="">
        @else
        <img src="{{URL::to('public/assets/images/packers_4.jpeg')}}" alt="">
        @endif
      </li>
    </ul>
  </section>
  <!-- Packers Ends -->
  <!-- Interior Start -->
  <section class="packers interior">
    <div class="heading">Interior Designing</div>
    <p>Pocket-Friendly interior designers</p>
    <ul>
      <li>
        @if($interior->image1 != '')
        <img src="{{$interior->image1}}" alt="">
        @else
        <img src="{{URL::to('public/assets/images/interior_1.jpeg')}}" alt="">
        @endif
      </li>
      <li>
        @if($interior->image2 != '')
        <img src="{{$interior->image2}}" alt="">
        @else
        <img src="{{URL::to('public/assets/images/interior_2.jpeg')}}" alt="">
        @endif
      </li>
      <li>
        @if($interior->image3 != '')
        <img src="{{$interior->image3}}" alt="">
        @else
        <img src="{{URL::to('public/assets/images/interior_3.jpeg')}}" alt="">
        @endif
      </li>
      <li>
        @if($interior->image4 != '')
        <img src="{{$interior->image4}}" alt="">
        @else
        <img src="{{URL::to('public/assets/images/interior_4.jpeg')}}" alt="">
        @endif
      </li>
    </ul>
  </section>
  <!-- Interior Ends -->
  <!-- Road Side Start -->
  <section class="packers road_side">
    <div class="heading">Road Side Assistance</div>
    <p>Emergency Roadside Assistance Service <br /> ( 24/7 Roadside Assistance ) </p>
    <ul>
      <li>
        @if($rsa->image1 != '')
        <img src="{{$rsa->image1}}" alt="">
        @else
        <img src="{{URL::to('public/assets/images/road_side_1.jpeg')}}" alt="">
        @endif
      </li>
      <li>
        @if($rsa->image2 != '')
        <img src="{{$rsa->image2}}" alt="">
        @else
        <img src="{{URL::to('public/assets/images/road_side_2.jpeg')}}" alt="">
        @endif
      </li>
      <li>
        @if($rsa->image3 != '')
        <img src="{{$rsa->image3}}" alt="">
        @else
        <img src="{{URL::to('public/assets/images/road_side_3.jpeg')}}" alt="">
        @endif
      </li>
      <li>
        @if($rsa->image4 != '')
        <img src="{{$rsa->image4}}" alt="">
        @else
        <img src="{{URL::to('public/assets/images/road_side_4.jpeg')}}" alt="">
        @endif
      </li>
    </ul>
  </section>
  <!-- Road Side Ends -->
</main>
<!-- Scripts Ends -->
@endsection