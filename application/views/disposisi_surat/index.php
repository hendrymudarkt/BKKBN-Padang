<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Disposisi Surat</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('disposisisurat/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Surat Dari</th>
                            <th>Nomor Surat</th>
                            <th>Tgl Surat</th>
                            <th>Perihal</th>
                            <th>Tgl Terima</th>
                            <th>Nomor Agenda</th>
                            <th>Sifat</th>
                            <th>Disposisi Kepala</th>
                            <th>Diteruskan Kepada</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($disposisi_surat as $d){ ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['surat_dari']; ?></td>
                            <td><?php echo $d['nomor_surat']; ?></td>
                            <td><?php echo date("d-m-Y", strtotime($d['tanggal_surat'])); ?></td>
                            <td><?php echo $d['perihal']; ?></td>
                            <td><?php echo date("d-m-Y", strtotime($d['tanggal_terima'])); ?></td>
                            <td><?php echo $d['nomor_agenda']; ?></td>
                            <td><?php echo $d['sifat']; ?></td>
                            <td><?php echo $d['disposisi_kepala']; ?></td>
                            <td><?php echo $d['diteruskan_kepada']; ?></td>
                            <td align="center">
                                <a href="<?php echo site_url('disposisisurat/edit/'.$d['id_disposisi_surat']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('disposisisurat/remove/'.$d['id_disposisi_surat']); ?>" onclick="javascriuser: return confirm('Anda yakin untuk hapus data ini?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
