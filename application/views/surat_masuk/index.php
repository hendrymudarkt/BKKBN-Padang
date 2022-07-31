<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Surat Masuk Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('suratmasuk/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <?php
                // notifikasi
                if($this->session->flashdata('sukses')){
                    echo "<div class='alert alert-dismissable' style='background:#CCFFBD'>";
                    echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo "<p><b><i class='icon fa fa-check'></i> Sukses..!</b></p>";
                    echo $this->session->flashdata('sukses');
                    echo "</div>"; 
                }if($this->session->flashdata('gagal')){
                    echo "<div class='alert alert-dismissable' style='background:#F5D1C4'>";
                    echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo "<p><b><i class='icon fa fa-ban'></i> Gagal..!</b></p>";
                    echo $this->session->flashdata('gagal');
                    echo "</div>"; 
                }
                ?>
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Berikut</th>
                            <th>Pengirim</th>
                            <th>Tanggal</th>
                            <th>Nomor</th>
                            <th>Keringkasan Isi</th>
                            <th>Pertalian Nomor</th>
                            <th>Email Tujuan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($surat_masuk as $s){ ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $s['nomor_berikut']; ?></td>
                            <td><?php echo $s['pengirim']; ?></td>
                            <td><?php echo date("d-m-Y", strtotime($s['tanggal'])); ?></td>
                            <td><?php echo $s['nomor']; ?></td>
                            <td><?php echo $s['isi']; ?></td>
                            <td><?php echo $s['pertalian_nomor']; ?></td>
                            <td><?php echo $s['email']; ?></td>
                            <td align="center">
                                <?php if ($s['status'] == 'f'){ ?>
                                <a href="<?php echo site_url('suratmasuk/edit/'.$s['id_surat_masuk']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a> 
                                <a href="<?php echo site_url('suratmasuk/remove/'.$s['id_surat_masuk']); ?>" onclick="javascriuser: return confirm('Anda yakin untuk hapus data ini?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                                <a href="<?php echo site_url('suratmasuk/send_email/'.$s['id_surat_masuk']); ?>" class="btn btn-success btn-xs"><span class="fa fa-send"></span>
                                <a href="<?php echo site_url('suratmasuk/confirm/'.$s['id_surat_masuk']); ?>" class="btn btn-default btn-xs"><span class="fa fa-check"></span></a>
                                <?php }else{
                                    echo ""; }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
</div>
