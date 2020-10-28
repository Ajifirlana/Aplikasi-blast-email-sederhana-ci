<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Index
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Index extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model', 'dmod');
        $this->load->helper('form');
    }


    public function index()
    {
        $data = array(
            'title' => $this->config->item('title'),
            'short_title' => $this->config->item('short_title'),
            'page' => 'Dashboard',
            'halaman' => 'dashboard',
        );
        $this->load->view('template', $data);
    }
    public function data_karyawan()
    {
        echo json_decode($this->dmod->karyawan());
    }


    public function send_mail() { 



         $from_email = 'xxx@gmail.com'; 
         $to_email = $this->input->post('email'); 
        $subject  =$this->input->post('subject');
        $dtfile  =$this->input->post('file');
         $config = [
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'xxxx',
                'mailtype'  => 'text', 
                'charset'   => 'iso-8859-1',
                'wordwrap' => TRUE,
        ];

            $this->load->library('email',$config);

          $this->email->set_newline("\r\n");
$this->email->attach($dtfile);
         $this->email->from($from_email); 
         $this->email->to($to_email);
         $this->email->subject($subject); 
    

         if($this->email->send()){
                $this->session->set_flashdata("msg","Email berhasil terkirim.");
                redirect('/'); 
         }else {
                $this->session->set_flashdata("msg","Email gagal dikirim."); 
                redirect('/'); 
         } 
      }

    public function upload()
    {
        $target_dir = "./assets/uploads/";
        $file = $_FILES['excel']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['excel']['tmp_name'];
        $path_filename_ext = $target_dir . $filename . "." . $ext;
        $i = move_uploaded_file($temp_name, $path_filename_ext);
        $aksi = $this->dmod->upload_data($_FILES['excel']['name']);
        // print_r($aksi);
        // die();
        for ($i = 2; $i < count($aksi); $i++) {
            $data = array(
                'emp_id' => $aksi[$i]['A'],
                'unit_kerja' => $aksi[$i]['B'],
                'pembebanan' => $aksi[$i]['C'],
                'nama' => $aksi[$i]['D'],
                'jabatan' => $aksi[$i]['E'],
                'gol' => $aksi[$i]['F'],
                'tgl_awal_kerja' => $aksi[$i]['G'],
                'masa_kerja' => $aksi[$i]['H'],
                'status_karyawan' => $aksi[$i]['I'],
                'gpb20' => $aksi[$i]['J'],
                'tt20' => $aksi[$i]['K'],
                'upah20' => $aksi[$i]['L'],
                'upah_kebijakan' => $aksi[$i]['M'],
                'premi' => $aksi[$i]['N'],
                'pph21' => $aksi[$i]['O'],
                'lain_lain' => $aksi[$i]['P'],
                'proporsional' => $aksi[$i]['Q'],
                'upah_variable' => $aksi[$i]['R'],
                'upah_kotor' => $aksi[$i]['S'],
                'upah_bulat' => $aksi[$i]['T'],
                'kas_bon' => $aksi[$i]['U'],
                'bpjs_k' => $aksi[$i]['V'],
                'bpjs_tk' => $aksi[$i]['W'],
                'pph21_1' => $aksi[$i]['X'],
                'pinjaman_adhimix' => $aksi[$i]['Y'],
                'simpanan_wajib_adhimix' => $aksi[$i]['Z'],
                'potongan_lain_lain' => $aksi[$i]['AA'],
                'total_potongan' => $aksi[$i]['AB'],
                'thp_upah' => $aksi[$i]['AC'],
                'tp' => $aksi[$i]['AD'],
                'tsk' => $aksi[$i]['AE'],
                'tlk' => $aksi[$i]['AF'],
                'email' => $aksi[$i]['AG'],
                'beban_kesehatan_perusahaan_real' => $aksi[$i]['AH'],
                'beban_kesehatan_perusahaan' => $aksi[$i]['AI'],
                'no_bpjs_k' => $aksi[$i]['AJ'],
                'no_bpjs_tk' => $aksi[$i]['AK'],
                'npwp' => $aksi[$i]['AL'],
            );
            $save = $this->dmod->save_data($data);
        }
        redirect();
    }
}


/* End of file Index.php */
/* Location: ./application/controllers/Index.php */