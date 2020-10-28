<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;

class PHPWord_Text extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('word');
    }
    function index()
    {
        $phpWord = new PhpWord();
        $template = $phpWord->loadTemplate(FCPATH . 'slip_gaji.docx');
        $data = array(
            'bulan' => 'Desember 2020',
            'emp_id' => '100023',
            'nama' => 'IQBAL'
        );
        $template->setValueAdvanced(
            array(
                '%bulan%' => $data['bulan'],
                '%emp_id%' => $data['emp_id'],
                '%nama%' => $data['nama'],
            )
        );
        $template->saveAs('your_file_name_changed.docx');
    }
}
