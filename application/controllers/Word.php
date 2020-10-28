<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;

/**
 *
 * Controller Word
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



class Word extends CI_Controller
{

  public function index()
  {
    $phpWord = new PhpWord();
    $section = $phpWord->addSection();
    $section->addText('Hello World !');

    $writer = new Word2007($phpWord);

    $filename = 'simple';

    header('Content-Type: application/msword');
    header('Content-Disposition: attachment;filename="' . $filename . '.docx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
  }
}


/* End of file Word.php */
/* Location: ./application/controllers/Word.php */