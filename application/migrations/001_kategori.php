<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_kategori extends CI_Migration
{
    /**
     * Lets create user table
     */

    public function up()
    {
    	if(!$this->db->table_exists('kategori')){
    		$this->dbforge->add_field( array(
				'id' => array(
					'type'           => 'int',
					'constraint'     => 11,
					'unsigned'       => true,
					'auto_increment' => true
				),
				'kategori' => array(
					'type'       => 'varchar',
					'constraint' => 255,
					'null'       => false
				)
			));

			/**
			 * add key and create the table
			 */	
			$this->dbforge->add_key('id', true);
			$this->dbforge->create_table('kategori');
    	}
		

    	
    }

    public function down(){

    }




}

/* End of file 002_add_user.php */
/* Location: ./application/migrations/002_add_user.php */