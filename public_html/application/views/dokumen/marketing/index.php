<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Marketing</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Marketing</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-12">
				<div class="info-box">
				<a href="<?php echo site_url('dokumen/marketing_others') ?>" class="info-box-icon bg-info"><i class="far fa-copy"></i></a>

				<div class="info-box-content">
					<span class="info-box-text">Others</span>
					<span class="info-box-number"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE divisi = 'Marketing'"); echo $datab->num_rows(); ?></span>
				</div>
				<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
		</div>
	</div>
</section>
