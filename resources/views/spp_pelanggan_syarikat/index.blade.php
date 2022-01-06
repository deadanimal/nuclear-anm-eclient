
@extends('bases')
<style>

</style>
@section('content')   

<form action="carian_pelanggan" method="POST">
  @csrf
<label for="nama">NAMA PELANGGAN</label>
<input name="nama" id="myInput" type="text" placeholder="Search..">
<br>
<label for="noAkaun">NO PELANGGAN</label>
<input name="noAkaun" id="myInput" type="text" placeholder="Search..">

<br>
<label for="idStatusSyarikat">STATUS PELANGGAN</label>

<select name="idStatusSyarikat" id="kod_negeri_syarikat">
  <option value="">Sila pilih</option>
@foreach ($spp_profil_syarikat1 as $kod)
  <option value="{{ $kod -> id }}">{{ $kod -> nama }}</option>
@endforeach
</select>
<button type="submit" value="submit">Search</button>
</form>
<a href="/spp_pelanggan_syarikat/create">TAMBAH PELANGGAN</a>


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
