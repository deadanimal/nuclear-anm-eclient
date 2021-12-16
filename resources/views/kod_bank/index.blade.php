
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
<form action="/kod_bank/" method="POST" id="new_servis_pusat_khidmat">
  @csrf
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
    <form action="/kod_bank/" method="POST" id="new_servis_pusat_khidmat">
      @csrf
    <td> <input name="kod" type="text" class=""></td>
    <td> <input name="nama" type="text" class=""></td>
    <td><button type="submit" value="submit">TAMBAH</button></td>
  </form>
  </tr>
  @foreach ($kod_bank as $spk)
  <tr>
    <td><ul> {{ $spk -> kod}}</ul></td>
    <td><ul> {{ $spk -> nama}}</ul></td>
    <td>
    <a href="/kod_bank/{{ $spk -> id}}/edit">Kemaskini</a>
    <form action="/kod_bank/{{ $spk -> id }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"><span class="fas fa-bin"></span></button>
      </form>
    </td>

    </tr>
@endforeach
</table>
<script>
  function productDelete(ctl) {
    $(ctl).parents("tr").remove();
}
</script>
@endsection
