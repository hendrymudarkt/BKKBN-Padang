<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Surat Keluar Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('suratkeluar/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengirim</th>
                            <th>Tanggal</th>
                            <th>Alamat</th>
                            <th>Keringkasan Isi</th>
                            <th>Pertalian Nomor</th>
                            <th>Catatan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($surat_keluar as $s){ ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $s['nama_pengirim']; ?></td>
                            <td><?php echo date("d-m-Y", strtotime($s['tanggal'])); ?></td>
                            <td><?php echo $s['alamat']; ?></td>
                            <td><?php echo $s['isi']; ?></td>
                            <td><?php echo $s['pertalian_nomor']; ?></td>
                            <td><?php echo $s['catatan']; ?></td>
                            <td align="center">
                                <a href="<?php echo site_url('suratkeluar/edit/'.$s['id_surat_keluar']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('suratkeluar/remove/'.$s['id_surat_keluar']); ?>" onclick="javascriuser: return confirm('Anda yakin untuk hapus data ini?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
</div>
