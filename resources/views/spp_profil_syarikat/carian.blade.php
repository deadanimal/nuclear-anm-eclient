
@extends('bases')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
  body {
  counter-reset: section;
}

h6::before {
  counter-increment: section;
  content: "" counter(section) ".";
}
</style>
@section('content')   

<table style="display:block" id="hiddenTable" class="table ">
  <thead class="thead-dark">
  <tr>
    <th>BIL</th>
    <th>NO SYARIKAT</th>
    <th>TINDAKAN</th>
  </tr>
  </thead>
  <tbody id="myTable">
    @foreach  ($spp_profil_syarikat as $mo)
  <tr>
    <td> <h6></h6>  </td>
    <td value="">{{ $mo -> nama  }}</td>
    {{-- <td value="">{{ $mo -> alamat1  }}{{ $mo -> alamat  }}</td> --}}
    {{-- <td value="">{{ $mo -> noTel  }}</td> --}}
    <td value="">{{ $mo -> noSyarikat  }}</td>
    <td>
      <a href="/spp_profil_syarikat/{{ $mo -> id  }}/edit">Kemaskini</a>
    </td>
  </tr>
  @endforeach
  </tbody>
</table>

<a href="/spp_profil_syarikat/create">TAMBAH SYARIKAT</a>

@endsection
