@extends('bases')

@section('content')

<section class="content">
  <form method="POST" action="/spp_profil_harga_servis/{{$spp_profil_harga_servis->id}}">
    @method('PUT')
    <div>
      <div class="row">
        <div class="col card">
          <div class="form-group">
            @csrf
            <div>
              {{-- <input value="{{ $spp_profil_harga_servis -> id}}"type="hidden" id="id" name="id" > --}}
              <table>
                <tr> <td><label  for="nama">NAMA PERKHIDMATAN (BM) :</label> </td>
                  <td>
                  <input class="form-control" value="{{ $spp_profil_harga_servis -> nama}}" type="text" id="nama" name="nama" >
                  </td>
                  <tr>
                    <td><label  for="nameE">NAMA PERKHIDMATAN (BI) :</label></td>
                    <td><input class="form-control" value="{{ $spp_profil_harga_servis -> namaE}}" type="text" id="nameE" name="nameE" ></td>
                  </tr>
                  <tr>
                    <td><label  for="hargaY">KADAR HARGA :</label></td>
                    <td><input class="form-control"  type="text" value="{{ $spp_profil_harga_servis -> hargaY}}" id="hargaY" name="hargaY" > </td>
                    <td>
                      <select class="form-control"  type="text" value="{{ $spp_profil_harga_servis -> flatHarga}}" id="flatHarga" name="flatHarga" >
                        <option value="{{ $spp_profil_harga_servis -> id }}">{{ $spp_profil_harga_servis -> nama }}</option>
                        <option value="Y">Tetap</option>
                        <option value="T">Tidak Tetap</option>
                      </select>
                    </td>
                    <td><input class="form-control"  type="text" placeholder="UNIT" value="{{ $spp_profil_harga_servis -> unitHarga}}" id="unitHarga" name="unitHarga" > </td>
                  </tr> 
                  <tr>
                    <td><label  for="catatan">CATATAN :</label></td>
                    <td><input class="form-control" placeholder="{{ $spp_profil_harga_servis -> catatan}}"  type="text" value="{{ $spp_profil_harga_servis -> catatan}}" id="catatan" name="catatan" ></td>
                  </tr> 
              </table>
            </div>
            <input type="submit" value="Submit">
          </div>
        </div>
      </div>
    </div>
  </form>
</section>

@endsection

