
@extends('bases')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')   

<br>
<br>
<table style="text-align: center">
<h2>PAUTAN MENU</h2>

<button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('sw_mm_DeleteAll') }}">Delete All Selected</button>
<select  name="" type="text" class="">
  @foreach ($sw_menu_detail as $spk)
        <option value="{{ $spk->id }}">{{ $spk->swmenumain->mm_nama }}</option>
        @endforeach
      </select>
<table  style="text-align: center">
<thead>
  <tr align="center">
    <th></th>
    <th>KATEGORI</th>
    <th>URL PAUTAN</th>
    <th>BIL</th>
    <th>TAJUK</th>
    <th>STATUS</th>
    <th>TINDAKAN</th>
  </tr>
</thead>
<tbody>
  <tr>
    <form action="/sw_menu_detail/" method="POST" >
      @csrf
    <td> 
      {{-- <input name="" type="checkbox" class=""> --}}
    </td>
    <td> 
      {{-- <select name="mm_id" type="text" class="">
  @foreach ($sw_menu_detail1 as $spk1)
        <option value="{{ $spk1->swmenumain->id }}">{{ $spk1->swmenumain->mm_nama }}</option>
        @endforeach
      </select> --}}
    </td>
    <td> <input name="md_href" type="text" class=""></td>
    <td> <input name="md_bil" type="text" class=""></td>
    <td> <input name="md_tajuk" type="text" class=""></td>
    <td> 
      <select name="md_flagaktif" type="text" class="">
              <option value="A">AKTIF</option>
              <option value="T">TIDAK AKTIF</option>
            </select>
    </td>
    <td><button type="submit" value="submit">TAMBAH</button></td>
  </form>
  </tr>
</tbody>
<tbody class="myTable">
  
  @foreach ($sw_menu_detail as $spk)
  <tr id="tr_{{$spk->id}}">
    <td><ul><input type="checkbox" class="sub_chk" data-id="{{$spk->id}}"></ul></td>
    <td><ul> {{ $spk->swmenumain->mm_nama }}</ul></td>
    <td><ul> {{ $spk -> md_href}}</ul></td>
    <td><ul> {{ $spk -> md_bil}}</ul></td>
    <td><ul> {{ $spk -> md_tajuk}}</ul></td>
    <td><ul> {{ $spk -> md_flagaktif}}</ul></td>
    <td>
      <a href="{{ url('delete1',$spk->id) }}" class="btn btn-danger btn-sm"
        data-tr="tr_{{$spk->id}}"
        data-toggle="confirmation"
        data-btn-ok-label="Delete" data-btn-ok-icon="fa fa-remove"
        data-btn-ok-class="btn btn-sm btn-danger"
        data-btn-cancel-label="Cancel"
        data-btn-cancel-icon="fa fa-chevron-circle-left"
        data-btn-cancel-class="btn btn-sm btn-default"
        data-title="Are you sure you want to delete ?"
        data-placement="left" data-singleton="true">
         Delete
     </a>
      <a href="/sw_menu_detail/{{ $spk -> id }}/edit">Kemaskini</a></td>
    </tr>
@endforeach
</tbody>
</table>
{{-- <form action="/sw_menu_detail/{{ $spk -> id }}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit"><span class="fas fa-bin"></span></button>
  </form> --}}
<script type="text/javascript">
$(document).ready(function() {
    $('#myTable').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
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
