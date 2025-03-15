<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function user_dashboard()
	{
		chech_userdashboard_login();
		$this->load->view('user-dashboard');
	}
	public function user_change_password()
	{
		chech_userdashboard_login();
		$this->load->view('user-change-password');
	}
	public function user_chat()
	{
		chech_userdashboard_login();
		$this->load->view('user-chat');
	}
	public function user_create_support_ticket()
	{
		chech_userdashboard_login();
		$this->load->view('user-create-support-ticket');
	}
	public function user_gallery()
	{
		chech_userdashboard_login();
		$this->load->view('user-gallery');
	}
	public function user_ignored_list()
	{
		chech_userdashboard_login();
		$this->load->view('user-ignored-list');
	}
	public function user_interest_requests()
	{
		chech_userdashboard_login();
		$this->load->view('user-interest-requests');
	}
	public function user_interests()
	{
		chech_userdashboard_login();
		$this->load->view('user-interests');
	}
	public function user_notifications()
	{
		chech_userdashboard_login();
		$this->load->view('user-notifications');
	}
	public function user_package_purchase_history()
	{
		chech_userdashboard_login();
		$this->load->view('user-package-purchase-history');
	}
	public function user_profile_settings()
	{
		chech_userdashboard_login();
		$this->load->view('user-profile-settings');
	}
	public function user_referral_earnings()
	{
		chech_userdashboard_login();
		$this->load->view('user-referral-earnings');
	}
	public function user_shortlists()
	{
		chech_userdashboard_login();
		$this->load->view('user-shortlists');
	}
	public function user_support_ticket()
	{
		chech_userdashboard_login();
		$this->load->view('user-support-ticket');
	}
	public function user_wallet_recharge_methods()
	{
		chech_userdashboard_login();
		$this->load->view('user-wallet-recharge-methods');
	}
	public function user_wallet_withdraw_request_history()
	{
		chech_userdashboard_login();
		$this->load->view('user-wallet-withdraw-request-history');
	}
	public function user_wallet()
	{
		chech_userdashboard_login();
		$this->load->view('user-wallet');
	}

	public function check_login()
	{
	    if(empty($this->session->userdata("userdashboard")))
	    {
	    	$this->load->view("login");
	    }
	    else
	    {
	    	echo "200";
	    }
	}




	public function registration()
	{
		if(isset($_POST['submit']))
		{
			$random = random_strings(10);
			$data2['memeber_id'] = $random;
			$data2['image'] = "user.jpg";
			$data2['on_behalf'] = $this->input->post('on_behalf');
			$data2['first_name'] = $this->input->post('first_name');
			$data2['last_name'] = $this->input->post('last_name');
			$data2['gender'] = $this->input->post('gender');
			$data2['dob'] = $this->input->post('dob');
			$data2['email'] = $this->input->post('email');
			$data2['country_code'] = $this->input->post('country_code');
			$data2['mobile'] = $this->input->post('mobile');
			$data2['password'] = $this->input->post('password');
			$data2['confirm_password'] = $this->input->post('confirm_password');
			$data2['reffer_code'] = $this->input->post('reffer_code');
			$data2['status'] = '1';
			$data2['addeddate'] = date('y-m-d');

			$email_check = $this->crud->selectDataByMultipleWhere('registration',array('email'=>$data2['email'],));
			$mobile_check = $this->crud->selectDataByMultipleWhere('registration',array('mobile'=>$data2['mobile'],));
			if(empty($email_check) && empty($mobile_check))
			{
			  $this->crud->insert('registration',$data2);
			  $this->session->set_flashdata('register_message','<div class="alert alert-success">You have been successsully Registration.</div>');
			}
			else
			{
				$message = '';
				if(!empty($email_check))
					$message = 'Email already exist..';
				else
					$message = 'Mobile already exist..';
				$this->session->set_flashdata('error_message','<div class="alert alert-danger">'.$message.'</div>');
				redirect('register');	
			}

			redirect('login');	
		}
	}



	public function user_login()
	{

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->db->or_where(array('mobile'=>$email,'email'=>$email,));
		$row = $this->db->get_where('registration')->result_object();

		if(count($row)>0)
		{
			$user = $row[0];
			if($user->password==$password)
			{
				$data = array(
							'userdashboard'=>$user->id,
							  'EMAIL' =>$user->email,
							  'logged_in' => true,
							);
				$this->session->set_userdata($data);
				if(!empty($this->session->userdata("redirect_url")))
				{
					$redirect_url = $this->session->userdata("redirect_url");
					$this->session->unset_userdata("redirect_url");
					redirect($redirect_url);
				}
				else
				{
					redirect('user-dashboard');
				}				
			}
			else
			{
				$this->session->set_flashdata('login_message','<div class="alert alert-danger">Invalid Password.</div>');
				redirect('login');				
			}
		}
		else
		{
		  $this->session->set_flashdata('login_message','<div class="alert alert-danger">Invalid EMAIL/Mobile.</div>');
		  redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function userlogout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message','<div class="alert alert-success">You have been successsully logout.</div>');
		redirect('login');
	}

	
	


	/*------user introduction---*/
	public function user_introduction()
	{
		$id = temp_session_id();
		$introduction = $this->input->post('introduction');

		$data2 = array(
					"id"=>$id,
					"introduction"=>$introduction,
				);
		if($this->db->update('registration',$data2,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Introduction Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}

	/*------user Email---*/
	public function user_email()
	{
		$id = temp_session_id();
		$email = $this->input->post('email');

		$data2 = array(
					"id"=>$id,
					"email"=>$email,
				);
		if($this->db->update('registration',$data2,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Email Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}

	/*------user basic introduction---*/
	public function basic_introduction()
	{
		$id = temp_session_id();
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$gender = $this->input->post('gender');
		$dob = $this->input->post('dob');
		$mobile = $this->input->post('mobile');
		$on_behalf = $this->input->post('on_behalf');
		$marital_status = $this->input->post('marital_status');
		$children = $this->input->post('children');

		if($_FILES['image']['name']!='')
		{
			$bimage = $_FILES['image']['name'];
			$path = 'media/uploads/registration/'.$bimage;
			move_uploaded_file($_FILES['image']['tmp_name'],$path);
		}
		else
		{
			$bimage = $_POST['oldimage'];
		}
		$data['image'] = $bimage;

		$data2 = array(
					"id"=>$id,
					"first_name"=>$first_name,
					"last_name"=>$last_name,
					"gender"=>$gender,
					"dob"=>$dob,
					"mobile"=>$mobile,
					"on_behalf"=>$on_behalf,
					"marital_status"=>$marital_status,
					"children"=>$children,
					"image"=>$bimage,
				);


		if($this->db->update('registration',$data2,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Basic Information Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}



	public function present_address()
	{
		$id = temp_session_id();
		$present_country_id = $this->input->post('present_country_id');
		$present_state_id = $this->input->post('present_state_id');
		$present_city_id = $this->input->post('present_city_id');
		$present_postal_code = $this->input->post('present_postal_code');

		$data2 = array(
					"id"=>$id,
					"present_country_id"=>$present_country_id,
					"present_state_id"=>$present_state_id,
					"present_city_id"=>$present_city_id,
					"present_postal_code"=>$present_postal_code,
				);
		if($this->db->update('registration',$data2,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Address Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}


	public function physical_attributes()
	{
		$id = temp_session_id();
		$height = $this->input->post('height');
		$weight = $this->input->post('weight');
		$eye_color = $this->input->post('eye_color');
		$hair_color = $this->input->post('hair_color');
		$complexion = $this->input->post('complexion');
		$blood_group = $this->input->post('blood_group');
		$body_type = $this->input->post('body_type');
		$body_art = $this->input->post('body_art');
		$disability = $this->input->post('disability');

		$data2 = array(
					"id"=>$id,
					"height"=>$height,
					"weight"=>$weight,
					"eye_color"=>$eye_color,
					"hair_color"=>$hair_color,
					"complexion"=>$complexion,
					"blood_group"=>$blood_group,
					"body_type"=>$body_type,
					"body_art"=>$body_art,
					"disability"=>$disability,
				);
		if($this->db->update('registration',$data2,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Physical Attributes Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}


	public function language()
	{
		$id = temp_session_id();
		$mothere_tongue = $this->input->post('mothere_tongue');
		$known_languages = $this->input->post('known_languages');

		$data2 = array(
					"id"=>$id,
					"mothere_tongue"=>$mothere_tongue,
					"known_languages"=>$known_languages,
				);
		if($this->db->update('registration',$data2,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Language Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}

	public function hobbie_intrest()
	{
		$id = temp_session_id();
		$hobbies = $this->input->post('hobbies');
		$interests = $this->input->post('interests');
		$music = $this->input->post('music');
		$books = $this->input->post('books');
		$movies = $this->input->post('movies');
		$tv_shows = $this->input->post('tv_shows');
		$sports = $this->input->post('sports');
		$fitness_activities = $this->input->post('fitness_activities');
		$cuisines = $this->input->post('cuisines');
		$dress_styles = $this->input->post('dress_styles');
		

		$data3 = array(
					"id"=>$id,
					"hobbies"=>$hobbies,
					"interests"=>$interests,
					"music"=>$music,
					"books"=>$books,
					"movies"=>$movies,
					"tv_shows"=>$tv_shows,
					"sports"=>$sports,
					"fitness_activities"=>$fitness_activities,
					"cuisines"=>$cuisines,
					"dress_styles"=>$dress_styles,
				);
		if($this->db->update('registration',$data3,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Hobbies &amp; Interest Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}

	public function personal_attitute()
	{
		$id = temp_session_id();
		$affection = $this->input->post('affection');
		$humor = $this->input->post('humor');
		$political_views = $this->input->post('political_views');
		$religious_service = $this->input->post('religious_service');
		

		$data3 = array(
					"id"=>$id,
					"affection"=>$affection,
					"humor"=>$humor,
					"political_views"=>$political_views,
					"religious_service"=>$religious_service,
				);
		if($this->db->update('registration',$data3,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Personal Attitude &amp; Behavior Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}


	public function residenci_info()
	{
		$id = temp_session_id();
		$immigration_status = $this->input->post('immigration_status');
		$birth_country_id = $this->input->post('birth_country_id');
		$recidency_country_id = $this->input->post('recidency_country_id');
		$growup_country_id = $this->input->post('growup_country_id');

		$data3 = array(
					"id"=>$id,
					"immigration_status"=>$immigration_status,
					"birth_country_id"=>$birth_country_id,
					"recidency_country_id"=>$recidency_country_id,
					"growup_country_id"=>$growup_country_id,
				);
		if($this->db->update('registration',$data3,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Residency Information Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}

	
	public function spitual_background()
	{
		$id = temp_session_id();
		$member_religion_id = $this->input->post('member_religion_id');
		$member_caste_id = $this->input->post('member_caste_id');
		$member_sub_caste_id = $this->input->post('member_sub_caste_id');
		$ethnicity = $this->input->post('ethnicity');
		$personal_value = $this->input->post('personal_value');
		$family_value_id = $this->input->post('family_value_id');
		$community_value = $this->input->post('community_value');

		$data3 = array(
					"id"=>$id,
					"member_religion_id"=>$member_religion_id,
					"member_caste_id"=>$member_caste_id,
					"member_sub_caste_id"=>$member_sub_caste_id,
					"ethnicity"=>$ethnicity,
					"personal_value"=>$personal_value,
					"family_value_id"=>$family_value_id,
					"community_value"=>$community_value,
				);
		if($this->db->update('registration',$data3,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Spiritual & Social Background Information Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}

	public function lifestyle()
	{
		$id = temp_session_id();
		$diet = $this->input->post('diet');
		$drink = $this->input->post('drink');
		$smoke = $this->input->post('smoke');
		$living_with = $this->input->post('living_with');
		
		$data3 = array(
					"id"=>$id,
					"diet"=>$diet,
					"drink"=>$drink,
					"smoke"=>$smoke,
					"living_with"=>$living_with,
				);
		if($this->db->update('registration',$data3,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Lifestyle Information Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}


	public function astronomic()
	{
		$id = temp_session_id();
		$sun_sign = $this->input->post('sun_sign');
		$moon_sign = $this->input->post('moon_sign');
		$time_of_birth = $this->input->post('time_of_birth');
		$city_of_birth = $this->input->post('city_of_birth');
		
		$data3 = array(
					"id"=>$id,
					"sun_sign"=>$sun_sign,
					"moon_sign"=>$moon_sign,
					"time_of_birth"=>$time_of_birth,
					"city_of_birth"=>$city_of_birth,
				);
		if($this->db->update('registration',$data3,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Astronomic Information Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}
	
	public function permanent_address()
	{
		$id = temp_session_id();
		$permanent_country_id = $this->input->post('permanent_country_id');
		$permanent_state_id = $this->input->post('permanent_state_id');
		$permanent_city_id = $this->input->post('permanent_city_id');
		$permanent_postal_code = $this->input->post('permanent_postal_code');
		
		$data3 = array(
					"id"=>$id,
					"permanent_country_id"=>$permanent_country_id,
					"permanent_state_id"=>$permanent_state_id,
					"permanent_city_id"=>$permanent_city_id,
					"permanent_postal_code"=>$permanent_postal_code,
				);
		if($this->db->update('registration',$data3,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Permanent Address Information Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}

	
	public function family_info()
	{
		$id = temp_session_id();
		$father = $this->input->post('father');
		$mother = $this->input->post('mother');
		$sibling = $this->input->post('sibling');
				
		$data3 = array(
					"id"=>$id,
					"father"=>$father,
					"mother"=>$mother,
					"sibling"=>$sibling,
				);
		if($this->db->update('registration',$data3,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Family Information Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}

	public function partner_expect()
	{
		$id = temp_session_id();
		$general = $this->input->post('general');
		$residence_country_id = $this->input->post('residence_country_id');
		$partner_height = $this->input->post('partner_height');
		$partner_weight = $this->input->post('partner_weight');
		$partner_marital_status = $this->input->post('partner_marital_status');
		$partner_children_acceptable = $this->input->post('partner_children_acceptable');
		$partner_religion_id = $this->input->post('partner_religion_id');
		$partner_caste_id = $this->input->post('partner_caste_id');
		$partner_sub_caste_id = $this->input->post('partner_sub_caste_id');
		$language_id = $this->input->post('language_id');
		$pertner_education = $this->input->post('pertner_education');
		$partner_profession = $this->input->post('partner_profession');
		$smoking_acceptable = $this->input->post('smoking_acceptable');
		$drinking_acceptable = $this->input->post('drinking_acceptable');
		$partner_diet = $this->input->post('partner_diet');
		$partner_body_type = $this->input->post('partner_body_type');
		$partner_personal_value = $this->input->post('partner_personal_value');
		$partner_manglik = $this->input->post('partner_manglik');
		$partner_country_id = $this->input->post('partner_country_id');
		$partner_state_id = $this->input->post('partner_state_id');
		$family_value_id2 = $this->input->post('family_value_id2');
		$pertner_complexion = $this->input->post('pertner_complexion');
				
		$data3 = array(
					"id"=>$id,
					"general"=>$general,
					"residence_country_id"=>$residence_country_id,
					"partner_height"=>$partner_height,
					"partner_weight"=>$partner_weight,
					"partner_marital_status"=>$partner_marital_status,
					"partner_children_acceptable"=>$partner_children_acceptable,
					"partner_religion_id"=>$partner_religion_id,
					"partner_caste_id"=>$partner_caste_id,
					"partner_sub_caste_id"=>$partner_sub_caste_id,
					"language_id"=>$language_id,
					"pertner_education"=>$pertner_education,
					"partner_profession"=>$partner_profession,
					"smoking_acceptable"=>$smoking_acceptable,
					"drinking_acceptable"=>$drinking_acceptable,
					"partner_diet"=>$partner_diet,
					"partner_body_type"=>$partner_body_type,
					"partner_personal_value"=>$partner_personal_value,
					"partner_manglik"=>$partner_manglik,
					"partner_country_id"=>$partner_country_id,
					"partner_state_id"=>$partner_state_id,
					"family_value_id2"=>$family_value_id2,
					"pertner_complexion"=>$pertner_complexion,
				);
		if($this->db->update('registration',$data3,array("id"=>$id,)))
		{
			$result['status'] = '200';
			$result['message'] = 'Family Information Update Successfully..';
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Not Successfully..';
		}
		echo json_encode($result);				
	}


	function user_gallery_upload()
	{
		date_default_timezone_set('Asia/Kolkata');
		if(isset($_POST['submit']))
		{
			$length=count($_FILES['images']['name']);

			for($i=0;$i<$length;$i++) 
			{ 
				$filename = $_FILES['images']['name'][$i];
				$tempname = $_FILES['images']['tmp_name'][$i];
				move_uploaded_file($tempname,'media/uploads/user_images/'.$filename);

			    $data['images'] = $filename;		
			    $user_id = temp_session_id();
				$data['user_id'] = $user_id;			
				$data['status'] = 1;	
				$data['addeddate'] = date('y-m-d h:i:sA');	
			    $this->crud->insert('user_images',$data);
			}		
			$this->session->set_flashdata('user_gallery_message','<div class="alert alert-success">Image has been successfully saved.</div>');
			redirect($_SERVER['HTTP_REFERER']);	
		}
	}


	function user_gallery_upload_delete($id)
	{
		$data=$this->crud->selectDataByMultipleWhere('user_images',array('id'=>$id));
		$this->crud->delete('user_images',$id);
		$this->session->set_flashdata('user_gallery_message','<div class="alert alert-danger">Image has been successfully deleted.</div>');
		redirect($_SERVER['HTTP_REFERER']);
		
	}

	



	// public function my_account()
	// {
	// 	chech_userdashboard_login();
	// 	$ci = & get_instance();
	//     if(empty($ci->session->userdata('userdashboard')))
	//     {
	//       redirect(base_url().'login');
	//     }

	//     $this->load->library("pagination");			
	// 	$config = array();  
    //     $config["base_url"] = base_url().'/user-dashboard';
    //     $config["total_rows"] = count($this->crud->get_data('orders'));
	// 	$config["per_page"] = 10; // per page how many data you want to show
    //     $config["uri_segment"] = 2; // your url segment
		 
	// 	$this->pagination->initialize($config);
    //     $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
    //     $data["links"] = $this->pagination->create_links(); 
    //     $this->db->order_by('id desc');        
	// 	$data['temp']= $this->crud->selectdatainlimit($config["per_page"], $page,'orders',array('status'=>1,)); 

	// 	$this->load->view('user-dashboard',$data);
	// }









	












}
