<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Karyawan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('karyawan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>NPWP</th>
                            <th>No Telp</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Jabatan</th>
                            <th>Golongan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($karyawan as $k){ ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $k['nip']; ?></td>
                            <td><?php echo $k['nama']; ?></td>
                            <td><?php echo $k['npwp']; ?></td>
                            <td><?php echo $k['no_telp']; ?></td>
                            <td><?php echo $k['jk']; ?></td>
                            <td><?php echo $k['alamat']; ?></td>
                            <td><?php echo $k['jabatan']; ?></td>
                            <td><?php echo $k['golongan']; ?></td>
                            <td align="center">
                                <a href="<?php echo site_url('karyawan/edit/'.$k['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                                <a href="<?php echo site_url('karyawan/remove/'.$k['id']); ?>" onclick="javascriptuser: return confirm('Anda yakin untuk hapus data ini?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
