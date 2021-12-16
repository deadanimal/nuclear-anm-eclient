
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
<form action="/kod_negeri/" method="POST" id="new_servis_pusat_khidmat">
  @csrf
<br>
<table style="text-align: center">
<h2>KOD NEGERI</h2>

<table  style="text-align: center">
  <tr align="center">
    <th>KOD</th>
    <th>KETERANGAN</th>
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <form action="/kod_negeri/" method="POST" id="new_servis_pusat_khidmat">
      @csrf
    <td> <input  name="kod" type="text" class=""></td>
    <td> <input name="nama" type="text" class=""></td>
    <td><button type="submit" value="submit">TAMBAH</button></td>
  </form>
  </tr>
  @foreach ($kod_negeri as $spk)
  <tr>
    <td><ul> {{ $spk -> kod}}</ul></td>
    <td><ul> {{ $spk -> nama}}</ul></td>
    <td>
      <form action="/kod_negeri/{{ $spk -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"><span class="fas fa-bin"></span></button>
        </form>
      <a href="/kod_negeri/{{ $spk -> id }}/edit">Kemaskini</a></td>
    </tr>
@endforeach
</table>

@endsection
