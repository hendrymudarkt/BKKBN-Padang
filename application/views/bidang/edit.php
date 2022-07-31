<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Bidang Add</h3>
            </div>
            <?php echo form_open('bidang/edit/'.$bidang['id']); ?>
            <div class="box-body">
              <div class="row clearfix">
                <div class="col-md-6">
                  <label for="nip" class="control-label">NIP</label>
                  <div class="form-group">
                    <select name="nip" class="form-control" id="nip">
                      <option value="<?php echo $bidang['nip'] ?>"><?php echo $bidang['nip'] ?></option>
                      <?php foreach ($karyawan as $k): ?>
                      <option value="<?php echo $k['nip'] ?>"><?php echo $k['nip'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="nama" class="control-label">Nama</label>
                  <div class="form-group">
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $bidang['nama_pegawai'] ?>" readonly />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="golongan" class="control-label">Golongan</label>
                  <div class="form-group">
                    <input type="text" name="golongan" class="form-control" id="golongan" value="<?php echo $bidang['golongan'] ?>" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="jabatan" class="control-label">Jabatan</label>
                  <div class="form-group">
                    <input type="text" name="jabatan" class="form-control" id="jabatan" value="<?php echo $bidang['jabatan'] ?>" readonly>
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