<?php

class Controller {

	
	public $load;
	public $model;
	
	
	function __construct($pageMethod = null)
	{
		
		$this->load = new Load();
		$this->model = new Model();
		
		$this->$pageMethod();
	}
	
    function home()
	{
		
		$this->load->view('viewMontana');
		

	}

	
	function apiDrinksImages()
	{
		$data = $this->model->model3D_info();
		$this->load->view('view3DAppTest_2', $data);
	}

	
	function apiCreateTable()
	{
	  	
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppData', $data);
	}  	
	
	
	function apiLoadImage()
	{
	   $data = $this->model->dbGetBrand();
	  
	   $this->load->view('viewDrinks', $data);
	}

	
	function apiMontana()
	{
		$this->load->view('viewMontana');	
	}

	function apiGetMontanaData()
	{
		$data = $this->model->dbGetData();
		echo json_encode($data);
	}  	  	
	
}
?>    