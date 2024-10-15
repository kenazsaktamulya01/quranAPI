@extends('index')

@section('content')
    <div class="py-2" id="home" style="margin-top: 140px; margin-bottom:20px;">
        <div class="bg-danger">
            <div class="text-center font-weight-bold">
                <h1 class="about text-center fs-2" id="about" style="color: white;">Daftar Surah</h1>
            </div>
        </div>
    </div>

    <table class="table table-striped" style="width: 1300px; margin-left: -100px;">
        <thead style="background-color: red; color:white;">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Surah</th>
            <th scope="col">Nama Latin</th>
            <th scope="col">Arti</th>
            <th scope="col">Jumlah Ayat</th>
            <th scope="col">Tempat Turun</th>
            <th scope="col">Tipe</th>
            <th scope="col">Audio</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($response as $quran)
              
          <tr>
            <th scope="row">{{ $quran->number_of_surah }}</th>
            <td> {{ $quran->name_translations->ar }}<br>
                <a href="/quran/{{$quran->number_of_surah}}">
                    <button class="btn btn-danger btn-sm btn-menu">Lihat Surah</button>
                </a>
            </td>
            <td>{{ $quran->name }}</td>
            <td>{{ $quran->name_translations->id }}</td>
            <td>{{  $quran->number_of_ayah }}</td>
            <td>{{  $quran->place }}</td>
            <td>{{  $quran->type }}</td>
            <td>
              <figure>
                <figcaption>Dengarkan Murotal</figcaption>
                <audio src="{{ $quran->recitation }}" controls></audio>
            </figure>
        </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection