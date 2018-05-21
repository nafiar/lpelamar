@extends('layouts.index')
@section('title')
    Terms and Conditions
@endsection

@section('page-content')

    <div class="fluid-container">
        <div id="terms" class="col s12">
            <div class="section white">
                <div class="row container">
                    <h2 class="header"><strong>Terms and Conditions</strong></h2>
                    <p class="flow-text">By applying to Open Recruitment Programming Laboratory 2017, you've agreed for terms below:</p>
                    <div class="row">
                        <div class="col s12 ">
                            <div class="card red darken-4">
                                <div class="card-content white-text">
                                    <span class="card-title"><strong>Requirements</strong></span>
                                    <div class="divider"></div>
                                        <ol>
                                            <li class="flow-text">
                                                Believe in God
                                            </li>
                                        <li class="flow-text">
                                                Member of TC2016
                                            </li>
                                        <li class="flow-text">
                                                Not being an administrator or assistant of any laboratory.
                                            </li>
                                        <li class="flow-text">
                                            <i class="material-icons">warning</i>
                                            Attach a resume / CV including :
                                            <ul>
                                                <li>a. Description of yourself creatively  </li>
                                                <li>b. Your motivations to become LP's administrator</li>
                                                <li>c.  A photo of yourself along with one (or more) LP's administrator</li>
                                            </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 ">
                            <div class="card light-blue darken-4">
                                <div class="card-content white-text">
                                    <span class="card-title text_h2">
                                        <strong>
                                            Terms & Conditions
                                        </strong>
                                    </span>
                                    <div class="divider"></div>
                                    <ol class="flow-text">
                                        By clicking the "Accept" button below, you have fulfilled all requirements above and agreed to:

                                        <li class="flow-text">
                                                Committed to become an Administrator Laboratory
                                            </li>
                                        <li class="flow-text">
                                                Willing to attend the entire process until the final.
                                            </li>
                                        <li class="flow-text">
                                                All decisions in this recruitment are final, and cannot be sued.
                                            </li>
                                    </ol>
                                </div>
                            </div>
                        </div>


                        <div class="col s12" style="color:black">
                            <a class="waves-effect waves-light btn-large right" href="{{ url('/regis') }}">
                                Accept
                            </a>
                        </div>
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
