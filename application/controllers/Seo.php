<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {

	public function __construct() 
		{

		parent::__construct();	
		$this->load->helper(array('url','html','form'));
		$this->load->library('session','form_validation');
		$this->load->library('email');
		$this->load->library('pdf');
	}
	/*public function index()
	{
		$data['currentURL'] = current_url();
		$this->load->view('header',$data);
		$this->load->view('seo');
		$this->load->view('footer');
	}*/
	public function price(){
		redirect('seo#digitalmarketing_price');
		
	}
	
	public function readmore()
	{
		$data['meta_title'] = 'Pracha';
		$data['meta_description'] = 'digital';
		$data['meta_keywords'] = 'matketing';
		$data['currentURL'] = current_url();
			$this->load->view('header',$data);
		$this->load->view('seoreadmore');
		$this->load->view('footer');
	}
	/*public function ppc()
	{
	$data['currentURL'] = current_url();
		$this->load->view('header',$data);
	$this->load->view('ppc');
	$this->load->view('footer');
	}*/
	/*public function affilatemanagement()
	{
	$data['currentURL'] = current_url();
		$this->load->view('header',$data);
	$this->load->view('affilatemanagement');
	$this->load->view('footer');
	}*/
	public function affilatemanagementpdf()
	{
		 $path = rtrim(FCPATH,"/");
		//echo '<pre>';print_r($list);exit;
		//echo '<pre>';print_r($data['details']);exit;
		$file_name = 'affilatemanagement.pdf'; 
		$data['name']=$file_name;		
		$pdfFilePath = $path."/assets/downloads/".$file_name;
		ini_set('memory_limit','320M'); // boost the memory limit if it's low <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
		$html =$this->load->view('affilatemanagement',$data, true); // render the view into HTML

		echo '<pre>';print_r($html);exit;
		//$this->load->library('pdf');


		$pdf = $this->pdf->load();
		$pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date('M-d-Y')); // Add a footer for good measure <img src="https://s.w.org/images/core/emoji/72x72/1f609.png" alt="??" draggable="false" class="emoji">
		$pdf->SetDisplayMode('fullpage');
		$pdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list
		$pdf->WriteHTML($html); // write the HTML into the PDF
		$pdf->Output($pdfFilePath, 'F'); 
	}
	
	
}
