@extends('master')

@section('title','Admin Dashboard')

@section('content')
  <div class="container">
    <h3>Daftar Pelamar</h3>

    <div class="row">
      @if ($pelamars->count())
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Nick Name</th>
              <th>Full Name</th>
              <th>CV & Essay</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pelamars as $pelamar)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pelamar->nick_name}}</td>
                <td>{{$pelamar->full_name}}</td>
                <td>
                  <a href="{{$pelamar->cv_essay_path}}" class="btn btn-large waves-light waves-effect teal">CV Essay</a>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot></tfoot>
        </table>
      @else
        Belum ada Pelamar
      @endif
    </div>

    <div class="row">
      <form method="POST" action="{{url('logout')}}">
        {{csrf_field()}}
        <button type="submit" class="btn btn-waves right red darken-1">Logout</button>
      </form>
    </div>
  </div>
@endsection