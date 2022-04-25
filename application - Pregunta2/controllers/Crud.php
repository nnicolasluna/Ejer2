<?php 
class Crud extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Crud_model');
	}
        /*Insert*/
	public function savedata()
	{
		/*load registration view form*/
		$this->load->view('insert');
	
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['ci']=$this->input->post('ci');
			$data['Nombrecompleto']=$this->input->post('Nombrecompleto');
			$data['fechanacimiento']=$this->input->post('fechanacimiento');
			$data['departamento']=$this->input->post('departamento');
			$response=$this->Crud_model->saverecords($data);
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}
	
}
?>