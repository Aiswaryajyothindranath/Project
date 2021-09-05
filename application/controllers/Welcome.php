<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//echo base_url(); die;

		$this->load->view('welcome_message');
	}
    public function form()
	 {
	 	$this->load->view('form');
               
     }

    public function view_products()
	 {
        $this->load->model('Product_model');
	 	$data['data'] = $this->Product_model->products_list();
	 	$this->load->view('view_products',$data);               
     }

     public function invoice()
	 {
	 	$this->load->model('Product_model');
	 	$data['data'] = $this->Product_model->products_list();	 
	    $data['discount'] = $this->Product_model->get_discount();
	    if(count($data['data'])<1)	
	    {
	    	$data['count']=0;
	    }
	    else
	    {
	    	$data['count']=1;
	    }
	 	$this->load->view('invoice',$data);               
     }

  //    public function invoice_print()
	 // {
	 // 	$this->load->model('Product_model');
	 // 	$data['data'] = $this->Product_model->products_list();	 	
	 // 	$this->load->view('invoice_print',$data);               
  //    }



    public function product_submit()  
    {  
         $this->load->model('Product_model');
         if($this->input->post('save'))
         {
          $data = array(  
                        'name'     => $this->input->post('product_name'),  
                        'quantity'  => $this->input->post('quantity'),  
                        'unit_price'   =>$this->input->post('unit_price'),  
                        //'tax' => $this->input->post('tax')
                        ); 
        	$response=$this->Product_model->savingdata($data); 
	        if($response)
	        {
	        	$data['data'] = $this->Product_model->products_list();
	 	        $this->load->view('view_products',$data);               
	        	
	        }
        }  
    }


    public function discount()
	 {
	 	$this->load->model('Product_model');
	 	 $data['discount'] = $this->Product_model->get_discount();
	 	$this->load->view('discount',$data);
               
     }
    public function edit_discount()
	 {
	 	$this->load->model('Product_model');
	 	
	 	 $data['discount'] = $this->Product_model->get_discount();
	 	
	 	$this->load->view('edit_discount',$data);
               
     }

      public function edit_discount_submit()
	 {
	 	$this->load->model('Product_model');
	 	 $response = array(  
                        'discount_mode'     => $this->input->post('discount_mode'),  
                        'value'  => $this->input->post('value'),
                         'tax'  => $this->input->post('tax'),  
                        
                        ); 
	 	// echo "<pre>"; print_r($response); die;
	 
	 	$response= $this->Product_model->update_discount($response);
	 	 $data['discount'] = $this->Product_model->get_discount();
	 	
	 	$this->load->view('discount',$data);
               
     }

     public function discount_submit()
	 {
	 	$this->load->model('Product_model');
         if($this->input->post('save'))
         {
          $data = array(  
                        'discount_mode'     => $this->input->post('discount_mode'),  
                        'value'  => $this->input->post('value'),
                        'tax'  => $this->input->post('tax'),   
                        
                        ); 
        	$response=$this->Product_model->savingdiscountdata($data); 
	        if($response)
	        {
	        	
	 	        $data['discount'] = $this->Product_model->get_discount();
	 			$this->load->view('discount',$data);              
	        	
	        }
        }  
               
     }
 
     


       
        
    
}
