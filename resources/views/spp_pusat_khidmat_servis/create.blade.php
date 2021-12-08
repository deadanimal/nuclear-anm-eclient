@extends('bases')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')     

<section class="content" style="padding-left: 0px; padding-top: 20px">
  <form method="POST" action="/spp_pusat_khidmat_servis/" id="new_servis_pusat_khidmat" >
    <div>
      <div class="row">
        <div class="col card">
          <div class="form-group">
            @csrf
            <div>
              <label for="pusat_perkhidmatan">Pusat Perkhimatan:</label>
              <select name="pusat_perkhidmatan" id="pusat_perkhidmatan" >
                <option value=""> Sila pilih:</option>
                @foreach  ($spp_pusat_khidmat_servis as $mo)
                <option value="{{ $mo-> id }}">{{ $mo -> kumpulan  }} - {{ $mo -> nama  }}</option>
                @endforeach
              </select>
              <br>
              <label for="kategori_servis">Jenis Perkhimatan:</label>
              <select name="kategori_servis" id="kategori_servis"></select>
              <br>
              {{-- <button type="button" id="new_spp">Add spp_pusat_khidmat_servis</button> --}}


              <input class="form-control" value="pusat_perkhidmatan"  type="text" id="idPKhidmat" name="idPKhidmat" >
              <input class="form-control" value="kategori_servis"  type="text" id="idKatServis" name="idKatServis" >

              <label style=" padding-right: 20px" for="nama">JENIS PERKHIDMATAN (BM) :</label>
              <input class="form-control" value=""  type="text" id="nama" name="nama" >
              <label style=" padding-right: 20px" for="catatan">Catatan(BM) :</label>
              <input class="form-control" placeholder="catatan"  type="text" id="catatan" name="catatan" > <br>
              <label style=" padding-right: 20px" for="namaE"></label>JENIS PERKHIDMATAN (BI) :<br>
              <input class="form-control" value=""  type="text" id="namaE" name="namaE" >
              <label style=" padding-right: 20px" for="catatanE">Catatan(BI) :</label>
              <input class="form-control" placeholder="catatan"  type="text" id="catatanE" name="catatanE" > <br>
            </div>
            <input type="submit" value="Submit"  id="new_spp"><br>
          </div>
        </div>
      </div>
    </div>
    <br>
      <table>
      <tr>
        <th>BIL</th>
        <th>KHIDMAT/PRODUK</th>
        <th>CATATAN</th>
      </tr>
      <tbody id="pusat_perkhidmatan_servis">
      </tbody>
    </table>
  <br>
  <br>
  </form>


<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('change','#pusat_perkhidmatan',function(){
      $("#kategori_servis").empty();
      let selected = $(this).val();
      $.ajax({
          method: "POST",
          url: "{{ url('/kategori_servis') }}",
          data: {
              "_token": "{{ csrf_token() }}",
              "id": selected,
          },
      }).done(function(response) {
          var data = jQuery.parseJSON(response);
          $('#kategori_servis').html('');
          $('#kategori_servis').append('<option value="">Pilih...</option>');
          $.each(data.kkat, function(index,value) {
            $('#kategori_servis').append('<option value="'+value.id+'">'+value.kod+value.nama+'</option>');
            });
            });
            });
    $(document).on('change','#kategori_servis',function(){
      $("#pusat_perkhidmatan_servis").empty();
      let selected1 = $('#pusat_perkhidmatan').val();
      // console.log(selected1);
      let selected = $(this).val();
      $.ajax({
          method: "POST",
          url: "{{ url('pusat_perkhidmatan_servis') }}",
          data: {
              "_token": "{{ csrf_token() }}",
              "id1": selected1,
              "id": selected,
          },
      }).done(function(response) {
          var data = jQuery.parseJSON(response);
          $('#pusat_perkhidmatan_servis').html('');
          $('#pusat_perkhidmatan_servis').append('<tr value=""></tr>');
          var counter = 1;
          $.each(data.pks, function(index,value) {
              $('#pusat_perkhidmatan_servis').append(
                `<tr><td value="${value.id}">${counter}</td><td >${value.nama}</td><td >${value.catatan}</td>
                </tr>`);
                counter++;
                });
                });
                });
                $(document).on('click','#new_spp',function(){
      let selected1 = $('#pusat_perkhidmatan').val();
      let selected = $('#kategori_servis').val();
      $('#idPKhidmat').val(selected1);
      $('#idKatServis').val(selected);
      // $('#new_servis_pusat_khidmat').submit();
    });
  });
</script>

</section>

@endsection

