<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 my-2">
            <div class="card">
                <div class="card-header">Data Sekolah</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table cellpadding="2" cellspacing="2" class="table table-bordered table-striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle;">NPSN</th>
                                    <th style="text-align: center; vertical-align: middle;">Status</th>
                                    <th style="text-align: center; vertical-align: middle;">Bentuk Pendidikan</th>
                                    <th style="text-align: center; vertical-align: middle;">Nama Sekolah</th>
                                    <th style="text-align: center; vertical-align: middle;">SK / Tgl Pendirian</th>
                                    <th style="text-align: center; vertical-align: middle;">SK / Tgl Izin Operasional</th>
                                    <th style="text-align: center; vertical-align: middle;">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($data_sekolah as $data)
                                    {
                                        echo "<tr>";      
                                        print "<td>".$data['npsn']."</td>";
                                        print "<td>".$data['status']."</td>";
                                        print "<td>".$data['bentuk_pendidikan']."</td>";
                                        print "<td>".$data['nama_sekolah']."</td>";
                                        print "<td>".$data['sk_pendirian']."/".$data['tgl_pendirian']."</td>";
                                        print "<td>".$data['sk_izin_operasional']."/".$data['tgl_izin_operasional']."</td>";
                                        print "<td>".$data['alamat']." RT/RW ".$data['rt']."/".$data['rw']." Dusun ".$data['dusun']." Desa ".$data['desa']." Kec.".$data['kecamatan']." Kab/Kota ".$data['kabupaten'].", ".$data['provinsi']." - ".$data['kode_pos']."</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?= $this->endSection() ?>
