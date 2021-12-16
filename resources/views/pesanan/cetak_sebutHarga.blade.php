<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cetak Sebutharga</h3>
                        </div>
                        <div class="card-body">
                            <table id="table_sebutharga">
                                <thead>
                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Kepada</td>
                                        <td>:</td>
                                        <td>{{ $sebutharga->quotationPelanggan->pelanggan->nama }}</td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td>No Sebutharga</td>
                                        <td>:</td>
                                        <td>{{ $sebutharga->noQuo }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td rowspan="3">
                                            {{ $sebutharga->quotationPelanggan->pelanggan->alamat1 }},
                                            {{ $sebutharga->quotationPelanggan->pelanggan->alamat2 }},
                                            {{ $sebutharga->quotationPelanggan->pelanggan->poskod }},
                                            {{ $sebutharga->quotationPelanggan->pelanggan->daerah->nama }},
                                            {{ $sebutharga->quotationPelanggan->pelanggan->negeri->nama }}
                                        </td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td>Tarikh</td>
                                        <td>:</td>
                                        <td>{{ date('d-m-Y',strtotime($sebutharga->tarikh)) }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td>Tarikh Sah</td>
                                        <td>:</td>
                                        <td>{{ date('d-m-Y',strtotime($sebutharga->tarikhSah)) }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td>Kumpulan</td>
                                        <td>:</td>
                                        <td>{{ $sebutharga->quotationKumpulan->kumpulanDetail->kumpulan }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <table id="table_sebutharga_items">
                                <thead>
                                    <th>BIL</th>
                                    <th>BUTIT BUTIT PERKHIDMATAN</th>
                                    <th>KUANTITI</th>
                                    <th>UNIT HARGA (RM)</th>
                                    <th>HARGA (RM)</th>
                                </thead>
                                <tbody>
                                    <?php
                                    if(count($sebutharga->quotationDetail) > 0){
                                        $bil = 1;
                                        foreach($sebutharga->quotationDetail as $qd){
                                            ?>
                                            <tr>
                                                <td>{{ $bil }}</td>
                                                <td>{{ (isset($qd->profilHargaServis->nama) && !is_null($qd->profilHargaServis->nama) ? $qd->profilHargaServis->nama:"")}}</td>
                                                <td>{{ $qd->kadar }}</td>
                                                <td>
                                                    <?php
                                                    if(isset($qd->profilHargaServis->nama) && !is_null($qd->profilHargaServis->nama)){
                                                        if($qd->profilHargaServis->unitHarga == "" || $qd->profilHargaServis->unitHarga == "-"){
                                                            ?>
                                                            {{ $qd->profilHargaServis->hargaT }}
                                                            <?php
                                                        }else{
                                                            ?>
                                                            {{ $qd->profilHargaServis->hargaY }} / {{ $qd->profilHargaServis->unitHarga }}
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td>{{ $qd->amaun }}</td>
                                            </tr>
                                            <?php
                                            $bil++;
                                        }
                                    }
                                    ?>
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
        
    });
</script>