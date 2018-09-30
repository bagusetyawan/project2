<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_alterBarang extends CI_Migration
{
    /**
     * Lets create user table
     */

    public function up()
    {
    	$field = array(
	    	'imgPath' => array(
				'type'           => 'varchar',
				'constraint'     => 255
			)
    	);
		$this->dbforge->add_field( array(
			
		));

		$this->dbforge->add_column('mstBarang', $field);

    	
    }

    public function down(){

    }




}
