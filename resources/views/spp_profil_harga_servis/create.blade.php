@extends('bases')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')     

<section class="content" style="padding-left: 0px; padding-top: 20px">
  <form method="POST" action="/spp_profil_harga_servis/">
    <div>
      <div class="row">
        <div class="col card">
          <div class="form-group">
            @csrf
            <div>
              <label for="idPkhidmat">Pusat Perkhimatan:</label>
              <select name="idPkhidmat" id="pusat_perkhidmatan" >
                <option value=""> Sila pilih:</option>
                @foreach  ($spp_profil_harga_servis as $mo)
                <option value="{{ $mo-> id }}">{{ $mo -> kumpulan  }} - {{ $mo -> nama  }}</option>
                @endforeach
              </select>
              <br>
              <label for="idPkhidmatServis">Kategori Perkhimatan:</label>
              <select name="idPkhidmatServis" id="kategori_servis"></select>
              <br>
              <label  for="nama">NAMA PERKHIDMATAN (BM) :  </label>
              <input class="form-control" value="" placeholder="" type="text" id="nama" name="nama" >
              <label  for="nameE"></label>NAMA PERKHIDMATAN (BI) :<br>
              <input class="form-control" value="" placeholder="" type="text" id="nameE" name="nameE" >
              <label  for="hargaY">HARGA :</label>
              <input class="form-control" placeholder=""  type="text" value="" id="hargaY" name="hargaY" > <br>
              <label  for="unitHarga">UNIT HARGA :</label>
              <input class="form-control" placeholder=""  type="text" value="" id="unitHarga" name="unitHarga" > <br>
            </div>
            <input type="submit" value="Submit"><br>
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
                });
</script>

</section>

@endsection

