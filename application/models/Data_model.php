<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Data_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Data_model extends CI_Model
{

    // ------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();
        require APPPATH . 'libraries/phpmailer/src/Exception.php';
        require APPPATH . 'libraries/phpmailer/src/PHPMailer.php';
        require APPPATH . 'libraries/phpmailer/src/SMTP.php';
    }

    function getData($id)
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->where('emp_id',$id);
        
        return $this->db->get()->row();
    }

    // ------------------------------------------------------------------------


    // ------------------------------------------------------------------------
    public function karyawan()
    {
        $table = 'karyawan';
        $primaryKey = 'id';
        $columns = array(
            array('db' => 'id', 'dt' => 0),
            array('db' => 'emp_id', 'dt' => 1),
            array('db' => 'unit_kerja', 'dt' => 2),
            array('db' => 'pembebanan', 'dt' => 3),
            array('db' => 'nama', 'dt' => 4),
            array('db' => 'jabatan', 'dt' => 5),
            array('db' => 'gol', 'dt' => 6),
            array('db' => 'tgl_awal_kerja', 'dt' => 7),
            array('db' => 'masa_kerja', 'dt' => 8),
            array('db' => 'status_karyawan', 'dt' => 9),
            array('db' => 'gpb20', 'dt' => 10),
            array('db' => 'tt20', 'dt' => 11),
            array('db' => 'upah20', 'dt' => 12),
            array('db' => 'upah_kebijakan', 'dt' => 13),
            array('db' => 'premi', 'dt' => 14),
            array('db' => 'pph21', 'dt' => 15),
            array('db' => 'lain_lain', 'dt' => 16),
            array('db' => 'proporsional', 'dt' => 17),
            array('db' => 'upah_variable', 'dt' => 18),
            array('db' => 'upah_kotor', 'dt' => 19),
            array('db' => 'upah_bulat', 'dt' => 20),
            array('db' => 'kas_bon', 'dt' => 21),
            array('db' => 'bpjs_k', 'dt' => 22),
            array('db' => 'bpjs_tk', 'dt' => 23),
            array('db' => 'pph21_1', 'dt' => 24),
            array('db' => 'pinjaman_adhimix', 'dt' => 25),
            array('db' => 'simpanan_wajib_adhimix', 'dt' => 26),
            array('db' => 'potongan_lain_lain', 'dt' => 27),
            array('db' => 'total_potongan', 'dt' => 28),
            array('db' => 'thp_upah', 'dt' => 29),
            array('db' => 'tp', 'dt' => 30),
            array('db' => 'tsk', 'dt' => 31),
            array('db' => 'tlk', 'dt' => 32),
            array('db' => 'email', 'dt' => 33),
            array('db' => 'beban_kesehatan_perusahaan_real', 'dt' => 34),
            array('db' => 'beban_kesehatan_perusahaan', 'dt' => 35),
            array('db' => 'no_bpjs_k', 'dt' => 36),
            array('db' => 'no_bpjs_tk', 'dt' => 37),
            array('db' => 'npwp', 'dt' => 38),
        );

        // SQL server connection information
        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db'   => $this->db->database,
            'host' => $this->db->hostname,
            'charset' => 'utf8'
        );

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * If you just want to use the basic configuration for DataTables with PHP
     * server-side, there is no need to edit below this line.
     */
        $joinQuery = null;
        $extraWhere = '';
        $groupBy = '';
        $having = '';
        echo json_encode(
            SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having)
        );
    }
    public function upload_data($filename)
    {
        ini_set('memory_limit', '-1');
        $inputFileName = './assets/uploads/' . $filename;
        try {
            $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch (Exception $e) {
            die('Error loading file :' . $e->getMessage());
        }

        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
        return $worksheet;
    }
    public function save_data($post)
    {
        $cari = $this->db->where('email', $post['email'])->get('karyawan');
        if (empty($post['emp_id']) || empty($post['email'])) {
            return true;
        } else {
            if ($cari->num_rows() == 1) {
                $aksi = $this->db->where('email', $post['email'])->update('karyawan', $post);
            } else {
                $aksi = $this->db->insert('karyawan', $post);
            }
            return $aksi;
        }
    }
    public function kirim_email($subject, $to)
    {
        // PHPMailer object
        $response = false;
        $mail = new PHPMailer();


        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'sds.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = true;
        $mail->Username = 'payroll@abadiprimaintikarya.co.id'; // user email
        $mail->Password = 'xxx'; // password email
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;

        $mail->setFrom('xxx', 'xxxx'); // user email

        // Add a recipient
        $mail->addAddress('xxx@gmail.com'); //email tujuan pengiriman email

        // Email subject
        $mail->Subject = $subject; //subject email

        // Set email format to HTML
        $mail->isHTML(true);

        $mailContent = $this->load->view('email_slip_gaji', '', TRUE);
        $mail->Body = $mailContent;

        // Send email
        if (!$mail->send()) {
            return array('error' => true, 'message' => 'Fail to send email', 'result' => $mail->ErrorInfo);
        } else {
            return array('error' => false, 'message' => 'Email sent');
        }
    }

    private function delete_table()
    {
    }
    // ------------------------------------------------------------------------

}

/* End of file Data_model.php */
/* Location: ./application/models/Data_model.php */