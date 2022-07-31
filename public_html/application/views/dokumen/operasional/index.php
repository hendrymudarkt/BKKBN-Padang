<div class="row page-titles mx-0">
	<div class="col p-md-0">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Operasional</a></li>
		</ol>
	</div>
</div>

<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-lg-3 col-sm-6">
			<div class="card gradient-1">
				<div class="card-body">
					<h3 class="card-title text-white">Others</h3>
					<div class="d-inline-block">
						<h2 class="text-white"><?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen WHERE divisi = 'Operasional' AND kategori = '...'"); echo $datab->num_rows(); ?></h2>
						<!-- <p class="text-white mb-0">Cek</p> -->
					</div>
					<a href="<?php echo site_url('dokumen/operasional_others') ?>" style="color: white"><span class="float-right display-5 opacity-5"><i class="fa fa-file"></i></span></a>
				</div>
			</div>
		</div>
	</div>
</div>