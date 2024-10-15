@extends('index')

@section('content')
    <div class="fs-2" id="home" style="margin-top: 140px; margin-bottom:20;">
        <div class="dark">
            <div class="text-center">
                <h2 class="about text-center" id="about">{{ $response->name_translations->ar }}</h2>
            </div>
        </div>

    <center>
        <br>
        <div class="card text-center" style="width: 50%">
            <div class="card-header">
                <strong>{{ $response->name }}</strong>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <table style="text-align: left; margin:20px;">
                    <tr>
                        <td>Arti</td>
                        <td>:</td>
                        <td>{{ $response->name_translations->id }}</td>
                    </tr>

                    <tr>
                        <td>Nomor Surah</td>
                        <td>:</td>
                        <td>{{ $response->number_of_surah }}</td>
                    </tr>
                    <tr>
                        <td>Banyak Ayat</td>
                        <td>:</td>
                        <td>{{ $response->number_of_ayah }}</td>
                    </tr>

                    <tr>
                        <td>Tipe Surat</td>
                        <td>:</td>
                        <td>{{ $response->type }}</td>
                    </tr>
                </p>
                <a href="/quran/" class="btn btn-danger">Home</a>
            </table>

            </div>
            <div class="card-footer text-muted">
                <strong style="margin-bottom: 50px;"><b><u></u></b>Dengarkan Murottal</strong>
                <figure>
                    <br>
                    @foreach ($response->recitations as $audio)
                        
                    <p>Mishari Rashid</p>
                    <audio src="{{ $audio->audio_url }}" controls></audio>
                    
                </figure>
                @endforeach
            </div>
        </div>
    </center>

    <br>
    
    <table class="table table-striped" style="width: 1300px; margin-left: -100px">
        <thead style="background-color: red; color:white;">
            <tr>
                <td colspan="4" style="background-color: red; color:white; text-align:center;">
                    <strong>Ayat</strong>
                </td>
            </tr>
          <tr>
            <th scope="col">Ayat</th>
            <th scope="col">Lafadz</th>
            <th scope="col">Bahasa Inggris</th>
            <th scope="col">Bahasa Indonesia</th>
          </tr>
        </thead>
        <tbody>
           
            <tr>
                @foreach ($response->verses as $ayat)
                <td>{{ $ayat->number }}</td>
                <td>{{ $ayat->text }}</td>
                <td>{{ $ayat->translation_en }}</td>
                <td>{{ $ayat->translation_id }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>

      <div class="card text-center">
        <div class="card-header">
            <strong>Tafsir Al-Fatihah</strong>           
        </div>
        <div class="card-body">
            <p class="card-text">
                <table style="text-align: left; margin:20px;">
                    <tr>
                        <td>Penerbit Tafsir</td>
                        <td>:</td>
                        <td>Kemenag</td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td>Aplikasi Quran Kementrian Agama Republik Indonesia</td>
                    </tr>
                </table>
            </p>
        </div>
        <div class="card-footer"></div>
        <div class="card-body">
            @foreach ($response->tafsir->id->kemenag->text as $key => $ayat)
            <strong>Ayat : {{ $key }}</strong>
            <br>
            <p style="text-align: justify;">Tafsir : {{ $ayat }}</p>
            <hr>
            <hr>
            @endforeach
        </div>
        <a href="/quran/" class="btn btn-danger">Go Back</a>
      </div>
</div>
<hr style="background-color: red;">
@endsection
