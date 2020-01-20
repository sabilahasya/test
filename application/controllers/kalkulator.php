<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');
class kalkulator extends CI_Controller {

	public function_construct()
	{
		parent::_construct();
	}
}

public function index()
{
	if(isset($_POST['hitung']))
	{
		$a = $this->input->post('angka1');
		$b = $this->input->post('angka2');
		$opr = $this->input->post('operator');
		if($opr == '*')
		{
			$total = $a * $b;
		}
		elseif 
			$opr == '/')
		{
			$total = $a / $b;
		}
		elseif ($opr == '+')
		{
			$total = $a + $b;

		}
		elseif ($opr == '-')
		{
			$total = $a - $b;
		}

		echo "<script> alert('".$total."'')</script>";
		$this->load->view('kalkulator');
	}
	elseif  
	{
		 $this->load->view('kalkulator');
		}	
}
}


 ?>