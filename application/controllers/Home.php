<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

        /**
         * Index Page for this controller.
         *
         * Maps to the following URL
         *              http://example.com/index.php/welcome
         *      - or -
         *              http://example.com/index.php/welcome/index
         *      - or -
         * Since this controller is set as the default controller in
         * config/routes.php, it's displayed at http://example.com/
         *
         * So any other public methods not prefixed with an underscore will
         * map to /index.php/welcome/<method_name>
         * @see https://codeigniter.com/user_guide/general/urls.html
         */
        public function index()
        {
                $this->load->view('welcome_message');
        }

                public function form()
        {
                // base_url(); die;
                //$this->load->helper('form');
                return view('form');
        }

         public function product_submit()  
    {  
   $crudModel = new Product_model();
          $data = array(  
                        'name'     => $this->request->getPost('product_name'),  
                        'quantity'  => $this->request->getPost('quantity'),  
                        'unit_price'   =>$this->request->getPost('unit_price'),  
                        'tax' => $this->request->getPost('tax')
                        ); 
//echo "jhjh"; die;
//$this->load->model('Product_model');
         // print_r($data); die;
        $response=$crudModel->savingdata($data);
      print_r($response); die;


       
        
    }  
}


              