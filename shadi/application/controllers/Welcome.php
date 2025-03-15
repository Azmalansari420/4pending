<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}

	/*-----story details----*/
	public function story_details($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('happy_story',array('slug'=>$id,));
		$skugid = $slugdata[0]->id;
		$this->load->view('story-details',$data);
	}
	/*-blog details-------*/
	public function blog_details($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('blog',array('slug'=>$id,));
		$skugid = $slugdata[0]->id;
		$this->load->view('blog-details',$data);
	}

	/*--member-profile---*/
	public function member_profile($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('registration',array('id'=>$id,));
		if(!empty($slugdata))
		{
			$skugid = $slugdata[0]->id;
			$this->load->view('member-profile',$data);

		}
		else
		{
			$this->load->view('error');
		}
	}












	public function all($page)
	{
		$data = array();		
		$check_page = FCPATH.'application/views/'.$page.'.php';
		if(file_exists($check_page))
		{
			$this->load->view($page,$data);
		}
		else
		{
			$this->load->view('error');
		}
		
	}


	public function enquiry_form()
	{
		if(isset($_POST['submit']))
		{
			$data2['name'] = $this->input->post('name');
			$data2['email'] = $this->input->post('email');
			$data2['mobile'] = $this->input->post('mobile');
			$data2['subject'] = $this->input->post('subject');
			$data2['message'] = $this->input->post('message');

			$this->crud->insert('contact',$data2);
			$this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully Submit.</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	/*search list API*/
	function membernumber()
    {
        $result = array(); 
        // $user_data = array();
        $user_data = "";

        $age_from = $this->input->post("age_from");
        $age_to = $this->input->post("age_to");



        $from_year = 0;
        $to_year = 0;
        if(!empty($age_from))
        {
        	$from_year = date("Y")-$age_from;
        }
        if(!empty($age_to))
        {
        	$to_year = date("Y")-$age_to;
        }

        $memeber_id = $this->input->post("memeber_id");
        $marital_status = $this->input->post("marital_status");
        $member_religion_id = $this->input->post("member_religion_id");
        $member_caste_id = $this->input->post("member_caste_id");
        $mothere_tongue = $this->input->post("mothere_tongue");
        $partner_profession = $this->input->post("partner_profession");
        $permanent_country_id = $this->input->post("permanent_country_id");
        $permanent_state_id = $this->input->post("permanent_state_id");
        $permanent_city_id = $this->input->post("permanent_city_id");
        $membership = $this->input->post("membership");

        
        if(!empty($from_year) && !empty($to_year))
        	$this->db->where(" CONCAT(YEAR(dob))<='$from_year' and CONCAT(YEAR(dob))>='$to_year' ");



        
        if(!empty($memeber_id))
        {
        	$this->db->where(array("memeber_id"=>$memeber_id,));
        }
        else
        {
        
	        if(!empty($marital_status))
				$this->db->where(array("marital_status"=>$marital_status,));
	        if(!empty($member_religion_id))
	        	$this->db->where(array("member_religion_id"=>$member_religion_id,));
	        if(!empty($member_caste_id))
	        	$this->db->where(array("member_caste_id"=>$member_caste_id,));
	        if(!empty($mothere_tongue))
	        	$this->db->where(array("mothere_tongue"=>$mothere_tongue,));
	        if(!empty($partner_profession))
	        	$this->db->where(array("partner_profession"=>$partner_profession,));
	        if(!empty($permanent_country_id))
	        	$this->db->where(array("permanent_country_id"=>$permanent_country_id,));
	        if(!empty($permanent_state_id))
	        	$this->db->where(array("permanent_state_id"=>$permanent_state_id,));
	        if(!empty($permanent_city_id))
	        	$this->db->where(array("permanent_city_id"=>$permanent_city_id,));

	        if($membership==2 || $membership==1)
	        {
	        	$membership_status = 0;
	        	if($membership==1)
	        		$membership_status = 1;
	        	if($membership==2)
	        		$membership_status = 0;
	        	$this->db->where(array("membership"=>$membership_status,));
	        }
	    }
        

              
        $rowd = $this->db->get_where("registration")->result_object();
     
        // print_r($this->db->last_query());

        foreach($rowd as $row)
        {
        	$user_data .= $this->load->view('member-list-card',array('row'=>$row),true);
        	
            // $user_data[] = array(
            //     "id"=>$row->id,
            //     "from_year"=>"$from_year",                
            //     "to_year"=>"$to_year",
            //     "memeber_id"=>$row->memeber_id,                
            //     "marital_status"=>$row->marital_status,                
            //     "member_religion_id"=>$row->member_religion_id,                
            //     "member_caste_id"=>$row->member_caste_id,                
            //     "mothere_tongue"=>$row->mothere_tongue,                
            //     "partner_profession"=>$row->partner_profession,                
            //     "permanent_country_id"=>$row->permanent_country_id,                
            //     "permanent_state_id"=>$row->permanent_state_id,                
            //     "permanent_city_id"=>$row->permanent_city_id, 
            // );
        }

        if(!empty($user_data))
        {
            $result['message'] = "data fetch successfully";
            $result['status']  = "200";
            $result['data']    = $user_data;
        }
        else
        {
            $result['message'] = "data not fetch successfully";
            $result['status']  = "400";
            $result['data']    = $user_data;
        }
        echo json_encode($result);
    }





	// public function contact()
	// {
	// 	if(isset($_POST['submit']))
	// 	{
	// 		$data2['name'] = $this->input->post('name');
	// 		$data2['email'] = $this->input->post('email');
	// 		$data2['mobile'] = $this->input->post('mobile');
	// 		$data2['subject'] = $this->input->post('subject');
	// 		$data2['regarding'] = $this->input->post('regarding');
	// 		$data2['message'] = $this->input->post('message');

	// 		$this->crud->insert('contact',$data2);

	// 		$message = '
	// 		 <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
	// 		    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"font-family: sans-serif;">
	// 		        <tr>
	// 		            <td>
	// 		                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
	// 		                    align="center" cellpadding="0" cellspacing="0">
	// 		                    <tr>
	// 		                        <td style="height:80px;">&nbsp;</td>
	// 		                    </tr>
	// 		                    <!-- Logo -->
	// 		                    <tr>
	// 		                        <td style="text-align:center;">
	// 		                          <a href="https://rakeshmandal.com" title="logo" target="_blank">
	// 		                            <img width="60" src="http://smartacademy.life/media/uploads/site_setting/hjh.png" title="logo" alt="logo">
	// 		                          </a>
	// 		                        </td>
	// 		                    </tr>
	// 		                    <tr>
	// 		                        <td style="height:20px;">&nbsp;</td>
	// 		                    </tr>
	// 		                    <!-- Email Content -->
	// 		                    <tr>
	// 		                        <td>
	// 		                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
	// 		                                style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
	// 		                                <tr>
	// 		                                    <td style="height:40px;">&nbsp;</td>
	// 		                                </tr>
	// 		                                <!-- Title -->
	// 		                                <tr>
	// 		                                    <td style="padding:0 15px; text-align:center;">
	// 		                                        <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;font-family:sans-serif;">Join us as a Trainee Form</h1>
	// 		                                        <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; 
	// 		                                        width:100px;"></span>
	// 		                                    </td>
	// 		                                </tr>
	// 		                                <!-- Details Table -->
	// 		                                <tr>
	// 		                                    <td>
	// 		                                        <table cellpadding="0" cellspacing="0"
	// 		                                            style="width: 100%; border: 1px solid #ededed">
	// 		                                            <tbody>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Name:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["name"].'</td>
	// 		                                                </tr>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Email:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["email"].'</td>
	// 		                                                </tr>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Mobile:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["mobile"].'</td>
	// 		                                                </tr>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Regarding:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["regarding"].'</td>
	// 		                                                </tr>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                       Subject:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["subject"].'</td>
	// 		                                                </tr>
			                                                                                               
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Message:</td>
	// 		                                                    <td style="padding: 10px; color: #455056;">'.$_POST["message"].'</td>
	// 		                                                </tr>
	// 		                                            </tbody>
	// 		                                        </table>
	// 		                                    </td>
	// 		                                </tr>
	// 		                                <tr>
	// 		                                    <td style="height:40px;">&nbsp;</td>
	// 		                                </tr>
	// 		                            </table>
	// 		                        </td>
	// 		                    </tr>
	// 		                    <tr>
	// 		                        <td style="height:20px;">&nbsp;</td>
	// 		                    </tr>
	// 		                    <tr>
	// 		                        <td style="text-align:center;">
	// 		                                <p style="font-size:14px; color:#455056bd; line-height:18px; margin:0 0 0;">&copy; <strong>http://smartacademy.life/</strong></p>
	// 		                        </td>
	// 		                    </tr>
	// 		                </table>
	// 		            </td>
	// 		        </tr>
	// 		    </table>
	// 		</body>
	// 		 ';


	// 	  $this->mail->sendmail($message);

	// 	  $this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully Submit.</div>');

	// 	}
	// 	$this->load->view('contact');
	// }




	// public function career_form()
	// {
	// 	if(isset($_POST['submit']))
	// 	{
	// 		if($_FILES['image']['name']!='')
	// 		{
	// 			$bimage = $_FILES['image']['name'];
	// 			$path = 'media/uploads/career/'.$bimage;
	// 			move_uploaded_file($_FILES['image']['tmp_name'],$path);
	// 		}
	// 		else
	// 		{
	// 			$bimage = "";
	// 		}
	// 		$data['image'] = $bimage;
	// 		$data['name'] = $this->input->post('name');			
	// 		$data['email'] = $this->input->post('email');			
	// 		$data['mobile'] = $this->input->post('mobile');			
	// 		$data['job_profile'] = $this->input->post('job_profile');			
	// 		$data['message'] = $this->input->post('message');

	// 		$this->crud->insert('career',$data);
	// 		redirect($_SERVER['HTTP_REFERER']);
	// 	}

	// }











}
