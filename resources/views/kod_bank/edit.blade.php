
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

<table style="text-align: center">
<h2>KOD BANK</h2>

<table style="text-align: center">
  <tr>
    <th>KOD</th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <form action="/kod_bank/{{ $kod_bank -> id }}" method="POST" id="new_servis_pusat_khidmat">
      @method('PUT')
      @csrf
    <td> <input value="{{ $kod_bank -> kod }}" name="kod" type="text" class=""></td>
    <td> <input value="{{ $kod_bank -> nama }}" name="nama" type="text" class=""></td>
    <td><button type="submit" value="submit">KEMASKINI</button></td>
  </form>
  </tr>
</table>
<script>
  function productDelete(ctl) {
    $(ctl).parents("tr").remove();
}
</script>
@endsection
