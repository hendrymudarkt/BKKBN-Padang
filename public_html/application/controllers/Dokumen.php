<?php
class Dokumen extends CI_Controller{
    function __construct(){
        parent::__construct();
		$this->load->model('Dokumen_model');
		$this->load->helper('download');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
	}
	
	function index(){
		$x['kode'] = $this->Dokumen_model->get_kode();
		$data['_view'] = 'dokumen/index';
		$this->load->view('layouts/main', $data);
    }
	
	function qms(){
		$data['_view'] = 'dokumen/qms/index';
		$this->load->view('layouts/main', $data);
	}
	
	function operasional(){
		$data['_view'] = 'dokumen/operasional/index';
		$this->load->view('layouts/main', $data);
	}
	
	function marketing(){
		$data['_view'] = 'dokumen/marketing/index';
		$this->load->view('layouts/main', $data);
	}
	
	function accounting(){
		$data['_view'] = 'dokumen/accounting/index';
		$this->load->view('layouts/main', $data);
	}
	
	function keuangan(){
		$data['_view'] = 'dokumen/keuangan/index';
		$this->load->view('layouts/main', $data);
	}
	
	function sdm(){
		$data['_view'] = 'dokumen/sdm/index';
		$this->load->view('layouts/main', $data);
	}
	
	function umum(){
		$data['_view'] = 'dokumen/umum/index';
		$this->load->view('layouts/main', $data);
	}
	
	function aset(){
		$data['_view'] = 'dokumen/aset/index';
		$this->load->view('layouts/main', $data);
	}
	
