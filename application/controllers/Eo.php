<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Eo extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->template->load('template', 'eo');
    }
}
