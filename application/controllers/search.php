<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	//Grab the data
	
	//When live, grab it when user is logged in from user id.
	
	$id = 1;
	
	$query = $this->db->get_where('user_info', array('user_id' => $id));
	
	foreach ($query->result() as $row)
	{
		$licence_no = $row->drivers_licence_number;
		
		$theory_pass = $row->theory_pass;
		
		$application_ref = $row->application_ref;
	}

	 $this->load->helper('url');
     $base_url = base_url();
	
	//Log in to the website with curl

		/*Change URL -> https://driverpracticaltest.direct.gov.uk/logincheck.aspx */
		
		/*Change Date URL -> https://driverpracticaltest.direct.gov.uk/bookingdetails.aspx */
    $url = 'https://driverpracticaltest.direct.gov.uk/logincheck.aspx/';
	$this->curl->create($url);
	$ssl_cert_url = $base_url.'sslcert/driverpracticaltest.direct.gov.uk.crt';
	$this->curl->ssl(TRUE, 2, $ssl_cert_url);

	phpinfo();
	
    echo $this->curl->simple_get($url);
    //print_r($this->curl->simple_get('https://driverpracticaltest.direct.gov.uk/logincheck.aspx', 
      //  array('txtLicence'=>'Bowel912313CA9CN', 'txtTheoryPass'=>'328359736')));
    
    //print_r($this->curl->http_login('Bowel912313CA9CN', '328359736'));

	/*
	    $this->load->helper('url');
        $data['base_url'] = base_url();
		$this->load->view('free', $data);
	*/
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
