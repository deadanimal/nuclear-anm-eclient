
@extends('bases')
<style>

</style>
@section('content')   

<form action="carian_syarikat" method="POST">
  @csrf
  <label for="nama">Nama Syarikat/No Syarikat</label>
<input name="nama" id="myInput" type="text" placeholder="Search..">

<br>
<label for="idKategoriSyarikat">Kategori Syarikat </label>

<select name="idKategoriSyarikat" id="kod_negeri_syarikat">
@foreach ($spp_profil_syarikat1 as $kod)
  <option value="{{ $kod -> id }}">{{ $kod -> nama }}</option>
@endforeach
</select>
<button type="submit" value="submit">Search</button>
</form>

{{-- 
<table>
  <tr>
    <th>NAMA</th>
    <th>ALAMAT</th>
    <th>LAKU</th>
  </tr>
  <tbody id="kod_syarikat">
  </tbody>

</table>


<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
    $("#myInput").on("keyup", function() {
        var x = document.getElementById('hiddenTable');
        if($(this).val() == "") {
          x.style.display = 'none';
          } else {
              x.style.display = 'block';
              var value = $(this).val().toLowerCase();
              $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                })
                }

             });
            });
    });
  </script> --}}

@endsection
