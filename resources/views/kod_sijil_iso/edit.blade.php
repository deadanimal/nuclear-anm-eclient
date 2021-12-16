
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
    <form action="/kod_sijil_iso/{{ $kod_sijil_iso -> id }}" method="POST" >
      @method('PUT')
      @csrf
    <td> <input value="{{ $kod_sijil_iso -> idJC }}" name="idJC" type="text" class=""></td>
    <td> <input value="{{ $kod_sijil_iso -> keterangan }}" name="keterangan" type="file" class=""></td>
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
