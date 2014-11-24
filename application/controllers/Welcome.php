<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
use \Michelf\Markdown;
 
class Welcome extends CI_Controller {
 
    public function index()
    {
        echo Markdown::defaultTransform("# Hello World\n## Hello Markdown\n### Hello Codeigniter");
    }
}
 
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
