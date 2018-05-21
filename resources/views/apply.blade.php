@extends('master')

@section('title','Register')

@section('content')
  <div class="container">
    <h2 class="header">
      Application Form
    </h2>
    <div class="row">
      <form class="col s12" action="{{url('apply')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        @if ( $errors->any() )
          <div class="card-panel red darken-2">
            <ul>
              @foreach ($errors->all() as $e)
                <li>
                  {{ $e }}
                </li>
              @endforeach
            </ul>
          </div>
        @endif
        @if ( session('status') )
          <div class="card-panel teal">
            <span class="white-text">
              {{ session('status') }}
            </span>
          </div>
        @endif
        <div class="row">
          <div class="input-field col s12">
            <input type="number" name="nrp" class="validate" placeholder="NRP" required pattern="05111[6-7]4000[0-9]{4}" min="05111640000001" max="05111740009999" value="{{old('nrp')}}">
            <label>NRP</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="full_name" class="validate" placeholder="Full Name" required value="{{old('full_name')}}">
            <label>Full Name</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="nick_name" class="validate" placeholder="Nickname" required value="{{old('nick_name')}}">
            <label>Nickname</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <input type="email" name="email" class="validate" placeholder="Email" required value="{{old('email')}}">
            <label>Email</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="phone_number" class="validate" placeholder="Phone Number" required pattern="[0-9]{10,13}" value="{{old('phone_number')}}">
            <label>Phone Number</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="id_fb" class="validate" placeholder="ID Facebook" value="{{old('id_fb')}}">
            <label>ID Facebook</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="id_line" class="validate" placeholder="ID Line" value="{{old('id_line')}}">
            <label>ID Line</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field file-field col s12">
            <p>
              <strong>
                Upload your CV as PDF (Maximum 5 MB)
              </strong>
            </p>
            <div class="btn btn-large waves-light waves-effect">
              <span>CV & Essay</span>
              <input type="file" name="cv_essay" required multiple value="{{old('cv_essay')}}">
            </div>
            <div class="file-path-wrapper">
              <input type="text" name="file_path" class="file-path validate" placeholder="Upload Here">
            </div>
          </div>
        </div>

        <div class="row">
          <p class="col s12">
            <label>
              <input type="checkbox" name="agree" required>
              <span>
                I have read and agree with the <a href="{{url('terms')}}">Terms and Conditions</a> 
              </span>
            </label>
          </p>
        </div>

        <div class="row">
          <button class="btn btn-large waves-light waves-effect red right darken-1" type="submit">
            Apply
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection