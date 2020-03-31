<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function index()
    {
        $this->template->load('shared/index', 'report/report');
    }
}