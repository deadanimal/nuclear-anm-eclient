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
                            <h3 class="card-title">Senarai Pesanan</h3>
                        </div>
                        <div class="card-body">
                            <form id="form_search_pesanan" method="POST" action="carian_pesanan">
                                <div class="form-group row">
                                    <label for="pusat_khidmat">Pusat Khidmat</label>
                                    <select name="pusat_khidmat" id="pusat_khidmat">
                                        <option value="">Pilih...</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label for="no_sebutharga">No Serbutharga</label>
                                    <input type="text" name="no_sebutharga" id="no_sebutharga">
                                </div>
                                <div class="form-group row">
                                    <label for="no_pesanan">No Pesanan</label>
                                    <input type="text" name="no_pesanan" id="no_pesanan">
                                </div>
                                <div class="form-group row">
                                    <button type="button">Cari</button>
                                </div>
                            </form>
                            
                            <table id="table_pesanan">
                                <thead>
                                    <tr>
                                        <th>BIL</th>
                                        <th>NAMA PELANGGAN</th>
                                        <th>NO PESANAN</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(!empty($pesanan)){
                                        $counter = 1;
                                        foreach($pesanan as $p){
                                            if(is_null($p->profilSyarikat)){ //temp condition
                                                continue;
                                            }
                                            ?>
                                            <tr> 
                                                <td>{{ $counter }}</td>
                                                <td>{{ (!is_null($p->profilSyarikat) ? $p->profilSyarikat->nama:"-"); }}</td>
                                                <td><a href="#">{{ $p->noOrder }}</a></td>
                                                <td>{{ $p->idStatusOrder }}</td>
                                            </tr>
                                            <?php
                                            $counter++;
                                        }
                                    }else{
                                        ?><tr><td colspan="5">xde record</td></tr><?php
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

@stop