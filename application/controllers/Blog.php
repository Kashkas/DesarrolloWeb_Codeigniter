<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Academic Free License version 3.0
 *
 * This source file is subject to the Academic Free License (AFL 3.0) that is
 * bundled with this package in the files license_afl.txt / license_afl.rst.
 * It is also available through the world wide web at this URL:
 * http://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniterOnfire
 * @author		Diego Portales University
 * @copyright	Copyright (c) 2014 - 2014, Diego Portales University (http://udp.cl/)
 * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link		http://codeigniteronfire.com
 * @since		Version 1.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);

class Blog extends CI_Controller {
  public function __construct()
       {
            parent::__construct();
            // Add your models here
            $this->load->model('Blogmodel');
            $this->load->view("header");

       }
	
	public function index()
	{
		$data = $this->Blogmodel->get_last_ten_entries();
		$this->load->view("list", Array('data' => $data));
	}
	
	public function insertar(){
		$this->load->view("nuevo");
	}
	
	public function insert_new(){
		$this->Blogmodel->insert_entry();
		$this->index();
	}
	
	public function byid($id){
		//echo $id;
		$data = $this->Blogmodel->get_by_id($id);
		$this->load->view("blog", Array('data' => $data));
	}
	
	public function editar($id){
		$data = $this->Blogmodel->get_by_id($id);
		$this->load->view("editar", Array('data' => $data));
	}
	
	public function actualizar(){
		$data = $this->Blogmodel->update_entry();
		//echo $_POST['id'];
		$this->byid($_POST['id']);
	}
	
	public function eliminar($id){
		$data = $this->Blogmodel->delete_entry($id);
		$this->index();
	}
	
}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */
