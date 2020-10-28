<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Libraries Pdf
 *
 * This Libraries for ...
 * 
 * @package		CodeIgniter
 * @category	Libraries
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();

$options->set('isRemoteEnabled', TRUE);
$dompdf = new Dompdf($options);
$contxt = stream_context_create([ 
    'ssl' => [ 
        'verify_peer' => FALSE, 
        'verify_peer_name' => FALSE,
        'allow_self_signed'=> TRUE
    ] 
]);
$dompdf->setHttpContext($contxt);


class Pdf extends Dompdf
{
  /**
   * PDF filename
   * @var String
   */
  public $filename;
  public function __construct()
  {
    parent::__construct();
    $this->filename = "laporan-karyawan.pdf";
  }
  /**
   * Get an instance of CodeIgniter
   *
   * @access    protected
   * @return    void
   */
  protected function ci()
  {
    return get_instance();
  }
  /**
   * Load a CodeIgniter view into domPDF
   *
   * @access    public
   * @param    string    $view The view to load
   * @param    array    $data The view data
   * @return    void
   */

  public function setRemoteOption()  {
        $this->options->setIsRemoteEnabled(true);
        $this->pdf->setOptions($this->options);
    }

  
  public function load_view($view, $data = array()){
        $html = $this->ci()->load->view($view, $data, TRUE);

        $options = new Options();
        $options->setTempDir('assets/img'); // temp folder with write permission

        $this->load_html($html);
        // Render the PDF
        $this->render();
            // Output the generated PDF to Browser
               $this->stream($this->filename, array("Attachment" => false));
    }

}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */