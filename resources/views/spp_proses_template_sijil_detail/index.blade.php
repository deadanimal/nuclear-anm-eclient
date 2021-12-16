
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
<form action="/spp_proses_template_sijil_detail/" method="POST">
  @csrf
<br>
<table style="text-align: center">
<h2>KOD PERJANJIAN</h2>

<table style="text-align: center">
  <tr>
    <th>KOD</th>
    <th>NAMA</th>
    <th>BIL</th>
    <th>KETERANGAN</th>
    <th>TINDAKAN</th>
  </tr>
  {{-- <tr>
    <form action="/spp_proses_template_sijil_detail/" method="POST">
      @csrf
    <td> <input name="tpm_id" type="text" class=""></td>
    <td> <input name="tpm_nama" type="text" class=""></td>
    <td><button type="submit" value="submit">TAMBAH</button></td>
  </form>
  </tr> --}}
  @foreach ($spp_proses_template_sijil_detail as $spk)
  <tr>
    <td style="max-width: 10px"><ul>{{ $spk -> urutan}}</ul></td>
    <td style="max-width: 10px" ><ul><a href=""></a>{{ $spk -> level}}</ul></td>
    <td style="max-width: 10\5px" ><ul><a href=""></a>{{ $spk -> bil}}</ul></td>
    <td style="max-width: 550px"><ul><a href=""></a>{{ $spk -> keterangan}}</ul></td>
    <td>
    <a href="/spp_proses_template_sijil_detail/{{ $spk -> id}}/edit">Kemaskini</a>
    </td>

    </tr>
@endforeach
</table>
<script>

</script>
@endsection
