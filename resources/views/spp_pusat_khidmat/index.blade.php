
@extends('bases')
<style>
  body {
  counter-reset: section;
}
  h6::before {
  counter-increment: section;
  content:  counter(section) ".";
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 9px;
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
<form action="/spp_pusat_khidmat/" method="POST" id="new_servis_pusat_khidmat">
  @csrf
<br>
<table style="text-align: center">
<h5>Pusat Khidmat Table</h5>

<tr style="text-align: center">
    <td><label for="kumpulan">KUMPULAN</label></td>
    <td> <input name="kumpulan" type="text" class=""></td>
<br>
</tr>
<tr style="text-align: center">
  <td><label for="nama">NAMA</label></td>
  <td> <input name="nama" type="text" class=""></td>
<br>
</tr>
<tr style="text-align: center">
  <td><label for="namaE">NAMA LAIN</label></td>
  <td> <input name="namaE" type="text" class=""></td>
<br>
</tr>
<tr style="text-align: center">
  <td><label for="cid">CID</label></td>
  <td> <input name="cid" type="text" class=""></td>
</tr>

<br>

</table>
<br>
<button type="submit" value="submit">TAMBAH PUSAT KHIDMAT</button>

</form>

<table style="text-align: center">
  <tr>
    <th>No.</th>
    <th>Kumpulan</th>
    <th>Nama Penuh</th>
    <th>Nama Lain</th>
    <th>Update</th>
  </tr>
  @foreach ($spp_pusat_khidmat as $spk)
  <tr style="text-align: center">
    <td><h6></h6></td>
    <td><ul> {{ $spk -> kumpulan}}</ul></td>
    <td><ul> {{ $spk -> nama}}</ul></td>
    <td><ul> {{ $spk -> namaE}}</ul></td>
    <td><a href="spp_pusat_khidmat/{{ $spk -> id }}/edit">Kemaskini</a>
      <form action="/spp_pusat_khidmat/{{ $spk -> id }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"><span class="fas fa-bin"></span>BUANG</button>
      </form>
    </td>
    </tr>
    {{-- counter++; --}}
@endforeach
</table>

@endsection
