<?php
function make_slide_indicators($pengumuman){
	$output = '';
	$count = 0;

 	foreach ($pengumuman as $p) {
		if($count == 0){
			   $output .= '<li data-target="#carouselExampleIndicators" data-slide-to="'.$count.'" class="active"></li>';
		}
		else{
			$output .= '<li data-target="#carouselExampleIndicators" data-slide-to="'.$count.'"></li>';
		}
		$count = $count + 1;
	}
	return $output;
}

function make_slides($pengumuman){
	$output = '';
	$count = 0;
	foreach ($pengumuman as $p){
		if($count == 0){
		   $output .= '<div class="carousel-item active">';
		}
		else{
			$output .= '<div class="carousel-item">';
		}
		$output .= '<a href="'.site_url('pengumuman/view/').$p['id'].'"><img class="d-block w-100" src="gallery/'.$p["gambar"].'" alt="'.$p["judul"].'" /><div class="carousel-caption d-none d-md-block"></div></div></a>';
		$count = $count + 1;
 	}
 	return $output;
}
?>
<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-lg-6 col-sm-6">
			<div class="card gradient-7">
				<div class="card-body">
					<h3 class="card-title text-white">Pengguna</h3>
					<div class="d-inline-block">
						<h2 class="text-white">
							<?php $datab = $this->db->query("SELECT id FROM user"); echo $datab->num_rows(); ?></h2>
						<!-- <p class="text-white mb-0">Jan - March 2019</p> -->
					</div>
					<span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6">
			<div class="card gradient-4">
				<div class="card-body">
					<h3 class="card-title text-white">Dokumen</h3>
					<div class="d-inline-block">
						<h2 class="text-white">
							<?php $datab = $this->db->query("SELECT id_dokumen FROM dokumen"); echo $datab->num_rows(); ?>
						</h2>
						<!-- <p class="text-white mb-0">Jan - March 2019</p> -->
					</div>
					<span class="float-right display-5 opacity-5"><i class="fa fa-copy"></i></span>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-sm-6">
			<div class="card gradient-7">
				<div class="card-body">
					<div class="text-center">
						<img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNjQiIGhlaWdodD0iNjQiCnZpZXdCb3g9IjAgMCAxMjggMTI4IgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxwYXRoIGZpbGw9IiNGRkYiIGQ9Ik05NC41LDExMmgtNjFjLTUuNSwwLTEwLTQuNS0xMC0xMFYyMmMwLTUuNSw0LjUtMTAsMTAtMTBoNjFjNS41LDAsMTAsNC41LDEwLDEwdjgwQzEwNC41LDEwNy41LDEwMCwxMTIsOTQuNSwxMTJ6Ij48L3BhdGg+PHBhdGggZmlsbD0iI0M3RDdFMiIgZD0iTTMzLjUgMjJIOTQuNVYzN0gzMy41ek04OC41IDU3aC01MWMtMS43IDAtMy0xLjMtMy0zczEuMy0zIDMtM2g1MWMxLjcgMCAzIDEuMyAzIDNTOTAuMiA1NyA4OC41IDU3ek04OC41IDcyaC01MWMtMS43IDAtMy0xLjMtMy0zczEuMy0zIDMtM2g1MWMxLjcgMCAzIDEuMyAzIDNTOTAuMiA3MiA4OC41IDcyek02NCA4N0gzNy41Yy0xLjcgMC0zLTEuMy0zLTNzMS4zLTMgMy0zSDY0YzEuNyAwIDMgMS4zIDMgM1M2NS43IDg3IDY0IDg3eiI+PC9wYXRoPjxwYXRoIGZpbGw9IiM0NTRCNTQiIGQ9Ik05NC41LDExNWgtNjFjLTcuMiwwLTEzLTUuOC0xMy0xM1YyMmMwLTcuMiw1LjgtMTMsMTMtMTNoNjFjNy4yLDAsMTMsNS44LDEzLDEzdjgwQzEwNy41LDEwOS4yLDEwMS43LDExNSw5NC41LDExNXogTTMzLjUsMTVjLTMuOSwwLTcsMy4xLTcsN3Y4MGMwLDMuOSwzLjEsNyw3LDdoNjFjMy45LDAsNy0zLjEsNy03VjIyYzAtMy45LTMuMS03LTctN0gzMy41eiI+PC9wYXRoPjwvc3ZnPg==">
						<h5 class="mt-3 mb-1"><a href="<?php echo site_url('dokumen/qms_hrga_form') ?>" style="color: black">Form Lembur HO</a></h5>
						<!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6">
			<div class="card gradient-3">
				<div class="card-body">
					<div class="text-center">
						<img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNjQiIGhlaWdodD0iNjQiCnZpZXdCb3g9IjAgMCAxMjggMTI4IgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxwYXRoIGZpbGw9IiNGRkYiIGQ9Ik05NC41LDExMmgtNjFjLTUuNSwwLTEwLTQuNS0xMC0xMFYyMmMwLTUuNSw0LjUtMTAsMTAtMTBoNjFjNS41LDAsMTAsNC41LDEwLDEwdjgwQzEwNC41LDEwNy41LDEwMCwxMTIsOTQuNSwxMTJ6Ij48L3BhdGg+PHBhdGggZmlsbD0iI0M3RDdFMiIgZD0iTTMzLjUgMjJIOTQuNVYzN0gzMy41ek04OC41IDU3aC01MWMtMS43IDAtMy0xLjMtMy0zczEuMy0zIDMtM2g1MWMxLjcgMCAzIDEuMyAzIDNTOTAuMiA1NyA4OC41IDU3ek04OC41IDcyaC01MWMtMS43IDAtMy0xLjMtMy0zczEuMy0zIDMtM2g1MWMxLjcgMCAzIDEuMyAzIDNTOTAuMiA3MiA4OC41IDcyek02NCA4N0gzNy41Yy0xLjcgMC0zLTEuMy0zLTNzMS4zLTMgMy0zSDY0YzEuNyAwIDMgMS4zIDMgM1M2NS43IDg3IDY0IDg3eiI+PC9wYXRoPjxwYXRoIGZpbGw9IiM0NTRCNTQiIGQ9Ik05NC41LDExNWgtNjFjLTcuMiwwLTEzLTUuOC0xMy0xM1YyMmMwLTcuMiw1LjgtMTMsMTMtMTNoNjFjNy4yLDAsMTMsNS44LDEzLDEzdjgwQzEwNy41LDEwOS4yLDEwMS43LDExNSw5NC41LDExNXogTTMzLjUsMTVjLTMuOSwwLTcsMy4xLTcsN3Y4MGMwLDMuOSwzLjEsNyw3LDdoNjFjMy45LDAsNy0zLjEsNy03VjIyYzAtMy45LTMuMS03LTctN0gzMy41eiI+PC9wYXRoPjwvc3ZnPg==">
						<h5 class="mt-3 mb-1"><a href="<?php echo site_url('dokumen/qms_bds_form') ?>" style="color: black">Form Minutes of Meeting</a></h5>
						<!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6">
			<div class="card gradient-4">
				<div class="card-body">
					<div class="text-center">
						<img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNjQiIGhlaWdodD0iNjQiCnZpZXdCb3g9IjAgMCAxMjggMTI4IgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxwYXRoIGZpbGw9IiNGRkYiIGQ9Ik05NC41LDExMmgtNjFjLTUuNSwwLTEwLTQuNS0xMC0xMFYyMmMwLTUuNSw0LjUtMTAsMTAtMTBoNjFjNS41LDAsMTAsNC41LDEwLDEwdjgwQzEwNC41LDEwNy41LDEwMCwxMTIsOTQuNSwxMTJ6Ij48L3BhdGg+PHBhdGggZmlsbD0iI0M3RDdFMiIgZD0iTTMzLjUgMjJIOTQuNVYzN0gzMy41ek04OC41IDU3aC01MWMtMS43IDAtMy0xLjMtMy0zczEuMy0zIDMtM2g1MWMxLjcgMCAzIDEuMyAzIDNTOTAuMiA1NyA4OC41IDU3ek04OC41IDcyaC01MWMtMS43IDAtMy0xLjMtMy0zczEuMy0zIDMtM2g1MWMxLjcgMCAzIDEuMyAzIDNTOTAuMiA3MiA4OC41IDcyek02NCA4N0gzNy41Yy0xLjcgMC0zLTEuMy0zLTNzMS4zLTMgMy0zSDY0YzEuNyAwIDMgMS4zIDMgM1M2NS43IDg3IDY0IDg3eiI+PC9wYXRoPjxwYXRoIGZpbGw9IiM0NTRCNTQiIGQ9Ik05NC41LDExNWgtNjFjLTcuMiwwLTEzLTUuOC0xMy0xM1YyMmMwLTcuMiw1LjgtMTMsMTMtMTNoNjFjNy4yLDAsMTMsNS44LDEzLDEzdjgwQzEwNy41LDEwOS4yLDEwMS43LDExNSw5NC41LDExNXogTTMzLjUsMTVjLTMuOSwwLTcsMy4xLTcsN3Y4MGMwLDMuOSwzLjEsNyw3LDdoNjFjMy45LDAsNy0zLjEsNy03VjIyYzAtMy45LTMuMS03LTctN0gzMy41eiI+PC9wYXRoPjwvc3ZnPg==">
						<h5 class="mt-3 mb-1"><a href="<?php echo site_url('dokumen/qms_bds_form') ?>" style="color: black">Daftar Hadir</a></h5>
						<!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6">
			<div class="card gradient-1">
				<div class="card-body">
					<div class="text-center">
						<img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNjQiIGhlaWdodD0iNjQiCnZpZXdCb3g9IjAgMCAxMjggMTI4IgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxwYXRoIGZpbGw9IiNGRkYiIGQ9Ik05NC41LDExMmgtNjFjLTUuNSwwLTEwLTQuNS0xMC0xMFYyMmMwLTUuNSw0LjUtMTAsMTAtMTBoNjFjNS41LDAsMTAsNC41LDEwLDEwdjgwQzEwNC41LDEwNy41LDEwMCwxMTIsOTQuNSwxMTJ6Ij48L3BhdGg+PHBhdGggZmlsbD0iI0M3RDdFMiIgZD0iTTMzLjUgMjJIOTQuNVYzN0gzMy41ek04OC41IDU3aC01MWMtMS43IDAtMy0xLjMtMy0zczEuMy0zIDMtM2g1MWMxLjcgMCAzIDEuMyAzIDNTOTAuMiA1NyA4OC41IDU3ek04OC41IDcyaC01MWMtMS43IDAtMy0xLjMtMy0zczEuMy0zIDMtM2g1MWMxLjcgMCAzIDEuMyAzIDNTOTAuMiA3MiA4OC41IDcyek02NCA4N0gzNy41Yy0xLjcgMC0zLTEuMy0zLTNzMS4zLTMgMy0zSDY0YzEuNyAwIDMgMS4zIDMgM1M2NS43IDg3IDY0IDg3eiI+PC9wYXRoPjxwYXRoIGZpbGw9IiM0NTRCNTQiIGQ9Ik05NC41LDExNWgtNjFjLTcuMiwwLTEzLTUuOC0xMy0xM1YyMmMwLTcuMiw1LjgtMTMsMTMtMTNoNjFjNy4yLDAsMTMsNS44LDEzLDEzdjgwQzEwNy41LDEwOS4yLDEwMS43LDExNSw5NC41LDExNXogTTMzLjUsMTVjLTMuOSwwLTcsMy4xLTcsN3Y4MGMwLDMuOSwzLjEsNyw3LDdoNjFjMy45LDAsNy0zLjEsNy03VjIyYzAtMy45LTMuMS03LTctN0gzMy41eiI+PC9wYXRoPjwvc3ZnPg==">
						<h5 class="mt-3 mb-1"><a href="<?php echo site_url('dokumen/qms_hrga_form') ?>" style="color: black">Form Permintaan Barang</a></h5>
						<!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-6">
			<div class="card card-primary">
				<div class="card-header">
					<div class="card-title">
						Gallery
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<?php foreach($galeri as $g): ?>
						<div class="col-sm-4">
							<a href="<?php echo site_url('gallery/').$g['file'] ?>" data-toggle="lightbox"
								data-title="<?php echo $g['judul'] ?>" data-gallery="gallery">
								<img src="<?php echo site_url('gallery/').$g['file'] ?>" class="img-fluid mb-2"
									alt="<?php echo $g['judul'] ?>" />
							</a>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<!-- /.card -->
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<div class="card-title">
						Pengumuman
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<?php echo make_slide_indicators($pengumuman); ?>
							</ol>
							<div class="carousel-inner">
								<?php echo make_slides($pengumuman); ?>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
								data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
								data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
	</div>
</div>