	function qms_mkt(){
        $data['_view'] = 'dokumen/qms/mkt/index';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_ops(){
        $data['_view'] = 'dokumen/qms/ops/index';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_keu(){
        $data['_view'] = 'dokumen/qms/keu/index';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_acc(){
        $data['_view'] = 'dokumen/qms/acc/index';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_hrga(){
        $data['_view'] = 'dokumen/qms/hrga/index';
        $this->load->view('layouts/main', $data);
	}
	function qms_aset(){
        $data['_view'] = 'dokumen/qms/aset/index';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_hse(){
        $data['_view'] = 'dokumen/qms/hse/index';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_others(){
        $data['_view'] = 'dokumen/qms/hse/others';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_bds(){
        $data['_view'] = 'dokumen/qms/bds/index';
        $this->load->view('layouts/main', $data);
	}

	function operasional_others(){
        $data['_view'] = 'dokumen/operasional/others';
        $this->load->view('layouts/main', $data);
	}
	
	function marketing_others(){
        $data['_view'] = 'dokumen/marketing/others';
        $this->load->view('layouts/main', $data);
	}
	
	function accounting_others(){
        $data['_view'] = 'dokumen/accounting/others';
        $this->load->view('layouts/main', $data);
	}
	
	function keuangan_others(){
        $data['_view'] = 'dokumen/keuangan/others';
        $this->load->view('layouts/main', $data);
	}
	
	function sdm_others(){
        $data['_view'] = 'dokumen/sdm/others';
        $this->load->view('layouts/main', $data);
	}
	
	function umum_others(){
        $data['_view'] = 'dokumen/umum/others';
        $this->load->view('layouts/main', $data);
	}
	
	function aset_others(){
        $data['_view'] = 'dokumen/aset/others';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_mkt_index(){
        $data['_view'] = 'dokumen/qms/mkt/index';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_mkt_ped(){
        $data['_view'] = 'dokumen/qms/mkt/ped';
        $this->load->view('layouts/main', $data);
	}
	
	
	function qms_mkt_sop(){
        $data['_view'] = 'dokumen/qms/mkt/sop';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_mkt_ik(){
        $data['_view'] = 'dokumen/qms/mkt/ik';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_mkt_form(){
        $data['_view'] = 'dokumen/qms/mkt/form';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_mkt_flowchart(){
        $data['_view'] = 'dokumen/qms/mkt/flowchart';
        $this->load->view('layouts/main', $data);
	}

	function qms_ops_ped(){
        $data['_view'] = 'dokumen/qms/ops/ped';
        $this->load->view('layouts/main', $data);
	}
	
	
	function qms_ops_sop(){
        $data['_view'] = 'dokumen/qms/ops/sop';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_ops_ik(){
        $data['_view'] = 'dokumen/qms/ops/ik';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_ops_form(){
        $data['_view'] = 'dokumen/qms/ops/form';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_ops_flowchart(){
        $data['_view'] = 'dokumen/qms/ops/flowchart';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_keu_ped(){
        $data['_view'] = 'dokumen/qms/keu/ped';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_keu_sop(){
        $data['_view'] = 'dokumen/qms/keu/sop';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_keu_ik(){
        $data['_view'] = 'dokumen/qms/keu/ik';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_keu_form(){
        $data['_view'] = 'dokumen/qms/keu/form';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_keu_flowchart(){
        $data['_view'] = 'dokumen/qms/keu/flowchart';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_acc_ped(){
        $data['_view'] = 'dokumen/qms/acc/ped';
        $this->load->view('layouts/main', $data);
	}
	
	
	function qms_acc_sop(){
        $data['_view'] = 'dokumen/qms/acc/sop';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_acc_ik(){
        $data['_view'] = 'dokumen/qms/acc/ik';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_acc_form(){
        $data['_view'] = 'dokumen/qms/acc/form';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_acc_flowchart(){
        $data['_view'] = 'dokumen/qms/acc/flowchart';
        $this->load->view('layouts/main', $data);
	}

	function qms_hrga_ped(){
        $data['_view'] = 'dokumen/qms/hrga/ped';
        $this->load->view('layouts/main', $data);
	}
	
	
	function qms_hrga_sop(){
        $data['_view'] = 'dokumen/qms/hrga/sop';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_hrga_ik(){
        $data['_view'] = 'dokumen/qms/hrga/ik';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_hrga_form(){
        $data['_view'] = 'dokumen/qms/hrga/form';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_hrga_flowchart(){
        $data['_view'] = 'dokumen/qms/hrga/flowchart';
        $this->load->view('layouts/main', $data);
	}

	function qms_aset_ped(){
        $data['_view'] = 'dokumen/qms/aset/ped';
        $this->load->view('layouts/main', $data);
	}
	
	
	function qms_aset_sop(){
        $data['_view'] = 'dokumen/qms/aset/sop';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_aset_ik(){
        $data['_view'] = 'dokumen/qms/aset/ik';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_aset_form(){
        $data['_view'] = 'dokumen/qms/aset/form';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_aset_flowchart(){
        $data['_view'] = 'dokumen/qms/aset/flowchart';
        $this->load->view('layouts/main', $data);
	}

	function qms_hse_ped(){
        $data['_view'] = 'dokumen/qms/hse/ped';
        $this->load->view('layouts/main', $data);
	}
	
	
	function qms_hse_sop(){
        $data['_view'] = 'dokumen/qms/hse/sop';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_hse_ik(){
        $data['_view'] = 'dokumen/qms/hse/ik';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_hse_form(){
        $data['_view'] = 'dokumen/qms/hse/form';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_hse_flowchart(){
        $data['_view'] = 'dokumen/qms/hse/flowchart';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_hse_others(){
        $data['_view'] = 'dokumen/qms/hse/others';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_bds_ped(){
        $data['_view'] = 'dokumen/qms/bds/ped';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_bds_sop(){
        $data['_view'] = 'dokumen/qms/bds/sop';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_bds_ik(){
        $data['_view'] = 'dokumen/qms/bds/ik';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_bds_form(){
        $data['_view'] = 'dokumen/qms/bds/form';
        $this->load->view('layouts/main', $data);
	}
	
	function qms_bds_flowchart(){
        $data['_view'] = 'dokumen/qms/bds/flowchart';
        $this->load->view('layouts/main', $data);
	}
	
	function data_qms_mkt_ped(){
		$divisi = "QMS";
		$kategori = "MKT";
		$jenis = "PED";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_qms_mkt_sop(){
		$divisi = "QMS";
		$kategori = "MKT";
		$jenis = "SOP";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_mkt_ik(){
		$divisi = "QMS";
		$kategori = "MKT";
		$jenis = "IK";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_mkt_form(){
		$divisi = "QMS";
		$kategori = "MKT";
		$jenis = "Form";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_mkt_flowchart(){
		$divisi = "QMS";
		$kategori = "MKT";
		$jenis = "Flowchart";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_qms_ops_ped(){
		$divisi = "QMS";
		$kategori = "OPS";
		$jenis = "PED";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_qms_ops_sop(){
		$divisi = "QMS";
		$kategori = "OPS";
		$jenis = "SOP";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_ops_ik(){
		$divisi = "QMS";
		$kategori = "OPS";
		$jenis = "IK";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_ops_form(){
		$divisi = "QMS";
		$kategori = "OPS";
		$jenis = "Form";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_ops_flowchart(){
		$divisi = "QMS";
		$kategori = "OPS";
		$jenis = "Flowchart";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_keu_ped(){
		$divisi = "QMS";
		$kategori = "KEU";
		$jenis = "PED";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_qms_keu_sop(){
		$divisi = "QMS";
		$kategori = "KEU";
		$jenis = "SOP";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_keu_ik(){
		$divisi = "QMS";
		$kategori = "KEU";
		$jenis = "IK";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_keu_form(){
		$divisi = "QMS";
		$kategori = "KEU";
		$jenis = "Form";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_keu_flowchart(){
		$divisi = "QMS";
		$kategori = "KEU";
		$jenis = "Flowchart";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_acc_ped(){
		$divisi = "QMS";
		$kategori = "ACC";
		$jenis = "PED";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_qms_acc_sop(){
		$divisi = "QMS";
		$kategori = "ACC";
		$jenis = "SOP";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_acc_ik(){
		$divisi = "QMS";
		$kategori = "ACC";
		$jenis = "IK";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_acc_form(){
		$divisi = "QMS";
		$kategori = "ACC";
		$jenis = "Form";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_acc_flowchart(){
		$divisi = "QMS";
		$kategori = "ACC";
		$jenis = "Flowchart";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_hrga_ped(){
		$divisi = "QMS";
		$kategori = "HRGA";
		$jenis = "PED";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_qms_hrga_sop(){
		$divisi = "QMS";
		$kategori = "HRGA";
		$jenis = "SOP";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_hrga_ik(){
		$divisi = "QMS";
		$kategori = "HRGA";
		$jenis = "IK";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_hrga_form(){
		$divisi = "QMS";
		$kategori = "HRGA";
		$jenis = "Form";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_hrga_flowchart(){
		$divisi = "QMS";
		$kategori = "HRGA";
		$jenis = "Flowchart";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_qms_aset_ped(){
		$divisi = "QMS";
		$kategori = "ASET";
		$jenis = "PED";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_qms_aset_sop(){
		$divisi = "QMS";
		$kategori = "ASET";
		$jenis = "SOP";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_aset_ik(){
		$divisi = "QMS";
		$kategori = "ASET";
		$jenis = "IK";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_aset_form(){
		$divisi = "QMS";
		$kategori = "ASET";
		$jenis = "Form";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_aset_flowchart(){
		$divisi = "QMS";
		$kategori = "ASET";
		$jenis = "Flowchart";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_qms_hse_ped(){
		$divisi = "HSE";
		$kategori = "HSE";
		$jenis = "PED";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_qms_hse_sop(){
		$divisi = "HSE";
		$kategori = "HSE";
		$jenis = "SOP";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_hse_ik(){
		$divisi = "HSE";
		$kategori = "HSE";
		$jenis = "IK";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_hse_form(){
		$divisi = "HSE";
		$kategori = "HSE";
		$jenis = "Form";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_hse_flowchart(){
		$divisi = "HSE";
		$kategori = "HSE";
		$jenis = "Flowchart";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_hse_others(){
		$divisi = "HSE";
		$kategori = "...";
		$jenis = "...";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_operasional_others(){
		$divisi = "Operasional";
		$kategori = "...";
		$jenis = "...";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_marketing_others(){
		$divisi = "Marketing";
		$kategori = "...";
		$jenis = "...";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_accounting_others(){
		$divisi = "Accounting";
		$kategori = "...";
		$jenis = "...";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_keuangan_others(){
		$divisi = "Keuangan";
		$kategori = "...";
		$jenis = "...";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_sdm_others(){
		$divisi = "SDM";
		$kategori = "...";
		$jenis = "...";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_umum_others(){
		$divisi = "Umum";
		$kategori = "...";
		$jenis = "...";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_aset_others(){
		$divisi = "Aset";
		$kategori = "...";
		$jenis = "...";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_bds_ped(){
		$divisi = "QMS";
		$kategori = "BDS";
		$jenis = "PED";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}

	function data_qms_bds_sop(){
		$divisi = "QMS";
		$kategori = "BDS";
		$jenis = "SOP";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_bds_ik(){
		$divisi = "QMS";
		$kategori = "BDS";
		$jenis = "IK";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}
	
	function data_qms_bds_form(){
		$divisi = "QMS";
		$kategori = "BDS";
		$jenis = "Form";
		$dokumen = $this->Dokumen_model->get_kategori($divisi, $jenis, $kategori);
		echo json_encode($dokumen);
	}

    function add(){
        if(isset($_POST) && count($_POST) > 0){
			$config['upload_path']          = 'lampiran/';
            $config['allowed_types']        = 'jpeg|jpg|png|pdf';
            $config['max_width']            = 3000;
            $config['max_height']           = 1688;
            $config['overwrite']            = 'TRUE';
     
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('files')){
				$file = $this->upload->data();
				$lampiran = $file['file_name'];
				
				$params = array(
					'judul' => $this->input->post('judul'),
					'file' => $lampiran,
					'tanggal' => $this->input->post('tanggal'),
					'divisi' => $this->input->post('divisi'),
					'jenis_dokumen' => $this->input->post('jenis_dokumen'),
					'kategori' => $this->input->post('kategori'),
					'owner' => $this->session->userdata('nama'),
					'sub' => $this->input->post('sub'),
					'sub1' => $this->input->post('sub1'),
					'sub2' => $this->input->post('sub2'),
					'sub3' => $this->input->post('sub3'),
					'sub4' => $this->input->post('sub4'),
					'sub5' => $this->input->post('sub5'),
					'sub6' => $this->input->post('sub6'),
					'sub7' => $this->input->post('sub7'),
					'sub8' => $this->input->post('sub8'),
					'sub9' => $this->input->post('sub9'),
					'sub10' => $this->input->post('sub10'),
					'sub11' => $this->input->post('sub11'),
					'sub12' => $this->input->post('sub12')
				);
				
				$dokumen_id = $this->Dokumen_model->add_dokumen($params);
				$this->session->set_flashdata('msg', 'Berhasil');
				helper_log("add", $this->session->userdata('nama')." menambahkan dokumen ".$this->input->post('judul'));
				redirect('dokumen/add');
            }
            else{
				$error =  $this->upload->display_errors(); 
                echo json_encode(array('msg' => $error, 'success' => false));
			}
        }
        else{            
            if($this->session->userdata('level') == 1 OR $this->session->userdata('level') == 3){
				$data['_view'] = 'dokumen/add';
				$this->load->view('layouts/main',$data);
			}else{
				echo "<script>window.alert('Berbahaya..!!!')</script>";
			}
        }
	}

	function edit(){
		$config['upload_path']          = 'lampiran/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_width']            = 3000;
		$config['max_height']           = 1688;
		$config['overwrite']            = 'TRUE';
     
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('lampiran')){
			
			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
			$tanggal = $this->input->post('tanggal');
			$divisi = $this->input->post('divisi');
			$jenis_dokumen = $this->input->post('jenis_dokumen');
			$owner = $this->session->userdata('nama');
			$sub = $this->input->post('sub');
			$sub1 = $this->input->post('sub1');
			$sub2 = $this->input->post('sub2');
			$sub3 = $this->input->post('sub3');
			$sub4 = $this->input->post('sub4');
			$sub5 = $this->input->post('sub5');
			$sub6 = $this->input->post('sub6');
			$sub7 = $this->input->post('sub7');
			$sub8 = $this->input->post('sub8');
			$sub9 = $this->input->post('sub9');
			$sub10 = $this->input->post('sub10');
			$sub11 = $this->input->post('sub11');
			$sub12 = $this->input->post('sub12');

			$dokumen_id = $this->Dokumen_model->update_dokumen2($id, $judul, $tanggal, $divisi, $jenis_dokumen, $owner, $sub, $sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7, $sub8, $sub9, $sub10, $sub11, $sub12);
			helper_log("edit", $this->session->userdata('nama')." merubah dokumen ".$judul);
			redirect('dokumen/add');
        }
        else{
			$file = $this->upload->data();
			$lampiran = $file['file_name'];
			
			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
			$file = $file;
			$tanggal = $this->input->post('tanggal');
			$divisi = $this->input->post('divisi');
			$jenis_dokumen = $this->input->post('jenis_dokumen');
			$id_user = $this->session->userdata('nama');
			$sub = $this->input->post('sub');
			$sub1 = $this->input->post('sub1');
			$sub2 = $this->input->post('sub2');
			$sub3 = $this->input->post('sub3');
			$sub4 = $this->input->post('sub4');
			$sub5 = $this->input->post('sub5');
			$sub6 = $this->input->post('sub6');
			$sub7 = $this->input->post('sub7');
			$sub8 = $this->input->post('sub8');
			$sub9 = $this->input->post('sub9');
			$sub10 = $this->input->post('sub10');
			$sub11 = $this->input->post('sub11');
			$sub12 = $this->input->post('sub12');

			$dokumen_id = $this->Dokumen_model->update_dokumen($id, $judul, $file, $tanggal, $divisi, $jenis_dokumen, $id_user, $sub, $sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7, $sub8, $sub9, $sub10, $sub11, $sub12);
			helper_log("edit", $this->session->userdata('nama')." merubah dokumen ".$judul);
			redirect('dokumen/add');
		}
	}
	
	function get_dokumen(){
        $id = $this->input->get('id_dokumen');
        $data = $this->Dokumen_model->get_dokumen($id);
		echo json_encode($data);
	}

    function remove(){
		$id = $this->input->post('id_dokumen');
		$dokumen = $this->Dokumen_model->get_dokumen($id);

        if(isset($dokumen['id_dokumen'])){
            $path = './lampiran/';
            unlink($path.$dokumen['file']);

			$data = $this->Dokumen_model->delete_dokumen($id);
            helper_log("remove", $this->session->userdata('nama')." menghapus dokumen ".$dokumen['judul']);
        	redirect('dashboard');
		}
	}
	
	function view($id){
		$name = $id;
		$file = file_get_contents('./lampiran/'.$id);
		$this->output
           ->set_content_type('application/pdf')
		   ->set_output($file);
		helper_log("view", $this->session->userdata('nama')." melihat dokumen ".$name);
    }
	
	function download($id){
		$name = $id;
		$file = './lampiran/'.$id;
		force_download($file, NULL);
		helper_log("download", $this->session->userdata('nama')." mengunduh dokumen ".$name);
    }
}