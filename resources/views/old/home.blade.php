@extends('layouts.index')
@section('title')
    Programming Laboratory
@endsection

@section('page-content')

    <div id="intro" class="section scrollspy">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l6" style="padding-top:9%;">
                    <img src="{{url('image/cewek.png')}}" class="col s6 m6 l6 left circle ">
                    <img src="{{url('image/cowok.png')}}"  class="col s6 m6 l6 right circle">
                </div>
                <div class="col s12 m12 l6">
                    <h1 class="text_h center header no-pad-bot">
                        Come to <br><strong>join us</strong>
                        <br>
                        <img class="center" src="{{url('image/logo.png')}}" style="width:2em">
                    </h1>
                </div>
                <div  class="col s12">
                    <h2 class="center header">
                        Open Recruitment <b>Programming Laboratory</b> Administrator 2018
                    </h2>
                    <h5 class="no-pad-top center">
                        Deadline: September 2018
                    </h5>
                    <div class="center-align">
                        <a class="waves-effect waves-light btn btn-large center-align flow-text" href="{{url('/terms')}}">
                            Yes, I'm coming!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('custom-scripts')
    <script type="javascript" href="{{ url('js/jquery-2.1.4.min.js')}}"></script>
    <script type="javascript" href="{{ url('js/materialize.js')}}"></script>
@stop
