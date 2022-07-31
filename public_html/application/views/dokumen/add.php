<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dokumen</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Dokumen</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Dokumen</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php echo form_open_multipart('dokumen/add') ?>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" required>
                            </div>
                            <div class="col-md-3">
                                <label for="tanggal">Tanggal Berlaku</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal"
                                    placeholder="Tanggal" required>
                            </div>
                            <?php
                            if($this->session->userdata('level') == 1){ ?>
                            <div class="col-md-3">
                                <label for="divisi">Departemen</label>
                                <select name="divisi" class="form-control" id="divisi" required>
                                    <option value="...">Pilih</option>
                                    <option value="QMS">QMS</option>
                                    <option value="HSE">HSE</option>
                                    <option value="Operasional">Operasional</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Keuangan">Keuangan</option>
                                    <option value="SDM">SDM</option>
                                    <option value="Umum">Umum</option>
                                    <option value="Aset">Aset</option>
                                    <option value="BDS">BDS</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="kategori">Kategori</label>
                                <select name="kategori" class="form-control" id="kategori" required>
                                    <option value="...">Pilih</option>
                                    <option value="MKT">MKT</option>
                                    <option value="OPS">OPS</option>
                                    <option value="KEU">KEU</option>
                                    <option value="ACC">ACC</option>
                                    <option value="HRGA">HRGA</option>
                                    <option value="ASET">Aset</option>
                                    <option value="HSE">HSE</option>
                                    <option value="BDS">BDS</option>
                                </select>
                            </div>
                            <?php }
                            else{ ?>
                            <div class="col-md-3">
                                <label for="divisi">Departemen</label>
                                <input type="text" class="form-control" name="divisi" value="HSE" readonly>
                            </div>
                            <div class="col-md-3">
                                <label for="kategori">Kategori</label>
                                <input type="text" class="form-control" name="kategori" value="HSE" readonly>
                            </div>
                            <?php                             } ?>
                            <div class="col-md-3">
                                <label for="jenis_dokumen">Jenis</label>
                                <select name="jenis_dokumen" class="form-control" id="jenis_dokumen" required>
                                    <option value="...">Pilih</option>
                                    <option value="PED">PED</option>
                                    <option value="SOP">SOP</option>
                                    <option value="IK">IK</option>
                                    <option value="Form">Form</option>
                                    <option value="Flowchart">Flowchart</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="files">File</label>
                                <input type="file" class="form-control" name="files" id="file" placeholder="File" required>
                            </div>
                            <div class="col-md-6">
                                <label for="sub1">Sub File</label>
                                <label class="pull-right"><a href="#" onclick="tambahFile(); return false;"
                                        class="btn btn-default btn-xs"><span class="fa fa-plus"></span></a></label>
                                <select name="sub" class="form-control select2bs4" id="sub">
                                    <option value="">Pilih</option>
                                    <?php $data = $this->db->query("SELECT judul, file FROM dokumen ORDER BY judul ASC")->result_array();
                                     foreach ($data as $d): ?>
                                    <option value="<?php echo $d['file'] ?>"><?php echo $d['judul'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div id="divFile"></div>
                                <input id="idf" value="1" type="hidden" />
                            </div>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>