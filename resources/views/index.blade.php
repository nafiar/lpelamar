@extends('master')

@section('title','Welcome')

@section('css')
  <style type="text/css">
    .icon-block .material-icons {
      font-size: inherit;
    }

    #logo-tengah {
      height:7.5em;
    }

    #tombol-daftar {
      margin: 15em 1em;
    }

    ol li {
      text-align: left;
    }
  </style>
@endsection

@section('content')
  <div class="parallax-container">
    <div class="container">
      <br><br>
      <h3 class="header center white-text">
        <img src="{{url('image/logo.png')}}" id="logo-tengah">
      </h3>
    </div>
    <div class="parallax">
      <img src="{{url('image/1.jpg')}}">
    </div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text">
              <i class="material-icons">flash_on</i>
            </h2>
            <h5 class="center">Challenge</h5>
            <p class="center light">
              Apakah kamu suka tantangan? Apakah kamu suka bereksperimen? Ingin mencoba hal baru?
            </p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text">
              <i class="material-icons">group</i>
            </h2>
            <h5 class="center">Teamwork</h5>
            <p class="center light">
              Kamu suka berkomunikasi? Kamu ingin punya banyak koneksi? Ingin menambah kenalan?
            </p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text">
              <i class="material-icons">settings</i>
            </h2>
            <h5 class="center">Technical Skills</h5>
            <p class="center light">
              Kamu suka berkreasi? Kamu punya banyak waktu luang? Ingin menambah pengalaman?
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <h3></h3>
          <h5 class="center">You've Come to the Right Place!</h5>
          <p class="center light">
            Laboratorium Pemrograman adalah tempat di mana ide, mimpi, harapan, dan cinta berkumpul. Kami Administrator LP selalu mencari penerus yang mau untuk meneruskan jejak petualangan kami di Kampus Pahlawan ini. Siapkah kamu untuk menjadi tombak penerus kebanggan Informatika ITS?
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="parallax-container">
    <div class="parallax">
      <img src="{{url('image/2.jpg')}}">
    </div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3></h3>
          <h4>Terms and Condition</h4>
          <p class="left-align light">
            <ol>
              <li>Beriman kepada Tuhan Yang Maha Esa</li>
              <li>Mahasiswa Aktif Informatika angkatan 2016 atau 2017</li>
              <li>Tidak mendaftar sebagai calon admin lab lain</li>
              <li>Memiliki kemauan belajar</li>
              <li>Berkomitmen menjadi Administrator Laboratorium Pemrograman</li>
              <li>Bersedia mengikuti proses perekrutan hingga selesai</li>
            </ol>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="parallax-container">
    <div class="container">
      <div class="center">
        <a href="{{url('/apply')}}" id="tombol-daftar" class="btn btn-large waves-effect waves-light blue lighten-1">Daftar Sekarang</a>
      </div>
    </div>
    <div class="parallax">
      <img src="{{url('image/3.jpg')}}">
    </div>
  </div>
@endsection

@section('js')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.parallax').parallax();
    });
  </script>
@endsection