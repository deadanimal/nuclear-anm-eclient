
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
<form action="carian_pelanggan" method="POST">
  @csrf
<label for="nama">NAMA PELANGGAN</label>
<input name="nama" type="text" placeholder="Search..">
<br>

<label for="noAkaun">NO PELANGGAN</label>
<input name="noAkaun" type="text" placeholder="Search..">

<br>
<label for="idStatusSyarikat">STATUS PELANGGAN</label>

<select name="idStatusSyarikat" id="kod_negeri_syarikat">
  <option value="">Sila pilih</option>
@foreach ($spp_pelanggan_syarikat1 as $kod)
  <option value="{{ $kod -> id }}">{{ $kod -> nama }}</option>
@endforeach
</select>
<button type="submit" value="submit">Search</button>
</form>
<a href="/spp_pelanggan_syarikat/create">TAMBAH PELANGGAN</a>
{{-- {{ dd($kod) }} --}}
<table style="display:block" id="hiddenTable" class="table ">
  <thead class="thead-dark">
  <tr>
    <th>BIL</th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
  </thead>
  <tbody id="myTable">
    @foreach  ($spp_pelanggan_syarikat as $mo)
  <tr>
    <td><h6></h6></td> 
    <td>{{$mo -> nama ?? ""}}{{$mo -> pelangganSyarikat -> nama ?? ""}}</td>
    <td>
      <a href="/spp_pelanggan_syarikat/{{ $mo -> id  }}/edit">Kemaskini</a>
    </td>
  </tr>
  @endforeach
  </tbody>
</table>

<a href="/spp_pelanggan_syarikat/create">TAMBAH SYARIKAT</a>

@endsection
