<?php
class berkas_p4 extends CI_controller{

public function _construct(){
		parent:: _construct();
		$this->load->model('pinjam_berkas');
		$this->load->helper('url');
	}
public function index()
	{
		$data['p4']= $this->pinjam_berkas->get_data('p4')-> result();
		
		$data['berkas']=$this->pinjam_berkas -> get_data('berkas')->result ();
		$this->load->view('templete_admin/header');
		$this->load ->view('templete_admin/sidebar');
		
		$this->load->view('admin/vp4',$data);
		$this->load ->view('templete_admin/fluter');
	}
public function tambah_berkas()
	{
		$data['berkas']=$this->pinjam_berkas -> get_data('berkas')->result ();
		$this->load ->view('templete_admin/header');
		$this->load ->view('templete_admin/sidebar');
		
		$this->load ->view('admin/form_p4',$data);
		$this->load ->view('templete_admin/fluter');
	}

public function berkas_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE ){
			$this-> tambah_berkas();
		}else{
			$no_berkas				=$this->input->post('no_berkas');
			$nama_berkas			=$this->input->post('nama_berkas');
			$jenis_berkas			=$this->input->post('jenis_berkas');
			$bidang					=$this->input->post('bidang');
			$bulan					=$this->input->post('bulan');
			$tahun					=$this->input->post('tahun');
			$Rak					=$this->input->post('Rak');
			$box					=$this->input->post('box');
			$status					=$this->input->post('status');
			$file					=$_FILES ['file']['name'];
			
			if ($file=''){

			}else{
				$config['upload_path'] 		='./asset/upload';
				$config['allowed_types'] 	='jpg|jpeg|png|pdf|docx|xlsx|tiff';

				$this->load->library('upload',$config);
				if (! $this ->upload->do_upload('file')){
					echo "file gagal di upload";
			}else{
				$file=$this->upload->data('file_name');
				}
			}

			$data   = array( 
				'no_berkas' 			=>$no_berkas,
				'nama_berkas' 			=>$nama_berkas,
				'jenis_berkas' 			=>$jenis_berkas,
				'bidang' 				=>$bidang,
				'bulan' 				=>$bulan,
				'tahun' 				=>$tahun,
				'Rak' 				    =>$Rak,
				'box' 					=>$box,
				'status' 				=>$status,
				'file' 					=>$file,
 			);

			$this->pinjam_berkas->insert_data($data,'p4');
			$this->session ->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				 Data berhasil di tambahkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/berkas_p4');
		}
	}
public function _rules()
	{
		$this->form_validation->set_rules('no_berkas','no_berkas','required');
		
		$this->form_validation->set_rules('nama_berkas','nama_berkas','required');
		$this->form_validation->set_rules('jenis_berkas','jenis_berkas','required');
		$this->form_validation->set_rules('bidang','bidang','required');
		$this->form_validation->set_rules('bulan','bulan','required');
		$this->form_validation->set_rules('tahun','tahun','required');
		$this->form_validation->set_rules('Rak','Rak','required');
		$this->form_validation->set_rules('box','box','required');
		$this->form_validation->set_rules('status','status','required');
		
	}

	public function delete($id)
	{
		$this->pinjam_berkas->erase($id);
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Data berhasil di hapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('admin/berkas_p4');
	}

	public function detail_p4($id)
	{
		$data['detail']=$this->pinjam_berkas ->ambil_id_p4($id);
		$this->load ->view('templete_admin/header');
		$this->load ->view('templete_admin/sidebar');
		
		$this->load ->view('admin/detail_p4',$data);
		$this->load ->view('templete_admin/fluter');

	}

	public function print()
	{
		
		$data['p4']=$this->pinjam_berkas->get_data("p4")->result();
		$this->load->view('admin/printp4',$data);
	}
	

	public function print_id($id)
	{
		$data=[
			'titte'=>'Print Berkas Masuk',
			'data'=>$this->pinjam_berkas->get_data_p4($id),
		];

		$this->load->view('admin/printp4_id',$data);	
	}


public function edit_berkas ($id)
	{
		$where= array('id_p4' => $id);
	
		$data['p4']=$this->pinjam_berkas ->edit_data('p4',$where)->result ();
		$this->load ->view('templete_admin/header');
		$this->load ->view('templete_admin/sidebar');
		
		$this->load ->view('admin/up4',$data);
		$this->load ->view('templete_admin/fluter');
	}

public function update_aksi($id)
	{
		
			$id						=$this->input->post('id_p4');
			$no_berkas				=$this->input->post('no_berkas');
			
			$nama_berkas			=$this->input->post('nama_berkas');
			$jenis_berkas			=$this->input->post('jenis_berkas');
			$bidang					=$this->input->post('bidang');
			$bulan					=$this->input->post('bulan');
			$tahun					=$this->input->post('tahun');
			$Rak					=$this->input->post('Rak');
			$box					=$this->input->post('box');
			$status					=$this->input->post('status');
			$file					=$_FILES ['file']['name'];
			
			if ($file){
				$config['upload_path'] 		='./asset/upload';
				$config['allowed_types'] 	='jpg|jpeg|png|pdf|docx|xlsx|tiff';

				$this->load->library('upload', $config);
				if ($this ->upload->do_upload('file')){
					$file=$this->upload->data('file_name');
					$this ->db->set('file',$file);
			}else{
				echo $this ->upload->file_error();
				}
			}

			$data   = array( 
				'no_berkas' 			=>$no_berkas,
				
				'nama_berkas' 			=>$nama_berkas,
				'jenis_berkas' 			=>$jenis_berkas,
				'bidang' 				=>$bidang,
				'bulan' 				=>$bulan,
				'tahun' 				=>$tahun,
				'Rak' 				    =>$Rak,
				'box' 					=>$box,
				'status' 				=>$status,
				
 			);

 			$where = array(
				'id_p4' => $id
					);

			$this->pinjam_berkas->update_data($where,$data,'p4');
			$this->session ->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				 Data berhasil di update
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/berkas_p4');
		}
	}

?>