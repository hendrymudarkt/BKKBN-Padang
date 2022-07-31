<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Karyawan Add</h3>
            </div>
            <?php echo form_open('karyawan/add'); ?>
            <div class="box-body">
              <div class="row clearfix">
                <div class="col-md-6">
                  <label for="nip" class="control-label">NIP</label>
                  <div class="form-group">
                    <input type="text" name="nip" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="nama" class="control-label">Nama</label>
                  <div class="form-group">
                    <input type="text" name="nama" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="npwp" class="control-label">NPWP</label>
                  <div class="form-group">
                    <input type="text" name="npwp" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="no_telp" class="control-label">No Telp</label>
                  <div class="form-group">
                    <input type="text" name="no_telp" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="jk" class="control-label">Jenis Kelamin</label>
                  <div class="form-group">
                    <select name="jk" class="form-control">
                      <option value="0">...</option>
                      <option value="L">L</option>
                      <option value="P">P</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="alamat" class="control-label">Alamat</label>
                  <div class="form-group">
                    <input type="text" name="alamat" class="form-control" />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="jabatan" class="control-label">Jabatan</label>
                  <div class="form-group">
                    <select name="jabatan" class="form-control">
                      <option value="0">...</option>
                      <option value="Kepala Perwakilan BKKBN Provinsi">Kepala Perwakilan BKKBN Provinsi</option>
                      <option value="Sekretaris">Sekretaris</option>
                      <option value="Administrator">Administrator</option>
                      <option value="Kabid Dalduk">Kabid Dalduk</option>
                      <option value="Kabid KS/PK">Kabid KS/PK</option>
                      <option value="Kabid KB/KR">Kabid KB/KR</option>
                      <option value="Kabid Advokasi dan Komunikasi, Informasi dan Advokasi">Kabid Advokasi dan Komunikasi, Informasi dan Advokasi</option>
                      <option value="Kabid BKB, Anak dan KKL">Kabid BKB, Anak dan KKL</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="golongan" class="control-label">Golongan</label>
                  <div class="form-group">
                    <select name="golongan" class="form-control">
                      <option value="0">...</option>
                      <option value="I/a">I/a</option>
                      <option value="I/b">I/b</option>
                      <option value="I/c">I/c</option>
                      <option value="I/d">I/d</option>
                      <option value="II/a">II/a</option>
                      <option value="II/b">II/b</option>
                      <option value="II/c">II/c</option>
                      <option value="II/d">II/d</option>
                      <option value="III/a">III/a</option>
                      <option value="III/b">III/b</option>
                      <option value="III/c">III/c</option>
                      <option value="III/d">III/d</option>
                      <option value="IV/a">IV/a</option>
                      <option value="IV/b">IV/b</option>
                      <option value="IV/c">IV/c</option>
                      <option value="IV/d">IV/d</option>
                    </select>
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