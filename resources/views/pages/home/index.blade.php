@extends('layouts.layout')
@section('content')
<div class="panda-container">
    <div class="home-container">
        <div class="panda-dialog" style="left: 300px;top:10px;position: absolute;">
            <h2><strong>日本語を食べません!</strong></h2>
        
        </div>
        <div class="sky">
            
            <div class="cloud-container" style="margin-left: 100px;">
                <div class="raining-cloud"><h1>N1</h1></div>
                <div class="raining-cloud"><h2>N2</h2></div>
            </div>
            <div class="cloud-container">
                <div class="raining-cloud"><h3>N3</h3></div>
                <div class="raining-cloud"><h4>N4</h4></div>
                <div class="raining-cloud"><h5>N5</h5></div>
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
            <div class="panda-stomach">
                <div class="panda-medal">
                        
                </div>
            </div>
            <div class="panda-hand">
                <div class="panda-hand__left"></div>
                <div class="panda-hand__right"></div>
            </div>
            <div class="panda-leg">
                <div class="panda-leg__left"></div>
                <div class="panda-leg__right"></div>
            </div>
            <div class="panda-coat"></div>
            {{-- <div class="neck-lace"></div> --}}
           
        </div>
        {{-- <div class="earth"></div> --}}
      </div>
</div>


@endsection