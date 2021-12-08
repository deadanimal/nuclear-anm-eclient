
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
    {{-- <th>Created time</th>
    <th>Update time</th> --}}
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <form action="/kod_negeri/" method="POST" id="new_servis_pusat_khidmat">
      @csrf
    <td> <input name="kod" type="text" class=""></td>
    <td> <input name="nama" type="text" class=""></td>
    <td><button type="submit" value="submit">TAMBAH</button></td>
  </form>
  </tr>
  @foreach ($kod_negeri as $spk)
  <tr>
    <td><ul> {{ $spk -> kod}}</ul></td>
    <td><ul> {{ $spk -> nama}}</ul></td>
    <td><button type='button' onclick='productDelete(this);' class='btn btn-default'>delete<span class='glyphicon glyphicon-remove' /></button></td>
    {{-- <td> <a href="{{ route('kod_negeri.edit',$kod_negeri->id) }}">Kemaskini</a></td> --}}
    </tr>
@endforeach
</table>
<script>
  function productDelete(ctl) {
    $(ctl).parents("tr").remove();
}
</script>
@endsection
