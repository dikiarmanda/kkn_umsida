<?php

namespace App\Libraries;

use CodeIgniter\Libraries;

class Template
{
    function __construct() {}

    function display($content = "", $data = [])
    {
        $template['pagecontent'] = view($content, $data);
        echo view('template/index', $template);
    }

    // LOGIN
     function displaylogin($content = "", $data = [])
    {
        $template['pagecontent'] = view($content, $data);
        echo view('template/login', $template);
    }
}
/* End of file template.php */
/* Location: ./application/libraries/template.php */