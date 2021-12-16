
@extends('bases')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<style>

</style>
@section('content')   


<form  action="/syarikat_carian" method="GET">

<label for="nama">Nama Syarikat/No Syarikat</label>
<input id="nama" type="text" name="nama" placeholder="Search.." >

<br>
<label for="kod_kategori_syarikat">Kategori Syarikat </label>

<select name="kod_kategori_syarikat" >
@foreach ($spp_profil_syarikat2 as $kod)
  <option value="{{ $kod -> id }}">{{ $kod -> nama }}</option>
@endforeach
</select>
<button type="submit" value="submit"></button>
</form>


<table style="display:block" id="hiddenTable" class="table ">
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

@endsection
