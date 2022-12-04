@extends('layouts.details')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="feature-banner header-text">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="{{asset('images/feature-left.jpg')}}" alt="" style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-8">
                    <div class="thumb">
                      <img src="{{asset('images/feature-right.jpg')}}" alt="" style="border-radius: 23px;">
                      <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
          <div class="game-details">
            <div class="row">
              <div class="col-lg-12">
                <h2>{{$game->title}} Details</h2>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="left-info">
                        <div class="left">
                          <h4>{{$game->title}}</h4>
                          <span>{{$game->category}}</span>
                        </div>
                        <ul>
                          <li><i class="fa fa-star"></i> {{$game->votes}}</li>
                          <li><i class="fa fa-download"></i> {{$game->downloads}}M</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="right-info">
                        <ul>
                          <li><i class="fa fa-star"></i> {{$game->votes}}</li>
                          <li><i class="fa fa-download"></i> {{$game->downloads}}M</li>
                          <li><i class="fa fa-server"></i> {{$game->capacity}}GB</li>
                          <li><i class="fa fa-gamepad"></i> {{$game->category}}</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <img src="{{asset('images/details-01.jpg')}}" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="{{asset('images/details-02.jpg')}}" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="{{asset('images/details-03.jpg')}}" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-12">
                      <p>Cyborg Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout. You can make a <a href="https://paypal.me/templatemo" target="_blank">small contribution via PayPal</a> to info [at] templatemo.com and thank you for supporting. If you want to get the PSD source files, please contact us. Lorem ipsum dolor sit consectetur es dispic dipiscingei elit, sed doers eiusmod lisum hored tempor.</p>
                    </div>
                    <div class="col-lg-12">
                      <div class="main-border-button">
                        <a href="#">Download {{$game->title}} Now!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->

          <!-- ***** Other Start ***** -->
          <div class="other-games">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Other Related</em> Games</h4>
                </div>
              </div>
              @foreach($gamesList as $item)
              <div class="col-lg-6">
                <div class="item">
                  <img src="{{asset('images/game-01.jpg')}}" alt="" class="templatemo-item">
                  <h4>{{$item->title}}</h4><span>{{$item->category}}</span>
                  <ul>
                    <li><i class="fa fa-star"></i> {{$item->votes}}</li>
                    <li><i class="fa fa-download"></i>{{$item->downloads}}</li>
                  </ul>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <!-- ***** Other End ***** -->

        </div>
      </div>
    </div>
  </div>
@endsection