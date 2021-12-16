
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
<h2>KOD TEMPLATE SIJIL</h2>

<table style="text-align: center">
  <tr>
    <th>P</th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
  <tr>
    <form action="/spp_proses_template_sijil/" method="POST">
      @csrf
    <td></td>
    <td> <input name="nama" type="text" class=""></td>
    <td><button type="submit" value="submit">TAMBAH</button></td>
  </form>
  </tr>
  @foreach ($spp_proses_template_sijil as $spk)
  <tr>
    <td><input type="checkbox"></td>
    <td>
      <form id="test" name="test" action="spp_proses_template_sijil_detail_index" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $spk -> id}}" />
        <button type="submit">{{ $spk -> nama}}</button>
      </form>
    </td>
    {{-- <td style="max-width: 550px"><ul><a href=""></a>{{ $spk -> nama}}</ul></td>
    <td> --}}
      <td>
    <a href="/spp_proses_template_sijil/{{ $spk -> id}}/edit">Kemaskini</a>

      </td>

    </tr>
@endforeach
</table>
<script>

</script>
@endsection
