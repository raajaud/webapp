@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="flex-center position-ref full-height">
                <div class="container">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="panel panel-success">
                        <div class="panel-heading">List of Game of Thrones Characters</div>
                        @if(Auth::user())
                        <!-- Table -->
                        <table class="table">
                          <tr>
                            <th>Character</th>
                            <th>Real Name</th>
                          </tr>
                          @foreach($characters as $key => $value)
                            <tr>
                            <td>{{ $key }}</td><td>{{ $value }}</td>
                            </tr>
                          @endforeach
                        </table>
                        @endif
                      </div>
                      @if(Auth::guest())
                      <a href="/login" class="btn btn-info"> You need to login to see the list 😜😜 >></a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div> --}}
<style>

h3 {
  margin: 0;
  padding: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: black;
  font-family: Times New Roman, serif;
  /* background: -webkit-linear-gradient(deeppink, yellow, deeppink, purple);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; */
  font-size: 6.5vw;
  /* text-transform: uppercase; */
}
h3:before {
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  transform-origin: bottom;
  transform: rotateX(180deg);
  line-height: 1.14em;
 background: linear-gradient(0deg, #000000 0, transparent 70%);
    -webkit-background-clip: text;
  -webkit-text-color: transparent;
  opacity: 0.3;
}
header {
  display: block;
  text-align: center;
  line-height: 1.5em;
  margin: 50px;
  font-size: 2vw;
  background: linear-gradient(deeppink, purple, yellow, purple);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  
}
</style>
<div class="wrapper">
  <h3 data-text="Coming soon...">Coming soon...</h3>
 </div>
@endsection