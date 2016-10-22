<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculate extends CI_Controller {
	public function index()
	{
	}
	public function Add($a,$b)
	{
		echo $a+$b;
	}
}
