
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
<form action="/template_perjanjian_detail/" method="POST">
  @csrf
<br>
<table style="text-align: center">
<h2>KOD PERJANJIAN</h2>
<button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('template_perjanjian_D_DeleteAll') }}">HAPUS</button><button class="btn btn-primary" onclick="window.print()">CETAK </button><br>

<table style="text-align: center">
  <tr>
    <th>KOD</th>
    <th>NAMA</th>
    <th>BIL</th>
    <th>KETERANGAN</th>
    <th>TINDAKAN</th>
  </tr>
  {{-- <tr>
    <form action="/template_perjanjian_detail/" method="POST">
      @csrf
    <td> <input name="tpm_id" type="text" class=""></td>
    <td> <input name="tpm_nama" type="text" class=""></td>
    <td><button type="submit" value="submit">TAMBAH</button></td>
  </form>
  </tr> --}}
  @foreach ($template_perjanjian_detail as $spk)
  <tr>
    <td style="max-width: 10px"><ul>{{ $spk -> tpd_urutan}}</ul></td>
    <td style="max-width: 10px" ><ul><a href=""></a>{{ $spk -> tpd_level}}</ul></td>
    <td style="max-width: 10\5px" ><ul><a href=""></a>{{ $spk -> tpd_bil}}</ul></td>
    <td style="max-width: 550px"><ul><a href=""></a>{{ $spk -> tpd_keterangan}}</ul></td>
    <td>
    <a href="/template_perjanjian_detail/{{ $spk -> id}}/edit">Kemaskini</a>
    </td>

    </tr>
@endforeach
</table>

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
