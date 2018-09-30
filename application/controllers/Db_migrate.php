<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Abd Hannan <hannan.ambisius@gmail.com>
 * @since 0.1
 * @category Controller to run migrations
 */
class Db_migrate extends CI_Controller
{
    /**
     * load migration library first
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('migration');
    }

    public function index()
    {
    	if ($this->migration->current() === FALSE) {
    		show_error($this->migration->error_string());
    	}else {
    		echo 'Migration success';
    	}
    }
}

/* End of file Db_migrate.php */
/* Location: ./application/controllers/Db_migrate.php */