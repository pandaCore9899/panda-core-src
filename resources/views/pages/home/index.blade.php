@extends('layouts.layout',['no_frame' => true])
@section('content')
<div class="home-container">
  <div class="sky">
      <div class="sun">
          <div class="sun-glass">
              <div class="sun-glass__left"></div>
              <div class="sun-glass__right"></div>
          </div>
      </div>
      <div class="cloud-container" style="margin-left: 100px;">
          <div class="raining-cloud" ></div>
          <div class="raining-cloud"></div>
      </div>
      <div class="cloud-container">
          <div class="raining-cloud"></div>
          <div class="raining-cloud"></div>
          <div class="raining-cloud"></div>
      </div>
      <div class="cloud-container" style="margin-left: 400px;">
          <div class="raining-cloud" ></div>
          <div class="raining-cloud"></div>
      </div>
  </div>
  <div class="panda-wrapper">
      <div class="panda-hair"></div>
      <div class="panda-head"></div>
      <div class="panda-eye">
          <div class="panda-eye__left"></div>
          <div class="panda-eye__right"></div>
      </div>
      <div class="panda-nose"></div>
      <div class="panda-mouth"></div>
      <div class="panda-stomach"></div>
      <div class="panda-hand">
          <div class="panda-hand__left"></div>
          <div class="panda-hand__right"></div>
      </div>
      <div class="panda-leg">
          <div class="panda-leg__left"></div>
          <div class="panda-leg__right"></div>
      </div>
      <div class="neck-lace"></div>
     
  </div>
  <div class="earth"></div>
</div>

@endsection