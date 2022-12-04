@extends('layouts.profile')

@section('profile')
<div class="row">
    <div class="col-lg-12">
      <div class="main-profile ">
        <div class="row">
          <div class="col-lg-4">
            <img src="{{asset('images/profile.jpg')}}" alt="" style="border-radius: 23px;">
          </div>
          <div class="col-lg-4 align-self-center">
            <div class="main-info header-text">
              <span>Offline</span>
              <h4>Adam smit</h4>
              <p>You Haven't Gone Live yet. Go Live By Touching The Button Below.</p>
              <div class="main-border-button">
                <a href="#">Start Live Stream</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 align-self-center">
            <ul>
              <li>Games Downloaded <span>3</span></li>
              <li>Friends Online <span>16</span></li>
              <li>Live Streams <span>None</span></li>
              <li>Clips <span>29</span></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="clips">
              <div class="row">
                <div class="col-lg-12">
                  <div class="heading-section">
                    <h4><em>Your Most Popular</em> Clips</h4>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <div class="thumb">
                      <img src="{{asset('images/clip-01.jpg')}}" alt="" style="border-radius: 23px;">
                      <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="down-content">
                      <h4>First Clip</h4>
                      <span><i class="fa fa-eye"></i> 250</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <div class="thumb">
                      <img src="{{asset('images/clip-02.jpg')}}" alt="" style="border-radius: 23px;">
                      <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="down-content">
                      <h4>Second Clip</h4>
                      <span><i class="fa fa-eye"></i> 183</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <div class="thumb">
                      <img src="{{asset('images/clip-03.jpg')}}" alt="" style="border-radius: 23px;">
                      <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="down-content">
                      <h4>Third Clip</h4>
                      <span><i class="fa fa-eye"></i> 141</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <div class="thumb">
                      <img src="{{asset('images/clip-04.jpg')}}" alt="" style="border-radius: 23px;">
                      <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="down-content">
                      <h4>Fourth Clip</h4>
                      <span><i class="fa fa-eye"></i> 91</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="#">Load More Clips</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection