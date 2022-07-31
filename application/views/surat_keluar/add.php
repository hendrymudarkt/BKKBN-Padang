<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Surat Keluar Add</h3>
            </div>
            <?php echo form_open_multipart('suratkeluar/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-3">
						<label for="nama_pengirim" class="control-label">Nama Pengirim</label>
						<div class="form-group">
							<select name="nama_pengirim" class="form-control" id="nama_pengirim">
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
					<div class="col-md-3">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="date" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" class="form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Nama Penerima</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pertalian_nomor" class="control-label">Pertalian Nomor</label>
						<div class="form-group">
							<input type="text" name="pertalian_nomor" value="<?php echo $this->input->post('pertalian_nomor'); ?>" class="form-control" id="pertalian_nomor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="catatan" class="control-label">Catatan</label>
						<div class="form-group">
							<input type="text" name="catatan" value="<?php echo $this->input->post('catatan'); ?>" class="form-control" id="catatan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lampiran" class="control-label">Lampiran</label>
						<div class="form-group">
							<input type="file" name="lampiran" value="<?php echo $this->input->post('lampiran'); ?>" class="form-control" id="lampiran" />
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