<div class="row page-titles mx-0">
	<div class="col p-md-0">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)">Keuangan</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Others</a></li>
		</ol>
	</div>
</div>

<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Data Others</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
				<div class="table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>Jenis Dokumen</th>
								<th>Judul</th>
								<th>Tgl Berlaku</th>
								<?php if($this->session->userdata('level') == 1){
									echo "";
								} else {
									echo "<th>File</th>";
								} ?>
								<th>Pemilik Dokumen</th>
								<?php if($this->session->userdata('level') == 1){
									echo "<th>Aksi</th>";
								} else {
									echo "";
								} ?>
							</tr>
						</thead>
						<tbody id="show_data"></tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo site_url('dist/js/jquery.min.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function () {
		function reload_table(){
			$(window).error(function(){
				return true;
			});
			$('#example1').DataTable().ajax.reload();
		}

		tampil_data_pengguna();
		$('#mydata').dataTable({
			"language": {
					"sEmptyTable": "Tidak ada data yang tersedia pada tabel ini",
					"sProcessing": "Sedang memproses...",
					"sLengthMenu": "Tampilkan _MENU_ entri",
					"sZeroRecords": "Tidak ditemukan data yang sesuai",
					"sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
					"sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
					"sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
					"sInfoPostFix": "",
					"sSearch": "Cari:",
					"sUrl": "",
					"oPaginate": {
						"sFirst": "Pertama",
						"sPrevious": "Sebelumnya",
						"sNext": "Selanjutnya",
						"sLast": "Terakhir"
					}
				}
		});

		function tampil_data_pengguna() {
			urll = '<?php echo site_url('dokumen/view/') ?>';
			$.ajax({
				type: 'GET',
				url: '<?php echo site_url("dokumen/data_keuangan_others") ?>',
				async: false,
				dataType: 'json',
				success: function (data) {
					var html = '';
					var i;
					var no = 1;
					for (i = 0; i < data.length; i++) {
						<?php if($this->session->userdata('level') == 1){ ?>
						html += '<tr>' +
							'<td align="center">' + no++ + '</td>' +
							'<td>' + data[i].jenis_dokumen + '</td>' +
							'<td>' + data[i].judul + '</td>' +
							'<td>' + data[i].tanggal + '</td>' +
							'<td>' + data[i].owner + '</td>' +
							'<td align="center">' +
							'<a href="javascript:;" data="' +
							data[i].id_dokumen +
							'" class="btn btn-icon btn-sm btn-success item_edit"><i class="fa fa-edit"></i></a>' +
							' ' +
							'<a href="javascript:;" data="' +
							data[i].id_dokumen +
							'" class="btn btn-icon btn-sm btn-danger item_hapus"><i class="fa fa-trash"></i></a>' +
							' <a href="' + urll + data[i].file + '" data="' +
							data[i].id_dokumen +
							'" class="btn btn-icon btn-sm btn-primary item_pdf"><i class="fa fa-eye"></i></a>'
							'</td>' +
							'</tr>';
						<?php } else { ?>
							html += '<tr>' +
							'<td align="center">' + no++ + '</td>' +
							'<td>' + data[i].jenis_dokumen + '</td>' +
							'<td>' + data[i].judul + '</td>' +
							'<td>' + data[i].tanggal + '</td>' +
							'<td align="center"><a href="' + urll + data[i].file + '" data="' +
							data[i].id_dokumen +
							'" class="btn btn-icon btn-sm btn-primary item_pdf"><i class="fa fa-eye"></i></a> </td>' +
							'<td>' + data[i].owner + '</td>' +
							'</tr>';
						<?php } ?>
					}
					$('#show_data').html(html);
				}

			});
		}
	});

</script>
