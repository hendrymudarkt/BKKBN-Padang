<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Surat Masuk Edit</h3>
            </div>
			<?php echo form_open_multipart('suratmasuk/edit/'.$surat_masuk['id_surat_masuk']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nomor_berikut" class="control-label">Nomor Berikut</label>
						<div class="form-group">
							<input type="text" name="nomor_berikut" value="<?php echo $surat_masuk['nomor_berikut']; ?>" class="form-control" id="nomor_berikut" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pengirim" class="control-label">Pengirim</label>
						<div class="form-group">
							<input type="text" name="pengirim" value="<?php echo $surat_masuk['pengirim']; ?>"  class="form-control" id="pengirim" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="date" name="tanggal" value="<?php echo $surat_masuk['tanggal']; ?>" class="form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="nomor" class="control-label">Nomor</label>
						<div class="form-group">
							<input type="text" name="nomor" value="<?php echo $surat_masuk['nomor']; ?>" class="form-control" id="nomor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pertalian_nomor" class="control-label">Pertalian Nomor</label>
						<div class="form-group">
							<select name="pertalian_nomor" class="form-control">
								<option value="<?php echo $surat_masuk['pertalian_nomor'] ?>"><?php echo $surat_masuk['pertalian_nomor'] ?></option>
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
							<input type="file" name="lampiran" value="<?php echo $surat_masuk['lampiran']; ?>" class="form-control" id="lampiran" />
							<img src="<?php echo base_url('lampiran/'.$surat_masuk['lampiran']) ?>" height="50%" width="50%">
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email Tujuan</label>
						<div class="form-group">
							<input type="email" name="email" value="<?php echo $surat_masuk['email']; ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="isi" class="control-label">Ringkasan Isi</label>
						<div class="form-group">
							<textarea name="isi" class="form-control"><?php echo $surat_masuk['isi']; ?></textarea>
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