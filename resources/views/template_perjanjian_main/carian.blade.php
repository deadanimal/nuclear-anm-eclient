
@extends('bases')
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')   
<button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('template_perjanjian_D_DeleteAll') }}">HAPUS</button><button class="btn btn-primary" onclick="window.print()">CETAK </button><br>
<table style="display:block" id="hiddenTable" class="table ">
  <thead class="thead-dark">
  <tr>
    <th></th>
    <th>URUTAN</th>
    <th>LEVEL</th>
    <th>BIL</th>
    <th>KETERANGAN</th>
    <th>TINDAKAN</th>
  </tr>
  </thead>
  <tbody id="myTable">
    @foreach  ($template_perjanjian_main as $mo)
  <tr>
    <td><ul><input type="checkbox" class="sub_chk" data-id="{{ $mo -> id}}"></ul></td>
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
</script>
@endsection
