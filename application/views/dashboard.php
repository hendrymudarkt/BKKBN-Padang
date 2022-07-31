<div class="row">
    <div class="col-md-12">
        <div class="box">
            <!-- BAR CHART -->
	          <div class="box box-success">
	            <div class="box-header with-border">
	              <h3 class="box-title">Dashboard</h3>
	              <div class="box-tools pull-right">
	                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	                </button>
	                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	              </div>
	            </div>
	            <div class="box-body">
	              <div class="chart">
	                <div class="col-md-3 col-sm-6 col-xs-12">
			          <div class="info-box">
			            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

			            <div class="info-box-content">
			              <span class="info-box-text">Karyawan</span>
			              <span class="info-box-number"><?php $datab = $this->db->query("SELECT id FROM karyawan"); echo $datab->num_rows(); ?></span>
			            </div>
			            <!-- /.info-box-content -->
			          </div>
			          <!-- /.info-box -->
			        </div>
			        <!-- /.col -->
			        <div class="col-md-3 col-sm-6 col-xs-12">
			          <div class="info-box">
			            <span class="info-box-icon bg-green"><i class="fa fa-building"></i></span>

			            <div class="info-box-content">
			              <span class="info-box-text">Disposisi Surat</span>
			              <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_disposisi_surat FROM disposisi_surat"); echo $datab->num_rows(); ?></span>
			            </div>
			            <!-- /.info-box-content -->
			          </div>
			          <!-- /.info-box -->
			        </div>
			        <!-- /.col -->
			        <div class="col-md-3 col-sm-6 col-xs-12">
			          <div class="info-box">
			            <span class="info-box-icon bg-yellow"><i class="fa fa-copy"></i></span>

			            <div class="info-box-content">
			              <span class="info-box-text">Surat Masuk</span>
			              <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_surat_masuk FROM surat_masuk"); echo $datab->num_rows(); ?></span>
			            </div>
			            <!-- /.info-box-content -->
			          </div>
			          <!-- /.info-box -->
			        </div>
			        <!-- /.col -->
			        <div class="col-md-3 col-sm-6 col-xs-12">
			          <div class="info-box">
			            <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

			            <div class="info-box-content">
			              <span class="info-box-text">Surat Keluar</span>
			              <span class="info-box-number"><?php $datab = $this->db->query("SELECT id_surat_keluar FROM surat_keluar"); echo $datab->num_rows(); ?></span>
			            </div>
			            <!-- /.info-box-content -->
			          </div>
			          <!-- /.info-box -->
			        </div>
	              </div>
	            </div>
	            <!-- /.box-body -->
	            <h3 align="center">SELAMAT DATANG DI DASHBOARD ADMINISTRATOR</h3>
	            <center><img src="<?php echo site_url('resources/img/logo.png');?>" alt="Logo" height="30%" width="30%"></center><br><br><br>
	          </div>
	          <!-- /.box -->
        </div>
    </div>
</div>
