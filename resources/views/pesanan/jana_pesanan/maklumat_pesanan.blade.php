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
                            <h3 class="card-title">Maklumat Pesanan</h3>
                        </div>
                        <div class="card-body">
                            <p><span style="color:red;">*</span>Sila Isi Semua Maklumat Dibawah :-</p>
                            <form id="formMaklumatPesanan" action="{{ url('simpanMaklumatPesanan') }}" method="GET" enctype="multipart/form-data">
                                <table>
                                    <tr>
                                        <td>Jenis Pesanan</td>
                                        <td>:</td>
                                        <td>
                                            <select name="jenisPesanan" id="jenisPesanan">
                                                <option value="">-- Sila Pilih Pesanan --</option>
                                                <option value="PO">PURCHASE ORDER</option>
                                                <option value="LO">LOCAL ORDER</option>
                                                <option value="SURAT">SURAT PERMOHONAN</option>
                                                <option value="EMAIL">E-MEL</option>
                                                <option value="JV">JOB VERIFICATION</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No Pesanan</td>
                                        <td>:</td>
                                        <td><input type="text" name="noPesanan" id="noPesanan"></td>
                                    </tr>
                                    <tr>
                                        <td>Tarikh Pesanan</td>
                                        <td>:</td>
                                        <td><input type="text" name="tarikhPesanan" id="tarikhPesanan"></td>
                                    </tr>
                                    <tr>
                                        <td>No Sebutharga</td>
                                        <td>:</td>
                                        <td><input type="text" name="noSebutharga" id="noSebutharga"></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pelanggan</td>
                                        <td>:</td>
                                        <td><input type="text" name="namaPelanggan" id="namaPelanggan"></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td><input type="text" name="alamat" id="alamat"></td>
                                    </tr>
                                    <tr>
                                        <td>Untuk Perhatian</td>
                                        <td>:</td>
                                        <td><input type="text" name="utkPerhatian" id="utkPerhatian"></td>
                                    </tr>
                                    <tr>
                                        <td>No. Tel Bimbit</td>
                                        <td>:</td>
                                        <td><input type="text" name="telBimbit" id="telBimbit"></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><input type="text" name="email" id="email"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <input type="checkbox" name="samaDiAtas" id="samaDiAtas"> 
                                            <span style="color:blue;">Sila Tanda Jika Maklumat Penghantaran Sama dengan Diatas</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pelanggan Penghantaran</td>
                                        <td>:</td>
                                        <td><input type="text" name="namaPelangganHantaran" id="namaPelangganHantaran"></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Penghantaran</td>
                                        <td>:</td>
                                        <td><input type="text" name="alamatPelangganHantaran" id="alamatPelangganHantaran"></td>
                                    </tr>
                                    <tr>
                                        <td>Negeri</td>
                                        <td>:</td>
                                        <td>
                                            <select name="negeriPelangganHantaran" id="negeriPelangganHantaran">
                                                <option value="">-- Sila Pilih Negeri --</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Daerah</td>
                                        <td>:</td>
                                        <td>
                                            <select name="daerahPelangganHantaran" id="daerahPelangganHantaran">
                                                <option value="">-- Sila Pilih Daerah --</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Untuk Perhatian</td>
                                        <td>:</td>
                                        <td><input type="text" name="utkPerhatianPelangganHantaran" id="utkPerhatianPelangganHantaran"></td>
                                    </tr>
                                    <tr>
                                        <td>No. Tel Bimbit</td>
                                        <td>:</td>
                                        <td><input type="text" name="telBimbitPelangganHantaran" id="telBimbitPelangganHantaran"></td>
                                    </tr>
                                    <tr>
                                        <td>Catatan</td>
                                        <td>:</td>
                                        <td><input type="text" name="catatan" id="catatan"></td>
                                    </tr>
                                    <tr>
                                        <td>Lampiran Pesanan (Jika Ada)</td>
                                        <td>:</td>
                                        <td>
                                            <input type="file" name="lampiranPesanan" id="lampiranPesanan"><br>
                                            (fail : doc, ppt, xls, pdf, txt, zip, jpeg, gif, png, tif)
                                        </td>
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
            $('#formMaklumatPesanan').submit();
        });
    });
</script>

@stop