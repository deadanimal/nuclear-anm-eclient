
@extends('bases')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  center;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
@section('content')   

<br>
<h2>Profil Harga</h2>

<br>
{{-- <form action="/spp_profil_harga_servis/create" method="POST" id="new_profil_harga_servis">
  <input type="text" name="pusat_perkhidmatan12" id="pusat_perkhidmatan12" >
  <input type="text" name="jenis_perkhidmatan1" id="jenis_perkhidmatan1">
<button type="button" id="new_spp">Tambah Profil Harga</button>
</form> --}}




<a href="/spp_profil_harga_servis/create">Tambah Profil Harga Servis</a>
<br>
<br>

<label for="pusat_perkhidmatan1">Pusat Perkhimatan:</label>
<select name="pusat_perkhidmatan1" id="pusat_perkhidmatan1" >
  <option value=""> Sila pilih:</option>
 @foreach  ($spp_profil_harga_servis as $mo)
     <option value="{{ $mo-> id }}">{{ $mo -> kumpulan  }} - {{ $mo -> nama  }}</option>
 @endforeach
</select>
<br>
<label for="jenis_perkhidmatan">Jenis Perkhimatan:</label>
<select name="jenis_perkhidmatan" id="jenis_perkhidmatan"></select>
<br>

<table>
  <tr>
    <th>BIL</th>
    <th>KHIDMAT/PRODUK</th>
    <th>HARGA</th>
    <th>CATATAN</th>
  </tr>
  <tbody id="pusat_perkhidmatan_servis">
  </tbody>

</table>
<br>
<br>

<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('change','#pusat_perkhidmatan1',function(){
      $("#jenis_perkhidmatan").empty();
      let selected = $(this).val();
      $.ajax({
          method: "POST",
          url: "{{ url('/pusat_perkhidmatan') }}",
          data: {
              "_token": "{{ csrf_token() }}",
              "id": selected,
          },
      }).done(function(response) {
          var data = jQuery.parseJSON(response);
          $('#jenis_perkhidmatan').html('');
          $('#jenis_perkhidmatan').append('<option value="">Pilih...</option>');
          $.each(data.aos, function(index,value) {
                $('#jenis_perkhidmatan').append('<option value="'+value.id+'">'+value.nama+'</option>');
            });
      });

      
    });
    $(document).on('change','#jenis_perkhidmatan',function(){
      $("#pusat_perkhidmatan_servis").empty();
      let selected1 = $('#pusat_perkhidmatan1').val();
      let selected = $(this).val();
      $.ajax({
          method: "POST",
          url: "{{ url('/jenis_perkhidmatan') }}",
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
          $.each(data.aos1, function(index,value) {
              $('#pusat_perkhidmatan_servis').append(
                `<tr>
                <td value="${value.id}">${counter}</td>
                <td >${value.nama}</td><td >${value.hargaY}/${value.unitHarga}</td>
                <td >${value.catatan}</td>
                <td> <a href="/spp_profil_harga_servis/${value.id}/edit">Kemaskini</a><br>
                <a href="/spp_profil_harga_servis/${value.id}/delete">Delete</a></td>
                </tr>`
                );
                counter++;
          });
      });
    });
    $(document).on('click','#new_spp',function(){
      let selected1 = $('#pusat_perkhidmatan1').val();
      let selected = $('#jenis_perkhidmatan').val();

      $('#pusat_perkhidmatan12').val(selected1);
      $('#jenis_perkhidmatan1').val(selected);
      $('#new_profil_harga_servis').submit();



    });
  });
    

</script>

@endsection
