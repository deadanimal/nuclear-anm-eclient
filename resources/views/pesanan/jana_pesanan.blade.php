@extends('layouts.farhanmenu')

@section('content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jana Pesanan</h3>
                        </div>
                        <div class="card-body">
                            <form id="form_search_pesanan" method="POST" action="carian_pesanan">
                                <div class="form-group row">
                                    <label for="no_sebutharga">No Serbutharga: NM/QUO/</label>
                                    <input type="text" name="no_sebutharga" id="no_sebutharga">
                                </div>
                                <div class="form-group row">
                                    <button type="button" id="btn_cari_pesanan">Cari</button>
                                </div>
                            </form>
                            <table id="table_pesanan">
                                <thead>
                                    <tr>
                                        <th>BIL</th>
                                        <th>NAMA PELANGGAN</th>
                                        <th>NO SEBUTHARGA</th>
                                    </tr>
                                </thead>
                                <tbody id="table_pesanan_body">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function(){
        $('#table_pesanan').hide();
        
        $(document).on("click", "#btn_cari_pesanan", function() {
            var no_sebutharga = $('#no_sebutharga').val();

            $.ajax({
                    method: "POST",
                    url: "cari_sebutharga",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "no_sebutharga": no_sebutharga
                    },
                })
                .done(function(response) {
                    var data = jQuery.parseJSON(response);
                    var counter = 1;
                    $('#table_pesanan').show();
                    $.each(data.sebutharga, function(index, value) {
                        $('#table_pesanan_body').append('<tr><td>'+counter+'</td><td><a href="#">'+value.noQuo+'</a></td><td><a href="{{ url('cetakSebutHarga') }}/'+value.id+'" target="blank">'+value.noQuo+'</a></td></tr>');
                        counter++;
                    });
                });

            validateForm();
        });
    });
</script>

@stop