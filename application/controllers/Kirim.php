<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Kirim
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

class Kirim extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('Data_model', 'dmod');
    }
    public function single()
    {
        $data = array(
            'title' => $this->config->item('title'),
            'short_title' => $this->config->item('short_title'),
            'page' => 'Dashboard',
            'halaman' => 'kirim/single',
            'dkaryawan' => $this->db->get('karyawan')->result_array()
        );
        $this->load->view('template', $data);
    }
    public function dosend()
    {
    }
    public function email()
    {
        $this->load->view('email_slip_gaji',$data);
    }
    public function list_email()
    {
        print_r($this->dmod->kirim_email('Test', 'dustwork.id@gmail.com'));
    }
    public function test($id = null)
    {
        // $this->load->library('pdf');
        // $this->load->helper('new');
        // $data = array(
        //     'emp_id' => 1,
        //     'nama' => 'IQBAL',
        //     'email' => 'dustwork.id@gmail.com'
        // );
        // generate_pdf("test.pdf", "slip_gaji.php", $data);
        // $data = array(
        //     "dataku" => array(
        //         "nama" => "Petani Kode",
        //         "url" => "http://petanikode.com"
        //     )
        // );

        
        $this->load->model('Data_model', 'dmod');
        $data['karyawan'] = $this->dmod->getData($id);
        $this->load->library('pdf');
        $this->pdf->setPaper('F4', 'landscape');
       
        $this->pdf->filename = "laporan-karyawan.pdf";
        $this->pdf->load_view('slip_gaji', $data);
    }
}


/* End of file Kirim.php */
/* Location: ./application/controllers/Kirim.php */