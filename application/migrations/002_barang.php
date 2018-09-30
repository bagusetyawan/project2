<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_barang extends CI_Migration
{
    /**
     * Lets create user table
     */

    public function up()
    {
		$this->dbforge->add_field( array(
			'id' => array(
				'type'           => 'varchar',
				'constraint'     => 11
			),
			'tanggalMasuk' => array(
				'type'       => 'date',
				'null'       => false
			),
			'namaBarang' => array(
				'type'       => 'varchar',
				'constraint' => 255,
				'null'       => false
			),
			'HPP' => array(
				'type'      => 'double',
				'null'      => false,
				'default' 	=> 0
			),
			'hargaJual' => array(
				'type'		=> 'double',
				'null'		=> false,
				'default'	=> 0
			),
			'expDate' => array(
				'type'		=> 'date'
			),
			'idKategori' => array(
				'type'		=> 'int',
				'constraint' => 11
			),
			'idSatuan' => array(
				'type'		=> 'int',
				'constraint' => 11
			),
			'minimumStok' => array(
				'type'		=> 'int',
				'constraint' => 11
			),
			'stokAwal' => array(
				'type'		=> 'int',
				'constraint' => 11
			),
			'idPenyimpanan' => array(
				'type'		=> 'int',
				'constraint' => 11
			),
			'idSupplier' => array(
				'type'		=> 'int',
				'constraint' => 11
			),
			'created_at' => array(
				'type'		=> 'datetime',
				'null' 		=> true
			),
			'created_by' => array(
				'type'		=> 'varchar',
				'constraint'=> 11
			),
			'last_updated_at' => array(
				'type'		=> 'datetime',
				'null' 		=> true
			),
			'last_updated_by' => array(
				'type'		=> 'varchar',
				'constraint'=> 11
			)
		));

		/**
		 * add key and create the table
		 */	
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('mstBarang');

    	
    }

    public function down(){

    }




}
