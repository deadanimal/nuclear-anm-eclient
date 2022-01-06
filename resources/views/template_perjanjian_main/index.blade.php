
@extends('bases')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')   

<br>
<form action="/template_perjanjian_main/" method="POST">
  @csrf
<br>
<table style="text-align: center">
<h2>KOD PERJANJIAN</h2>

<br>
<button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('template_perjanjian_DeleteAll') }}">HAPUS</button><button class="btn btn-primary" onclick="window.print()">CETAK </button><br>

<br>
<table style="text-align: center">
  <thead>
  <tr>
    <th></th>
    <th>KOD</th>
    <th>NAMA</th>
    <th>TINDAKAN</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <form action="/template_perjanjian_main/" method="POST">
        @csrf
        <td></td>
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
    <td><ul><input type="checkbox" class="sub_chk" data-id="{{ $spk -> id}}"></ul></td>
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

<script>
  function productDelete(ctl) {
    $(ctl).parents("tr").remove();
}
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
