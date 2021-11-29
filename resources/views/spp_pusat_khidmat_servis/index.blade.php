@extends('bases')

@section('content')     

<section class="content" style="padding-left: 0px; padding-top: 20px">
  <form method="POST" action="/spp_pusat_khidmat/">
    <div>
      <div class="row">
        <div class="col card">
          <div class="form-group">
            @csrf
            <div>
              <label style=" padding-right: 20px" for="name">JENIS PERKHIDMATAN (BM) :</label>
              <input class="form-control" value=""  type="text" id="name" name="name" >
              <label style=" padding-right: 20px" for="catatan">Catatan(BM) :</label>
              <input class="form-control" placeholder="catatan"  type="text" id="catatan" name="catatan" > <br>
              <label style=" padding-right: 20px" for="nameE"></label>JENIS PERKHIDMATAN (BI) :<br>
              <input class="form-control" value=""  type="text" id="nameE" name="nameE" >
              <label style=" padding-right: 20px" for="catatanE">Catatan(BI) :</label>
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

