<div class="row">
    <div class="col-md-12">
        <div class="box">
	          <div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Laporan Surat Masuk</h3>

	              <div class="box-tools pull-right">
	                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	                </button>
	                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	              </div>
	            </div>
	            <div class="box-body" style="overflow-x:auto;">
	              <div class="chart">
	              	<form method="post">
	                    <table align="center" class="hidden-print">
	                        <tr>
	                            <td><select name="bulan" class="form-control">
	                                <?php
	                                for ($i=0; $i <= 12; $i++) { 
	                                    switch ($i){
	                                        case 0:
	                                        $namabulan="Bulan";
	                                        break;
	                                        case 1:
	                                        $namabulan="Januari";
	                                        break;
	                                        case 2:
	                                        $namabulan="Februari";
	                                        break;
	                                        case 3:
	                                        $namabulan="Maret";
	                                        break;
	                                        case 4:
	                                        $namabulan="April";
	                                        break;
	                                        case 5:
	                                        $namabulan="Mei";
	                                        break;
	                                        case 6:
	                                        $namabulan="Juni";
	                                        break;
	                                        case 7:
	                                        $namabulan="Juli";
	                                        break;
	                                        case 8:
	                                        $namabulan="Agustus";
	                                        break;
	                                        case 9:
	                                        $namabulan="September";
	                                        break;
	                                        case 10:
	                                        $namabulan="Oktober";
	                                        break;
	                                        case 11:
	                                        $namabulan="November";
	                                        break;
	                                        case 12:
	                                        $namabulan="Desember";
	                                        break;
	                                    }
	                                    echo "<option value='$i'>$namabulan</option>";
	                                }
	                                ?>
	                            </select></td>
	                            <td>&nbsp;</td>
	                            <td><select name="tahun" class="form-control" onchange="this.form>submit();">
			                            <option value="0000">Tahun</option>
			                            <?php
			                            $sql = $this->db->query("SELECT tanggal FROM surat_masuk LIMIT 1")->result_array();
			                            foreach($sql as $s){
			                                $data = explode('-',$s['tanggal']);
			                                $tahun = $data[0];
			                                echo "<option value='$tahun'>$tahun</option>";
			                            }
			                            ?>
			                        </select></td>
	                            <td>&nbsp;</td>
	                            <td><button class="btn btn-primary" name="cetak" onclick="printContent('div1')">
	                                    <i class="fa fa-print"></i> Cetak
	                                </button></td>
	                        </tr>
	                    </table>
	                </form>
	              </div>
	              <div id="div1">
	                <?php
	                    switch (@$_POST['bulan']){
	                        case 0:
	                            $namabulan="Bulan";
	                        break;
	                        case 1:
	                            $namabulan="Januari";
	                        break;
	                        case 2:
	                            $namabulan="Februari";
	                        break;
	                        case 3:
	                            $namabulan="Maret";
	                        break;
	                        case 4:
	                            $namabulan="April";
	                        break;
	                        case 5:
	                            $namabulan="Mei";
	                        break;
	                        case 6:
	                            $namabulan="Juni";
	                        break;
	                        case 7:
	                            $namabulan="Juli";
	                        break;
	                        case 8:
	                            $namabulan="Agustus";
	                        break;
	                        case 9:
	                            $namabulan="September";
	                        break;
	                        case 10:
	                            $namabulan="Oktober";
	                        break;
	                        case 11:
	                            $namabulan="November";
	                        break;
	                        case 12:
	                            $namabulan="Desember";
	                        break;
	                    }

	                if (isset($_POST['tahun'])) { ?>
	                	<center><img src="<?php echo site_url('resources/img/logo.png');?>" alt="Logo" height="20%" width="20%"></center>
	                	<h6 align="center">PERWAKILAN BADAN KEPENDUDUKAN KELUARGA BERENCANA NASIONAL<br>PROVINSI SUMATERA BARAT</h6>
	                	<hr><hr>
	                    <p align="center">LAPORAN REKAP SURAT</p>
	                    <table>
	                    	<tr>
	                    		<td>Perbulan</td>
	                    		<td>:</td>
	                    		<td>&nbsp;<?php echo $namabulan ?> Tahun <?php echo $_POST['tahun'] ?></td>
	                    	</tr>
	                    	<tr>
	                    		<td>Jenis Surat</td>
	                    		<td>:</td>
	                    		<td>&nbsp;Surat Masuk</td>
	                    	</tr>
	                    </table>
	                    <table class="table table-striped table-bordered table-responsive" align="center">
	                        <thead>
	                            <tr>
	                                <th>No</th>
		                            <th>Nomor Berikut</th>
		                            <th>Pengirim</th>
		                            <th>Tanggal</th>
		                            <th>Nomor</th>
		                            <th>Keringkasan Isi</th>
		                            <th>Pertalian Nomor</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php $no=1;
	                            $surat_masuk = $this->db->query("SELECT * FROM surat_masuk WHERE MONTH(tanggal) = '$_POST[bulan]' AND YEAR(tanggal) = '$_POST[tahun]'")->result_array();
	                            foreach($surat_masuk as $s){ ?>
		                        <tr>
		                            <td><?php echo $no++; ?></td>
		                            <td><?php echo $s['nomor_berikut']; ?></td>
		                            <td><?php echo $s['pengirim']; ?></td>
		                            <td><?php echo date("d-m-Y", strtotime($s['tanggal'])); ?></td>
		                            <td><?php echo $s['nomor']; ?></td>
		                            <td><?php echo $s['isi']; ?></td>
		                            <td><?php echo $s['pertalian_nomor']; ?></td>
		                        </tr>
		                    <?php } ?>
	                        </tbody>
	                    </table><br><br><br>
	                    <table>
	                    	<tr>
	                    		<td>Perbulan</td>
	                    		<td>:</td>
	                    		<td>&nbsp;<?php echo $namabulan ?> Tahun <?php echo $_POST['tahun'] ?></td>
	                    	</tr>
	                    	<tr>
	                    		<td>Jenis Surat</td>
	                    		<td>:</td>
	                    		<td>&nbsp;Surat Keluar</td>
	                    	</tr>
	                    </table>
	                    <table class="table table-striped table-bordered table-responsive" align="center">
	                        <thead>
	                            <tr>
	                                <th rowspan="2" class="text-center" style="vertical-align: middle">No</th>
		                            <th rowspan="2" class="text-center" style="vertical-align: middle">Tanggal</th>
		                            <th rowspan="2" class="text-center" style="vertical-align: middle">Alamat</th>
		                            <th rowspan="2" class="text-center" style="vertical-align: middle">Keringkasan Isi</th>
		                            <th colspan="2" class="text-center">Pertalian Nomor</th>
		                            <th rowspan="2" class="text-center" style="vertical-align: middle">Catatan</th>
	                            </tr>
	                            <tr>
		                            <th class="text-center">Terdahulu</th>
		                            <th class="text-center">Berikut</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php $no=1;
	                            $surat_masuk = $this->db->query("SELECT * FROM surat_keluar WHERE MONTH(tanggal) = '$_POST[bulan]' AND YEAR(tanggal) = '$_POST[tahun]'")->result_array();
	                            foreach($surat_masuk as $s){ ?>
		                        <tr>
		                            <td><?php echo $no++; ?></td>
		                            <td><?php echo date("d-m-Y", strtotime($s['tanggal'])); ?></td>
		                            <td><?php echo $s['alamat']; ?></td>
		                            <td><?php echo $s['isi']; ?></td>
		                            <td colspan="2"><?php echo $s['pertalian_nomor']; ?></td>
		                            <td><?php echo $s['catatan']; ?></td>
		                        </tr>
		                    <?php } ?>
	                        </tbody>
	                    </table><br><br>
	                <?php
	                } ?>
	                    <div class="pull-right">
	                    	<table>
	                    		<tr>
	                    			<td align="center" colspan="3">PERWAKILAN BKKBN PROVINSI SUMATERA BARAT</td>
	                    		</tr>
	                    		<tr>
	                    			<td align="center" colspan="3">KEPALA</td>
	                    		</tr>
	                    		<tr>
	                    			<td align="center" colspan="3">&nbsp;</td>
	                    		</tr>
	                    		<tr>
	                    			<td align="center" colspan="3">&nbsp;</td>
	                    		</tr>
	                    		<tr>
	                    			<td align="center" colspan="3">&nbsp;</td>
	                    		</tr>
	                    		<tr>
	                    			<td align="center" colspan="3">..................................................................</td>
	                    		</tr>
	                    	</table>
	                    </div>
	            </div>
	            </div>
	          </div>
        </div>
    </div>
</div>