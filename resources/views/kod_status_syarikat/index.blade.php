
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
<form action="/kod_status_syarikat/" method="POST" id="new_servis_pusat_khidmat">
  @csrf
<br>
<table style="text-align: center">
<h2>KOD STATUS SYARIKAT</h2>

<table style="text-align: center">
  <tr>
    <th>KOD</th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <form action="/kod_status_syarikat/" method="POST" id="new_servis_pusat_khidmat">
      @csrf
    <td> <input name="kod" type="text" class=""></td>
    <td> <input name="nama" type="text" class=""></td>
    <td><button type="submit" value="submit">TAMBAH</button></td>
  </form>
  </tr>
  @foreach ($kod_status_syarikat as $spk)
  <tr>
    <td><ul> {{ $spk -> kod}}</ul></td>
    <td><ul> {{ $spk -> nama}}</ul></td>
    <td>      <form action="/kod_status_syarikat/{{ $spk -> id }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"><span class="fas fa-bin"></span></button>
      </form>
    <a href="/kod_status_syarikat/{{ $spk -> id }}/edit">Kemaskini</a></td>
  </tr>
@endforeach
</table>
@endsection
