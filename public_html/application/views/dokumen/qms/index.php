<div class="row page-titles mx-0">
	<div class="col p-md-0">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">QMS</a></li>
		</ol>
	</div>
</div>

<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-lg-3 col-sm-6">
			<div class="card gradient-1">
				<div class="card-body">
					<h3 class="card-title text-white">Marketing</h3>
					<div class="d-inline-block">
						<h2 class="text-white"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE divisi = 'QMS' AND kategori = 'MKT'"); echo $datab->num_rows(); ?></h2>
						<!-- <p class="text-white mb-0">Cek</p> -->
					</div>
					<a href="<?php echo site_url('dokumen/qms_mkt') ?>" style="color: white"><span class="float-right display-5 opacity-5"><i class="fa fa-file"></i></span></a>
				</div>
			</div>
		</div>
		<!-- /.col -->
		<div class="col-lg-3 col-sm-6">
			<div class="card gradient-2">
				<div class="card-body">
					<h3 class="card-title text-white">Operasional</h3>
					<div class="d-inline-block">
						<h2 class="text-white"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE divisi = 'QMS' AND kategori = 'OPS'"); echo $datab->num_rows(); ?></h2>
						<!-- <p class="text-white mb-0">Cek</p> -->
					</div>
					<a href="<?php echo site_url('dokumen/qms_ops') ?>" style="color: white"><span class="float-right display-5 opacity-5"><i class="fa fa-file"></i></span></a>
				</div>
			</div>
		</div>
		<!-- /.col -->
		<div class="col-lg-3 col-sm-6">
			<div class="card gradient-3">
				<div class="card-body">
					<h3 class="card-title text-white">Keuangan</h3>
					<div class="d-inline-block">
						<h2 class="text-white"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE divisi = 'QMS' AND kategori = 'KEU'"); echo $datab->num_rows(); ?></h2>
						<!-- <p class="text-white mb-0">Cek</p> -->
					</div>
					<a href="<?php echo site_url('dokumen/qms_keu') ?>" style="color: white"><span class="float-right display-5 opacity-5"><i class="fa fa-file"></i></span></a>
				</div>
			</div>
		</div>
		<!-- /.col -->
		<div class="col-lg-3 col-sm-6">
			<div class="card gradient-4">
				<div class="card-body">
					<h3 class="card-title text-white">Accounting</h3>
					<div class="d-inline-block">
						<h2 class="text-white"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE divisi = 'QMS' AND kategori = 'ACC'"); echo $datab->num_rows(); ?></h2>
						<!-- <p class="text-white mb-0">Cek</p> -->
					</div>
					<a href="<?php echo site_url('dokumen/qms_acc') ?>" style="color: white"><span class="float-right display-5 opacity-5"><i class="fa fa-file"></i></span></a>
				</div>
			</div>
		</div>
		<!-- /.col -->
		<div class="col-lg-3 col-sm-6">
			<div class="card gradient-5">
				<div class="card-body">
					<h3 class="card-title text-white">SDM & Umum (HRGA)</h3>
					<div class="d-inline-block">
						<h2 class="text-white"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE divisi = 'QMS' AND kategori = 'HRGA'"); echo $datab->num_rows(); ?></h2>
						<!-- <p class="text-white mb-0">Cek</p> -->
					</div>
					<a href="<?php echo site_url('dokumen/qms_hrga') ?>" style="color: white"><span class="float-right display-5 opacity-5"><i class="fa fa-file"></i></span></a>
				</div>
			</div>
		</div>
		<!-- /.col -->
		<div class="col-lg-3 col-sm-6">
			<div class="card gradient-6">
				<div class="card-body">
					<h3 class="card-title text-white">Aset</h3>
					<div class="d-inline-block">
						<h2 class="text-white"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE divisi = 'QMS' AND kategori = 'Aset'"); echo $datab->num_rows(); ?></h2>
						<!-- <p class="text-white mb-0">Cek</p> -->
					</div>
					<a href="<?php echo site_url('dokumen/qms_aset') ?>" style="color: white"><span class="float-right display-5 opacity-5"><i class="fa fa-file"></i></span></a>
				</div>
			</div>
		</div>
		<!-- /.col -->
		<div class="col-lg-6 col-sm-6">
			<div class="card gradient-7">
				<div class="card-body">
					<h3 class="card-title text-white">Bussiness Development & Support</h3>
					<div class="d-inline-block">
						<h2 class="text-white"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE divisi = 'QMS' AND kategori = 'BDS'"); echo $datab->num_rows(); ?></h2>
						<!-- <p class="text-white mb-0">Cek</p> -->
					</div>
					<a href="<?php echo site_url('dokumen/qms_bds') ?>" style="color: white"><span class="float-right display-5 opacity-5"><i class="fa fa-file"></i></span></a>
				</div>
			</div>
		</div>
		<!-- /.col -->
	</div>
</div>