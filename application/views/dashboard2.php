<div class="row">
    <div class="col-md-12">
        <div class="box">
            <!-- BAR CHART -->
	          <div class="box box-success">
	            <div class="box-header with-border">
	              <h3 class="box-title">Nilai Try Out</h3>
	              <div class="box-tools pull-right">
	                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	                </button>
	                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	              </div>
	            </div>
	            <div class="box-body">
	              <table class="table table-bordered">
	              	<thead>
	              		<tr>
	              			<th>No</th>
	              			<th>Mata Pelajaran</th>
	              			<th>Benar</th>
	              			<th>Salah</th>
	              			<th>Nilai</th>
	              		</tr>
	              	</thead>
	              	<tbody>
	              		<tr>
	              			<td>1</td>
	              			<td>Bahasa Indonesia</td>
	              			<td><?php
	              				$dataBI = $this->db->query("SELECT * FROM soal")->result_array();
	              				foreach ($dataBI as $BI) {
	              					$jawabBI = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$BI[id_soal]' AND jawab = '$BI[jawaban]' AND jenis_soal = '1'");
	              					@$totalBI += $jawabBI->num_rows();
	              				}
	              				$soalBI = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '1'");
	              				$jawabBI = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '1'");
	              				$sBI = $soalBI->num_rows();
	              				$jBI = $jawabBI->num_rows();
	              				if ($sBI == 0) {
	              					echo 0;
	              				}
	              				elseif ($jBI == 0) {
	              					echo 0;
	              				}else{
	              					echo $totalBI;
	              				}
	              			?></td>
	              			<td><?php
	              				$dataBIS = $this->db->query("SELECT * FROM soal")->result_array();
	              				foreach ($dataBIS as $BIS) {
	              					$jawabBIS = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$BIS[id_soal]' AND jawab != '$BIS[jawaban]' AND jenis_soal = '1'");
	              					@$totalBIS += $jawabBIS->num_rows();
	              				}
	              				$soalBIS = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '1'");
	              				$jawabBIS = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '1'");
	              				$sBIS = $soalBIS->num_rows();
	              				$jBIS = $jawabBIS->num_rows();
	              				if ($sBIS == 0) {
	              					echo 0;
	              				}
	              				elseif ($jBIS == 0) {
	              					echo 0;
	              				}else{
	              					echo $totalBIS;
	              				}
	              			?></td>
	              			<td><?php
	              				$dataBI2 = $this->db->query("SELECT * FROM soal")->result_array();
	              				foreach ($dataBI2 as $BI2) {
	              					$jawabBI2 = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$BI2[id_soal]' AND jawab = '$BI2[jawaban]' AND jenis_soal = '1'");
	              					@$totalBI2 += $jawabBI2->num_rows();
	              				}
	              				$soalBI2 = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '1'");
	              				$jwbBI = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '1'");
	              				$sBI2 = $soalBI2->num_rows();
	              				$jBI2 = $jwbBI->num_rows();
	              				if ($sBI2 == 0) {
	              					echo 0;
	              				}
	              				elseif ($jBI2 == 0) {
	              					echo 0;
	              				}else{
	              					echo (100/$sBI2) * $totalBI2;
	              				}
	              			?></td>
	              		</tr>
	              		<tr>
	              			<td>2</td>
	              			<td>Bahasa Inggris</td>
	              			<td><?php
	              				$dataBE = $this->db->query("SELECT * FROM soal")->result_array();
	              				foreach ($dataBE as $BE) {
	              					$jawabBE = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$BE[id_soal]' AND jawab = '$BE[jawaban]' AND jenis_soal = '2'");
	              					@$totalBE += $jawabBE->num_rows();
	              				}
	              				$soalBE = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '2'");
	              				$jawabBE = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '2'");
	              				$sBE = $soalBE->num_rows();
	              				$jBE = $jawabBE->num_rows();
	              				if ($sBE == 0) {
	              					echo 0;
	              				}
	              				elseif ($jBE == 0) {
	              					echo 0;
	              				}else{
	              					echo $totalBE;
	              				}
	              			?></td>
	              			<td><?php
	              				$dataBES = $this->db->query("SELECT * FROM soal")->result_array();
	              				foreach ($dataBES as $BES) {
	              					$jawabBES = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$BES[id_soal]' AND jawab != '$BES[jawaban]' AND jenis_soal = '1'");
	              					@$totalBES += $jawabBES->num_rows();
	              				}
	              				$soalBES = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '1'");
	              				$jawabBES = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '1'");
	              				$sBES = $soalBES->num_rows();
	              				$jBES = $jawabBES->num_rows();
	              				if ($sBES == 0) {
	              					echo 0;
	              				}
	              				elseif ($jBES == 0) {
	              					echo 0;
	              				}else{
	              					echo $totalBES;
	              				}
	              			?></td>
	              			<td><?php
	              				$dataBE2 = $this->db->query("SELECT * FROM soal")->result_array();
	              				foreach ($dataBE2 as $BE2) {
	              					$jawabBE2 = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$BE2[id_soal]' AND jawab = '$BE2[jawaban]' AND jenis_soal = '2'");
	              					@$totalBE2 += $jawabBE2->num_rows();
	              				}
	              				$soalBE2 = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '2'");
	              				$jwbBE = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '2'");
	              				$sBE2 = $soalBE2->num_rows();
	              				$jBE2 = $jwbBE->num_rows();
	              				if ($sBE2 == 0) {
	              					echo 0;
	              				}
	              				elseif ($jBE2 == 0) {
	              					echo 0;
	              				}else{
	              					echo (100/$sBE2) * $totalBE2;
	              				}
	              			?></td>
	              		</tr>
	              		<tr>
	              			<td>3</td>
	              			<td>IPA</td>
	              			<td><?php
	              				$dataIPA = $this->db->query("SELECT * FROM soal")->result_array();
	              				foreach ($dataIPA as $IPA) {
	              					$jawabIPA = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$IPA[id_soal]' AND jawab = '$IPA[jawaban]' AND jenis_soal = '3'");
	              					@$totalIPA += $jawabIPA->num_rows();
	              				}
	              				$soalIPA = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '3'");
	              				$jawabIPA = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '3'");
	              				$sIPA = $soalIPA->num_rows();
	              				$jIPA = $jawabIPA->num_rows();
	              				if ($sIPA == 0) {
	              					echo 0;
	              				}
	              				elseif ($jIPA == 0) {
	              					echo 0;
	              				}else{
	              					echo $totalIPA;
	              				}
	              			?></td>
	              			<td><?php
	              				$dataIPAS = $this->db->query("SELECT * FROM soal")->result_array();
	              				foreach ($dataIPAS as $IPAS) {
	              					$jawabIPAS = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$IPAS[id_soal]' AND jawab != '$IPAS[jawaban]' AND jenis_soal = '3'");
	              					@$totalIPAS += $jawabIPAS->num_rows();
	              				}
	              				$soalIPAS = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '3'");
	              				$jawabIPAS = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '3'");
	              				$sIPAS = $soalIPAS->num_rows();
	              				$jIPAS = $jawabIPAS->num_rows();
	              				if ($sIPAS == 0) {
	              					echo 0;
	              				}
	              				elseif ($jIPAS == 0) {
	              					echo 0;
	              				}else{
	              					echo $totalIPAS;
	              				}
	              			?></td>
	              			<td><?php
	              				$dataIPA2 = $this->db->query("SELECT * FROM soal")->result_array();
	              				foreach ($dataIPA2 as $IPA2) {
	              					$jawabIPA2 = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$IPA2[id_soal]' AND jawab = '$IPA2[jawaban]' AND jenis_soal = '3'");
	              					@$totalIPA2 += $jawabIPA2->num_rows();
	              				}
	              				$soalIPA2 = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '3'");
	              				$jwbIPA = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '3'");
	              				$sIPA2 = $soalIPA2->num_rows();
	              				$jIPA2 = $jwbIPA->num_rows();
	              				if ($sIPA2 == 0) {
	              					echo 0;
	              				}
	              				elseif ($jIPA2 == 0) {
	              					echo 0;
	              				}else{
	              					echo (100/$sIPA2) * $totalIPA2;
	              				}
	              			?></td>
	              		</tr>
	              		<tr>
	              			<td>4</td>
	              			<td>Matematika</td>
	              			<td><?php
	              				$dataM = $this->db->query("SELECT * FROM soal")->result_array();
	              				foreach ($dataM as $M) {
	              					$jawabM = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$M[id_soal]' AND jawab = '$M[jawaban]' AND jenis_soal = '4'");
	              					@$totalM += $jawabM->num_rows();
	              				}
	              				$soalM = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '4'");
	              				$jawabM = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '4'");
	              				$sM = $soalM->num_rows();
	              				$jM = $jawabM->num_rows();
	              				if ($sM == 0) {
	              					echo 0;
	              				}
	              				elseif ($jM == 0) {
	              					echo 0;
	              				}else{
	              					echo $totalM;
	              				}
	              			?></td>
	              			<td><?php
	              				$dataMS = $this->db->query("SELECT * FROM soal")->result_array();
	              				foreach ($dataMS as $MS) {
	              					$jawabMS = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$MS[id_soal]' AND jawab = '$MS[jawaban]' AND jenis_soal = '4'");
	              					@$totalMS += $jawabMS->num_rows();
	              				}
	              				$soalMS = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '4'");
	              				$jawabMS = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '4'");
	              				$sMS = $soalMS->num_rows();
	              				$jMS = $jawabMS->num_rows();
	              				if ($sMS == 0) {
	              					echo 0;
	              				}
	              				elseif ($jMS == 0) {
	              					echo 0;
	              				}else{
	              					echo $totalMS;
	              				}
	              			?></td>
	              			<td><?php
	              				$dataM2 = $this->db->query("SELECT * FROM soal")->result_array();
	              				foreach ($dataM2 as $M2) {
	              					$jawabM2 = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$M2[id_soal]' AND jawab = '$M2[jawaban]' AND jenis_soal = '4'");
	              					@$totalM2 += $jawabM2->num_rows();
	              				}
	              				$soalM2 = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '4'");
	              				$jwbM = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '4'");
	              				$sM2 = $soalM2->num_rows();
	              				$jM2 = $jwbM->num_rows();
	              				if ($sM2 == 0) {
	              					echo 0;
	              				}
	              				elseif ($jM2 == 0) {
	              					echo 0;
	              				}else{
	              					echo (100/$sM2) * $totalM2;
	              				}
	              			?></td>
	              		</tr>
	              	</tbody>
	              </table>
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->
        </div>
    </div>
</div>
