
@extends('bases')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
  body {
  counter-reset: section;
}

h6::before {
  counter-increment: section;
  content: "" counter(section) ".";
}
</style>
@section('content')   
<form action="carian_kakitangan" method="POST">
  @csrf
  <label for="Bio_Nama">Nama</label>
<input name="Bio_Nama" type="text" placeholder="Search..">

<br>
<label for="idPkhidmat">Pusat Khidmat </label>

<select name="idPkhidmat" >
  <option value="">Sila pilih</option>
@foreach ($psm_biodata2 as $kod)
  <option value="{{ $kod -> id }}">{{ $kod -> kumpulan }}-{{ $kod -> nama }}</option>
@endforeach
</select>
<button type="submit" value="submit">Cari</button>
<br>
</form>
<a href="/psm_biodata/create">TAMBAH KAKITANGAN</a>
<table style="display:block" id="hiddenTable" class="table ">
  <thead class="thead-dark">
  <tr>
    <th>BIL</th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
  </thead>
  <tbody id="myTable">
    @foreach  ($psm_biodata as $mo)
  <tr>
    {{-- {{ dd($mo->staffPkhidmat->Bio_Nama) }} --}}
    <td> <h6></h6></td>
    {{-- {{dd($mo->staffPkhidmat->Bio_Nama)}} --}}
    <td>{{$mo->Bio_Nama}}
      {{$mo->staffPkhidmat->Bio_Nama ?? ""}}
      {{-- {{$mo->staffPkhidmat->id ?? ""}} --}}
    </td>
    {{-- <td>{{$mo->staffPkhidmat->Bio_Nama ?? ""}}</td> --}}
    {{-- if item is null, trace back the data --}}
    <td>
      {{-- <a href="/psm_biodata/{{ $mo -> id  }}/edit">Kemaskini</a> --}}
    </td>
  </tr>
  @endforeach
  </tbody>
</table>

<a href="/psm_biodata/create">TAMBAH Kakitangan</a>

@endsection
