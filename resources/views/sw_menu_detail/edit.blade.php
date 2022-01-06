
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
<h2>KOD BAYARAN</h2>

<table style="text-align: center">
  <tr>
    <th>KOD</th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <form action="/sw_menu_main/{{ $sw_menu_main -> id }}" method="POST" >
      @method('PUT')
      @csrf
    <td> <input value="{{ $sw_menu_main -> mm_kod }}" name="mm_kod" type="text" class=""></td>
    <td> <input value="{{ $sw_menu_main -> mm_nama }}" name="mm_nama" type="text" class=""></td>
    <td><button type="submit" value="submit">KEMASKINI</button></td>
  </form>
  </tr>
  {{-- @foreach ($sw_menu_main1 as $spk)
  <tr>
    <td><ul> {{ $spk -> mm_kod}}</ul></td>
    <td><ul> {{ $spk -> mm_nama}}</ul></td>
    <td>
      <a href="/sw_menu_main/{{ $spk -> id }}/edit">Kemaskini</a></td>
    </tr>
@endforeach --}}
</table>

@endsection
