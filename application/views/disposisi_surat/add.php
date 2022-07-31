<?php
$data = $this->db->query("SELECT max(nomor_agenda) as maxKode FROM disposisi_surat")->row_array();
$nomor = $data['maxKode'];
$noUrut = (int) substr($nomor, 3, 3);
$noUrut++;
$char = "NAG";
$nomor = $char . sprintf("%03s", $noUrut);
?>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Disposisi Surat Add</h3>
            </div>
            <?php echo form_open_multipart('disposisisurat/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="surat_dari" class="control-label">Surat Dari</label>
						<div class="form-group">
							<select name="surat_dari" class="form-control" id="id_surat_dari">
								<option value="0">...</option>
								<?php
								foreach ($surat_masuk as $sm) {
									echo "<option value='".$sm['nomor_berikut']."'>".$sm['nomor_berikut']."</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_surat" class="control-label">Nomor Surat</label>
						<div class="form-group">
							<input type="text" name="no_surat" class="form-control" id="no_surat" readonly />
						</div>
					</div>
					<div class="col-md-3">
						<label for="tanggal_surat" class="control-label">Tanggal Surat</label>
						<div class="form-group">
							<input type="date" name="tanggal_surat" class="form-control" id="tanggal_surat" readonly />
						</div>
					</div>
					<div class="col-md-3">
						<label for="tanggal_terima" class="control-label">Tanggal Terima</label>
						<div class="form-group">
							<input type="date" name="tanggal_terima" value="<?php echo $this->input->post('tanggal_terima'); ?>" class="form-control" id="tanggal_terima" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="perihal" class="control-label">Perihal</label>
						<div class="form-group">
							<input type="text" name="perihal" class="form-control" id="perihal" readonly />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomor_agenda" class="control-label">Nomor Agenda</label>
						<div class="form-group">
							<input type="text" name="nomor_agenda" value="<?php echo $nomor; ?>" class="form-control" id="nomor_agenda" readonly />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sifat" class="control-label">Sifat</label>
						<div class="form-group">
							<select name="sifat" class="form-control">
								<option value="0">...</option>
								<option value="Umum">Umum</option>
								<option value="Rahasia">Rahasia</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="disposisi_kepala" class="control-label">Disposisi Kepala</label>
						<div class="form-group">
							<input type="checkbox" name="disposisi_kepala[]" value="Simpan/Arsipkan"> Simpan/Arsipkan<br>
							<input type="checkbox" name="disposisi_kepala[]" value="Telaah/Beri Penjelasan/Salah"> Telaah/Beri Penjelasan/Salah<br>
							<input type="checkbox" name="disposisi_kepala[]" value="Proses Lebih Lanjut"> Proses Lebih Lanjut<br>
							<input type="checkbox" name="disposisi_kepala[]" value="Bicarakan/Laporan Kepala/Laksanakan"> Bicarakan/Laporan Kepala/Laksanakan<br>
							<input type="checkbox" name="disposisi_kepala[]" value="Acc/Buat Tanggap"> Acc/Buat Tanggap<br>
							<input type="checkbox" name="disposisi_kepala[]" value="Koreksi/Sempurnakan"> Koreksi/Sempurnakan<br>
							<input type="checkbox" name="disposisi_kepala[]" value="UMP"> UMP
						</div>
					</div>
					<div class="col-md-6">
						<label for="diteruskan_kepada" class="control-label">Diteruskan Kepada</label>
						<div class="form-group">
							<input type="checkbox" name="diteruskan_kepada[]" value="Kepala Bidang KB/KR"> Kepala Bidang KB/KR<br>
							<input type="checkbox" name="diteruskan_kepada[]" value="Kepala Bidang KS/PK"> Kepala Bidang KS/PK<br>
							<input type="checkbox" name="diteruskan_kepada[]" value="Kepala Bidang ADPIN"> Kepala Bidang ADPIN<br>
							<input type="checkbox" name="diteruskan_kepada[]" value="Kepala Bidang DALDUK"> Kepala Bidang DALDUK<br>
							<input type="checkbox" name="diteruskan_kepada[]" value="Kepala Bidang LATBANG"> Kepala Bidang LATBANG<br>
							<input type="checkbox" name="diteruskan_kepada[]" value="Sekretaris"> Sekretaris
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>