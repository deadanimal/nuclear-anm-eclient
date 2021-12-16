
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
<form action="/template_perjanjian_main/" method="POST">
  @csrf
<br>
<table style="text-align: center">
<h2>KOD PERJANJIAN</h2>

<table style="text-align: center">
  <thead>
  <tr>
    <th>KOD</th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <form action="/template_perjanjian_main/" method="POST">
        @csrf
      <td> <input name="tpm_id" type="text" class=""></td>
      <td> <input name="tpm_nama" type="text" class=""></td>
      <td><button type="submit" value="submit">TAMBAH</button></td>
    </form>
    </tr>
  </tbody>
  <tbody>
    @foreach ($template_perjanjian_main as $spk)
    {{-- @foreach ($template_perjanjian_main1 as $det) --}}
    <tr>
      <td><ul>{{ $spk -> tpm_id}}</ul></td>
      <td>
        <form id="test" name="test" action="template_detail" method="POST">
          @csrf
          <input type="hidden" name="tpm_id" value="{{ $spk -> tpm_id}}" />
          <button type="submit">{{ $spk -> tpm_nama}}</button>
        {{-- <ul><a href="javascript:submitFormWithValue('{{ $spk -> tpm_id}}')">{{ $spk -> tpm_nama}}</a></ul> --}}

        </form>
      </td>
      {{-- <td><ul><a onclick="temp_detail('{{ $spk -> tpm_id}}')">{{ $spk -> tpm_nama}}</a></ul></td> --}}
      <td>
      <a href="/template_perjanjian_main/{{ $spk -> id}}/edit">Kemaskini</a>
      </td>
      </tr>
  @endforeach
  {{-- @endforeach --}}
  </tbody>
</table>

<script type="text/javascript">
function submitFormWithValue(val){
  document.getElementById('command').value = val;
  document.forms["test"].submit();
}
</script>
@endsection
