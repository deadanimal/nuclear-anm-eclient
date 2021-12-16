
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
<h2>KOD STATUS SYARIKAT</h2>

<table style="text-align: center">
  <tr>
    <th>KOD</th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <form action="/kod_status_syarikat/{{ $kod_status_syarikat -> id }}" method="POST" >
      @method('PUT')
      @csrf
    <td> <input value="{{ $kod_status_syarikat -> kod }}" name="kod" type="text" class=""></td>
    <td> <input value="{{ $kod_status_syarikat -> nama }}" name="nama" type="text" class=""></td>
    <td><button type="submit" value="submit">KEMASKINI</button></td>
  </form>
  </tr>
  @foreach ($kod_status_syarikat1 as $spk)
  <tr>
    <td><ul> {{ $spk -> kod}}</ul></td>
    <td><ul> {{ $spk -> nama}}</ul></td>
    <td><button type='button' onclick='productDelete(this);' class='btn btn-default'>delete<span class='glyphicon glyphicon-remove' /></button>
    <a href="/kod_status_syarikat/{{ $spk -> id }}/edit">Kemaskini</a></td>
    </tr>
@endforeach
</table>
<script>
  function productDelete(ctl) {
    $(ctl).parents("tr").remove();
}
</script>
@endsection
