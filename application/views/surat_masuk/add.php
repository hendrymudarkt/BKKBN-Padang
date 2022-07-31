<?php
$data = $this->db->query("SELECT max(nomor_berikut) as maxKode FROM surat_masuk")->row_array();
$nomor = $data['maxKode'];
$noUrut = (int) substr($nomor, 2, 2);
$noUrut++;
$char = "";
$nomor = $char . sprintf("%03s", $noUrut);
?>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Surat Masuk Add</h3>
            </div>
            <?php echo form_open_multipart('suratmasuk/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nomor_berikut" class="control-label">Nomor Berikut</label>
						<div class="form-group">
							<input type="text" name="nomor_berikut" value="<?php echo $nomor; ?>" class="form-control" id="nomor_berikut" readonly />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pengirim" class="control-label">Pengirim</label>
						<div class="form-group">
							<input type="text" name="pengirim" value="<?php echo $this->input->post('pengirim'); ?>" class="form-control" id="pengirim" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="date" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" class="form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="nomor" class="control-label">Nomor</label>
						<div class="form-group">
							<input type="text" name="nomor" value="<?php echo $this->input->post('nomor'); ?>" class="form-control" id="nomor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pertalian_nomor" class="control-label">Pertalian Nomor</label>
						<div class="form-group">
							<select name="pertalian_nomor" class="form-control">
								<option value="0">...</option>
								<option value="Kepala Bidang KB/KR">Kepala Bidang KB/KR</option>
								<option value="Kepala Bidang KS/PK">Kepala Bidang KS/PK</option>
								<option value="Kepala Bidang ADPIN">Kepala Bidang ADPIN</option>
								<option value="Kepala Bidang DALDUK">Kepala Bidang DALDUK</option>
								<option value="Kepala Bidang LATBANG">Kepala Bidang LATBANG</option>
								<option value="Sekretaris">Sekretaris</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lampiran" class="control-label">Lampiran</label>
						<div class="form-group">
							<input type="file" name="lampiran" value="<?php echo $this->input->post('lampiran'); ?>" class="form-control" id="lampiran" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email Tujuan</label>
						<div class="form-group">
							<input type="email" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="isi" class="control-label">Ringkasan Isi</label>
						<div class="form-group">
							<textarea name="isi" class="form-control"></textarea>
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