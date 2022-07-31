<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Jenis Administrasi Add</h3>
            </div>
            <?php echo form_open('jenis_administrasi/add'); ?>
            <div class="box-body">
              <div class="row clearfix">
                <div class="col-md-6">
                  <label for="nip" class="control-label">NIP</label>
                  <div class="form-group">
                    <select name="nip" class="form-control" id="ja_nip">
                      <option value="0">...</option>
                      <?php foreach ($karyawan as $k): ?>
                      <option value="<?php echo $k['nip'] ?>"><?php echo $k['nip'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="jabatan" class="control-label">Jabatan</label>
                  <div class="form-group">
                    <input type="text" name="jabatan" class="form-control" id="jabatan" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="username" class="control-label">Username</label>
                  <div class="form-group">
                    <input type="text" name="username" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="password" class="control-label">Password</label>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control" />
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