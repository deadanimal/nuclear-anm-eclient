
@extends('bases')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('content')   

<table style="display:block" id="hiddenTable" class="table ">
  <thead class="thead-dark">
  <tr>
    <th>URUTAN</th>
    <th>LEVEL</th>
    <th>BIL</th>
    <th>KETERANGAN</th>
    <th>No Tel</th>
  </tr>
  </thead>
  <tbody id="myTable">
    @foreach  ($template_perjanjian_main as $mo)
  <tr>
    <td value="">{{ $mo -> tpd_urutan  }}</td>
    {{-- <td value="">{{ $mo -> tpd_urutan  }}</td> --}}
    <td value="">{{ $mo -> tpd_level  }}</td>
    <td value="">{{ $mo -> tpd_bil  }}</td>
    <td value="">{{ $mo -> tpd_keterangan  }}</td>
    <td>
      <a href="/template_perjanjian_detail/{{ $mo -> id}}/edit">Kemaskini</a>
    </td>
  </tr>
  @endforeach
  </tbody>
</table>

@endsection
