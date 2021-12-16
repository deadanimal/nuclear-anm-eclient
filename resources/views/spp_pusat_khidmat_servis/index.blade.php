
@extends('bases')

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
<h2>Pusat Servis Khidmat Table</h2>

<br>
{{-- <form action="/spp_pusat_khidmat_servis/create" method="POST" id="new_servis_pusat_khidmat">
  @csrf
  <input type="text" name="pusat_perkhidmatan12" id="pusat_perkhidmatan12"  hidden>
  <input type="text" name="kategori_servis1" id="kategori_servis1" hidden>
<br>
<br>
  <label for="pusat_perkhidmatan1">Pusat Perkhimatan:</label>
<select name="pusat_perkhidmatan1" id="pusat_perkhidmatan1" >
  <option value=""> Sila pilih:</option>
 @foreach  ($spp_pusat_khidmat_servis as $mo)
     <option value="{{ $mo-> id }}">{{ $mo -> kumpulan  }} - {{ $mo -> nama  }}</option>
 @endforeach
</select>
<br>
<button type="button" id="new_spp">Add spp_pusat_khidmat_servis</button>
</form> --}}
<br>
<br>
  <label for="pusat_perkhidmatan1">Pusat Perkhimatan:</label>
<select name="pusat_perkhidmatan1" id="pusat_perkhidmatan1" >
  <option value=""> Sila pilih:</option>
 @foreach  ($spp_pusat_khidmat_servis as $mo)
     <option value="{{ $mo-> id }}">{{ $mo -> kumpulan  }} - {{ $mo -> nama  }}</option>
 @endforeach
</select>
<br>
<br>
<label for="kategori_servis">Kategori Perkhimatan:</label>
<select name="kategori_servis" id="kategori_servis"></select>
<br>
<br>
<br>
<a href="/spp_pusat_khidmat_servis/create">TAMBAH SERVIS PUSAT KHIDMAT</a>
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

<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('change','#pusat_perkhidmatan1',function(){
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
      let selected1 = $('#pusat_perkhidmatan1').val();
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
                <td> <a href="/spp_pusat_khidmat_servis/${value.id}/edit">Kemaskini</a><br>
                <form action="/spp_pusat_khidmat_servis/${value.id}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">BUANG</button>
                </form></td>
                </tr>`
                );
                counter++;
          });
      });
    });
    $(document).on('click','#new_spp',function(){
      let selected1 = $('#pusat_perkhidmatan1').val();
      let selected = $('#kategori_servis').val();

      $('#pusat_perkhidmatan12').val(selected1);
      $('#kategori_servis1').val(selected);
      $('#new_servis_pusat_khidmat').submit();
    });
  });
    

</script>

@endsection
