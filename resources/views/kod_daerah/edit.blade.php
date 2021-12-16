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
<h2>KOD DAERAH</h2>
{{-- //{{ $kod_daerah-> idNegeri ==  $kod-> nama ? 'selected':''  }} --}}
<br>
<select name="idNegeriS" id="idNegeriS">
  @foreach ($kod_daerah1 as $kod)
    <option {{ $kod_daerah-> idNegeri ==  $kod-> id ? 'selected':''  }}  value="{{ $kod -> id }}">{{ $kod -> nama }}</option>
  @endforeach
</select>
<br>

<br>
<table style="text-align: center">

<table id="myTable"  style="text-align: center">
  <thead>
    <tr align="center">
      <th>Negeri</th>
      <th>KOD</th>
      <th>DAERAH</th>
      <th>TINDAKAN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <form action="/kod_daerah/{{ $kod_daerah -> id }}" method="POST" >
      @method('PUT')
      @csrf
    <td> <input value="{{ $kod_daerah -> idNegeri }}" name="idNegeri" id="idNegeriinput" type="text" class="" ></td>
    <td> <input value="{{ $kod_daerah -> kod }}" name="kod" type="text" class=""></td>
    <td> <input value="{{ $kod_daerah -> nama  }}" name="nama" type="text" class=""></td>
    <td><button type="submit" value="submit">KEMASKINI</button></td>
  </form>
  </tr>

  </tbody>
  <tbody id="daerahTable">

  </tbody>

 

</table>



<script>
  function productDelete(ctl) {
    $(ctl).parents("tr").remove();
}
$(document).ready(function() {

  $(document).on('change','#idNegeriS',function(){
      $("#daerahTable").empty();
      let selected = $(this).val();
      let selected_negeri = $("#idNegeriS option:selected").text()
      $.ajax({
          method: "POST",
          url: "{{ url('/idNegSel') }}",
          data: {
              "_token": "{{ csrf_token() }}",
              "id": selected,
          },
      }).done(function(response) {
          var data = jQuery.parseJSON(response);
          $('#daerahTable').html('');
          $('#daerahTable').append('<tr value=""></tr>');
          $.each(data.iNeg, function(index,value) {
              $('#daerahTable').append(
                `<tr>
           
                <td >${selected_negeri}</td>
                <td >${value.kod}</td>
                <td >${value.nama}</td>
                <td> <a href="/kod_daerah/${value.id}/edit">Kemaskini</a><br>
                <a href="/kod_daerah/${value.id}/delete">Delete</a></td>
                </tr>`
                );
          });
      });
      $('#idNegeriinput').val(selected_negeri);

    });
});
</script>
@endsection
