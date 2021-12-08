@extends('bases')

@section('content')

<section class="content">
  <form method="POST" action="{{ route('spp_profil_harga_servis.update',$spp_profil_harga_servis->id) }}">
    @method('PUT')
    <div>
      <div class="row">
        <div class="col card">
          <div class="form-group">
            @csrf
            <div>
              {{-- <input value="{{ $spp_profil_harga_servis -> id}}"type="hidden" id="id" name="id" > --}}
              
              <label  for="nama">NAMA PERKHIDMATAN (BM) :  {{ $spp_profil_harga_servis -> nama}}</label>
              <input class="form-control" value="{{ $spp_profil_harga_servis -> nama}}" placeholder="" type="text" id="nama" name="nama" >
              <label  for="nameE"></label>NAMA PERKHIDMATAN (BI) :<br>
              <input class="form-control" value="{{ $spp_profil_harga_servis -> namaE}}" placeholder="{{ $spp_profil_harga_servis -> namaE}}" type="text" id="nameE" name="nameE" >
              <label  for="hargaY">HARGA :{{ $spp_profil_harga_servis -> hargaY}}</label>
              <input class="form-control" placeholder=""  type="text" value="{{ $spp_profil_harga_servis -> hargaY}}" id="hargaY" name="hargaY" > <br>
              <label  for="unitHarga">UNIT HARGA :</label>
              <input class="form-control" placeholder="{{ $spp_profil_harga_servis -> unitHarga}}"  type="text" value="{{ $spp_profil_harga_servis -> unitHarga}}" id="unitHarga" name="unitHarga" > <br>
            </div>
            <input type="submit" value="Submit"><br>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>

@endsection

