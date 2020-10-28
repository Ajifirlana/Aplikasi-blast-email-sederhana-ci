<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Helpers New_helper_helper
 *
 * This Helpers for ...
 * 
 * @package   CodeIgniter
 * @category  Helpers
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 *
 */

// ------------------------------------------------------------------------

if (!function_exists('test')) {
  /**
   * Test
   *
   * This test helpers
   *
   * @param   ...
   * @return  ...
   */
  function generate_pdf($name, $tpl, $data)
  {
    $ci = &get_instance();
    $data['data'] = $data;
    $ci->load->view($tpl, $data);
    // Get output html
    $html = $ci->output->get_output();
    // add external css library
    $html .= '<link href="' . base_url() . 'assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">';
    // Load pdf library
    $ci->load->library('pdf');
    $ci->dompdf->loadHtml($html);
    // setup size
    $ci->dompdf->setPaper('A4', 'portrait');
    // Render the HTML as PDF
    $ci->dompdf->render();
    // Output  PDF (1 = download and 0 = preview)
    $ci->dompdf->stream($name, array("Attachment" => 0));
  }
}

// ------------------------------------------------------------------------

/* End of file New_helper_helper.php */
/* Location: ./application/helpers/New_helper_helper.php */