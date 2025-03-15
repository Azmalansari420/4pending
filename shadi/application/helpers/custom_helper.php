<?php


 function slug($string) 
 { 
  $string = trim($string);$string=strtolower($string);
  $string =preg_replace("/[^a-z0-9_ोौेैा्ीिीूुंःअआइईउऊएऐओऔकखगघचछजझञटठडढतथदधनपफबभमयरलवसशषहश्रक्षटठडढङणनऋड़\s-]/u", "", $string);
  $string = preg_replace("/[\s-]+/", " ", $string);
  $string = preg_replace("/[\s]/", '-', $string);
  return $string ;
 }

 
function status($value)
{
  if($value==1)
  {
    $string = '<p class="mb-0 text-success font-weight-bold d-flex justify-content-start align-items-center">
                  <small>
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">        
                      <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                    </svg>
                  </small>Show
               </p>';
  }

  else if($value==0)
  {
    $string = '<p class="mb-0 text-danger font-weight-bold d-flex justify-content-start align-items-center">
                  <small>
                     <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                     </svg>
                  </small>Hide
               </p>';
  }

  return $string;
}


function temp_session_id()
  {
    $ci =& get_instance();
    if(empty($ci->session->userdata("userdashboard")))
    {
      if(empty($ci->session->userdata("temp_session_id")))
      {
        $temp_session_id = session_id();
      }
      else
      {
        $temp_session_id = $ci->session->userdata("temp_session_id");
      }
    }
    else
    {
      $user = $ci->db->get_where("registration",array("id"=>$ci->session->userdata("userdashboard"),))->result_object()[0];
      $temp_session_id = $user->id;
    }
    return $temp_session_id;
  }



function chech_userdashboard_login()
  {
    $ci = & get_instance();
    $userdashboard = $ci->session->userdata('userdashboard');  
    $EMAIL      = $ci->session->userdata('EMAIL');  
    $logged_in      = $ci->session->userdata('logged_in');  
    if($userdashboard=="" && $EMAIL=="")
    {
      redirect('login');
    }
  }



// ---------------------Is user_login-------

function isuser_userdashboard_login()
  {
    $ci = & get_instance();
    $userdashboard = $ci->session->userdata('userdashboard');  
    $EMAIL = $ci->session->userdata('EMAIL');  
    $logged_in = $ci->session->userdata('logged_in');  
    
    if(empty($userdashboard) || empty($EMAIL))
      redirect(base_url('login'));

  }




  function random_strings($length_of_string) 
  {     
    return substr(md5(time()), 0, $length_of_string);
  }


   function user_logedin_detail()
  {
      $ci =& get_instance();
      $id = $ci->session->userdata("userdashboard");
      return $ci->db->get_where("registration",array("id"=>$id,))->result_object();
  }
 


 /* age calculate*/

  function ageCalculator($dob)
  {
    $dateOfBirth = $dob;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    return $diff->format('%y');
}


//   function mobiledesktop($value)
//   {
//     if($value==1)
//     {
//       $string = '<span style="padding:5px;background:red;border-radius:10px;color:white;">Mobile</span>';
//     }

//     else if($value==2)
//     {
//       $string = '<span style="padding:5px;background:black;border-radius:10px;color:white;">Desktop</span>';
//     }

//     return $string;
//   }

 
// function coupontype($value)
// {
//   if($value==1)
//   {
//     $string = '<span style="padding:5px;background:black;border-radius:10px;color:white;">Amount</span>';
//   }

//   else if($value==2)
//   {
//     $string = '<span style="padding:5px;background:blue;border-radius:10px;color:white;">Percentage</span>';
//   }

//   return $string;
// }




// function admin_logedin_detail()
// {
//     $ci =& get_instance();
//     $id = $ci->session->userdata("id");
//     return $ci->db->get_where("tbl_admin",array("id"=>$id,))->result_object()[0];
// }