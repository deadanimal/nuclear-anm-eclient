@extends('bases')

@section('content')     
<section class="content" style="">
  <form method="POST" action="/spp_pusat_khidmat/{{ $spp_pusat_khidmat_servis -> id}}">
    @method('PUT')
    <div>
      <div class="row">
        <div class="col card">
          <div class="form-group">
            @csrf
            <div>
              <label  for="name">JENIS PERKHIDMATAN (BM) :</label>
              <input class="form-control" value=""  type="text" id="name" name="name" >
              <label  for="catatan">Catatan(BM) :</label>
              <input class="form-control" placeholder="catatan"  type="text" id="catatan" name="catatan" > <br>
              <label  for="nameE"></label>JENIS PERKHIDMATAN (BI) :<br>
              <input class="form-control" value=""  type="text" id="nameE" name="nameE" >
              <label  for="catatanE">Catatan(BI) :</label>
              <input class="form-control" placeholder="catatan"  type="text" id="catatanE" name="catatanE" > <br>
            </div>
            <input type="submit" value="Submit"><br>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>

@endsection

