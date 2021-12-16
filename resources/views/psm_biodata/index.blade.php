
@extends('bases')
<style>

</style>
@section('content')   

<label for="myInput">Nama Syarikat/No Syarikat</label>
<input id="myInput" type="text" placeholder="Search..">

<br>
<label for="idPkhidmat">Kategori Syarikat </label>

<select name="idPkhidmat" id="kod_negeri_syarikat">
@foreach ($psm_biodata1 as $kod)
  <option value="{{ $kod -> id }}">{{ $kod -> nama }}</option>
@endforeach
</select>

<table style="display:none" id="hiddenTable" class="table ">
  <thead class="thead-dark">
  <tr>
    <th>Firstname</th>
    <th>Alamat</th>
    <th>No Tel</th>
  </tr>
  </thead>
  <tbody id="myTable">
    @foreach  ($spp_profil_syarikat as $mo)
  <tr id='idnegeri' {{ $mo -> id  }}>
    <td value="">{{ $mo -> nama  }}</td>
    <td value="">{{ $mo -> alamat1  }}{{ $mo -> alamat  }}</td>
    <td value="">{{ $mo -> noTel  }}</td>
  </tr>
  @endforeach
  </tbody>
</table>
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
  </script>

@endsection
