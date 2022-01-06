
@extends('bases')
<meta name="csrf-token" content="{{ csrf_token() }}">

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

<br>

<br>

<br>
<table id="myTable"  style="text-align: center">
  <button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('kod_daerah_DeleteAll') }}">HAPUS</button> <button class="btn btn-primary" onclick="window.print()">CETAK </button><br>
  <thead>
    <tr align="center">
      <th></th>
      <th>Negeri</th>
      <th>KOD</th>
      <th>DAERAH</th>
      <th>TINDAKAN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <form action="/kod_daerah" method="POST">
      @csrf
      <select name="idNegeri" id="idNegeriS">
        @foreach ($kod_daerah1 as $kod)
          <option value="{{ $kod -> id }}">{{ $kod -> nama }}</option>
        @endforeach
      </select>
    <td></td>
    <td> <input name="" id="idNegeriinput" type="text" class=""></td>
    <td> <input name="kod" type="text" class=""></td>
    <td> <input name="nama" type="text" class=""></td>
    <td><button type="submit" value="submit">TAMBAH</button></td>
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
                  <td><ul><input type="checkbox" class="sub_chk" data-id="${value.id}"></ul></td>
                <td >${selected_negeri}</td>
                <td >${value.kod}</td>
                <td >${value.nama}</td>
                <td> <a href="/kod_daerah/${value.id}/edit">Kemaskini</a><br>
                </tr>`
                );
          });
      });
      $('#idNegeriinput').val(selected_negeri);

    });
});
</script>

<script type="text/javascript">
    $(document).ready(function () {
  
  
        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true);  
         } else {  
            $(".sub_chk").prop('checked',false);  
         }  
        });
  
  
        $('.delete_all').on('click', function(e) {
  
  
            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  
  
  
            if(allVals.length <=0)  
            {  
                alert("Please select row.");  
            }  else {  
  
  
                var check = confirm("Are you sure you want to delete this row?");  
                if(check == true){  
  
  
                    var join_selected_values = allVals.join(","); 
  
  
                    $.ajax({
                        url: $(this).data('url'),
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            if (data['success']) {
                                $(".sub_chk:checked").each(function() {  
                                    $(this).parents("tr").remove();
                                });
                                alert(data['success']);
                            } else if (data['error']) {
                                alert(data['error']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });
  
  
                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                }  
            }  
        });
  
  
        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.trigger('confirm');
            }
        });
  
  
        $(document).on('confirm', function (e) {
            var ele = e.target;
            e.preventDefault();
  
  
            $.ajax({
                url: ele.href,
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    if (data['success']) {
                        $("#" + data['tr']).slideUp("slow");
                        alert(data['success']);
                    } else if (data['error']) {
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });
  
  
            return false;
        });
    });
  </script>
@endsection
