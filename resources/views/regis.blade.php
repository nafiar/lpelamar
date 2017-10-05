@extends('layouts.index')
@section('title')
    Registration Form
@endsection

@section('page-content')

    <div class="container">
        <div id="forms" class="col s12">
            <div class='container'>
                <div class="row">
                    <form class="col s12 " action="{{url('/saveregis')}}" method="post" enctype="multipart/form-data">
                        <h2 class='header'> Application Form </h2>
                        <p><strong>Programming Laboratory</strong> New Administrators Application </p>
                        @if ( $errors->count() > 0 )
                            <div class="alert alert-danger">
                                @foreach ( $errors->all() as $error )
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                        @endif
                        @if ( Session::get('message') )
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="nrp" type="number" class="validate">
                                <label>Student ID Number / NRP </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Nama anda.. " name="firstname" type="text" class="validate">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate" name='lastname' >
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="email" type="email" class="validate">
                                <label>Email Address</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="number" name='contact' class="validate" >
                                <label>Phone Number</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="linkfb" type="text" name='linkfb' class="validate">
                                <label>Your facebook profile links</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <p>
                                    <strong>
                                    The allowed attachment is only with .pdf extension and maximum size of 5MB.
                                    </strong>
                                </p>
                                <div class="btn">
                                    <span>File CV</span>
                                    <input type="file"   name="filecv" required>
                                </div>
                                <div class="file-path-wrapper">
                                    <input type="text"  class="file-path validate" placeholder="Upload your CV here" required>
                                </div>
                            </div>
                        </div>
                        {{csrf_field()}}
                        {{method_field('POST')}}
                        <button class="btn btn-large waves-light red right darken-1" type="submit" name="action">Apply
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('custom-scripts')
    <script type="javascript" href="{{ url('js/jquery-2.1.4.min.js')}}"></script>
    <script type="javascript" href="{{ url('js/materialize.js')}}"></script>
@stop
