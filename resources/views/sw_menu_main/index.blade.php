
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
    <form action="/sw_menu_main/" method="POST" >
      @csrf
    <td> <input  name="mm_kod" type="number" class=""></td>
    <td> <input name="mm_nama" type="text" class=""></td>
    <td><button type="submit" value="submit">TAMBAH</button></td>
  </form>
  </tr>
  @foreach ($sw_menu_main as $spk)
  <tr>
    <td><ul> {{ $spk -> mm_kod}}</ul></td>
    <td><ul> {{ $spk -> mm_nama}}</ul></td>
    <td>
      <form action="/sw_menu_main/{{ $spk -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"><span class="fas fa-bin"></span></button>
        </form>
      <a href="/sw_menu_main/{{ $spk -> id }}/edit">Kemaskini</a></td>
    </tr>
@endforeach
</table>

@endsection
