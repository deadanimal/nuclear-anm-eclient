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
                            <h3 class="card-title">Pesanan Terperinci</h3>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>NO PESANAN</td>
                                    <td>:</td>
                                    <td>ftest</td>
                                </tr>
                                <tr>
                                    <td>NO SEBUTHARGA</td>
                                    <td>:</td>
                                    <td>ftest</td>
                                </tr>
                                <tr>
                                    <td>NAMA PELANGGAN</td>
                                    <td>:</td>
                                    <td>ftest</td>
                                </tr><tr>
                                    <td>ALAMAT PELANGGAN</td>
                                    <td>:</td>
                                    <td>ftest</td>
                                </tr>
                            </table>
                            <br><br>
                            <form id="formMaklumatPesanan" action="{{ url('simpanPesananTerperinci') }}" method="POST" enctype="multipart/form-data">    
                                <table style="width:100%;">
                                    <tr>
                                        <td colspan="5" style="text-align:center;">MAKLUMAT SEBUTHARGA</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align:center;">JUMLAH KHIDMAT / PRODUK : ftest</td>
                                    </tr>
                                </table>
                                <button type="button" id="btnSubmit">SETERUSNYA</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function(){
        $(document).on('click','#btnSubmit',function(){
            
        });
    });
</script>

@stop