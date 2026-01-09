<?php

class Game extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Game',
						   	'table_name'=>'game',
						   	'upload_path'=>'media/uploads/game/',
						   	'load_path'=>'admin/game/',
						   	'redirect_path'=>'admin_con/game/',
						   	'back_url'=>'game',
						   	'add_url'=>'game',
						   	'edit_url'=>'game',
						   	'delete_url'=>'game',
						   	'view_url'=>'game',
						   	'table_url'=>'admin/game/table',
						   	'status_value'=>'game',
						   	'multiple_delete'=>'admin_con/game/delete_all',
						   	'pagination_url'=>'admin_con/game/get_table_data',
						   	'controller_name'=>'game',
						   	'page_name'=>'game.php',
						   	'pagination_limit'=>'10',
						   ); 


   //--check user login or not
	public function __construct()
    {
    	parent::__construct(); 
        chech_admin_login(); 
        check_controller_access(8);
    }



	//insert

	function add()
	{
	    check_controller_inner_access(8,2);
	    if(isset($_POST['submit']))
	    {
	        date_default_timezone_set('Asia/Kolkata');

	        $name = $this->input->post('name'); // example: "1 min", "2 min"
	        $status = $this->input->post('status');

	        // Extract number from name and convert to seconds
	        preg_match('/(\d+)/', $name, $matches);
	        $minutes = isset($matches[1]) ? (int)$matches[1] : 1; // default 1 min if not found
	        $duration_in_seconds = $minutes * 60;

	        $data['name'] = $name;
	        $data['duration_minutes'] = $duration_in_seconds;
	        $data['status'] = $status;
	        $data['addeddate'] = date('Y-m-d H:i:s');

	        $this->crud->insert($this->arr_values['table_name'], $data);

	        $this->session->set_flashdata('message','Record has been Successfully Saved..');
	        redirect($this->arr_values['redirect_path'].'listing');
	    }
	    
	    $data['page_title'] = $this->arr_values['page_title'];
	    $data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
	    $this->load->view($this->arr_values['load_path'].'add', $data);
	}



	//----list dekhney ke lia 

	function listing()
	{		
		check_controller_inner_access(8,1);
		$data['page_title'] = $this->arr_values['page_title'];
		$data['add_url'] = base_url('admin_con/'.$this->arr_values['add_url'].'/add');
		
		$data['delete_url'] = base_url('admin_con/'.$this->arr_values['delete_url'].'/delete/');
		$data['status_value'] = base_url('admin_con/'.$this->arr_values['status_value'].'/new_status');
		$data['pagination_url'] = $this->arr_values['pagination_url'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['multiple_delete'] = base_url($this->arr_values['multiple_delete']);
		$this->load->view($this->arr_values['load_path'].'list',$data);
	}


	public function get_table_data() 
	{
	  check_controller_inner_access(8,1);
	  $search = $this->input->post('search');
	  $limit = $this->arr_values['pagination_limit'];
	  $offset = $this->input->post('offset');

	  $this->db->order_by('id desc');
	  $this->db->like('name', $search);
	  $this->db->or_like('id', $search);
	  $data['ALLDATA'] = $this->db->get($this->arr_values['table_name'], $limit, $offset)->result();

	  $total_rows = $this->db->count_all_results($this->arr_values['table_name']);
	  $pagination_links = '';
	  $current_page = ($offset / $limit) + 1;

	  if ($total_rows > $limit) {
	    for ($i = 0; $i < ceil($total_rows / $limit); $i++) 
	    {
			  $pagination_links .= '<a href="#" class="pagination-link btn btn-primary btn-sm ' . ($i == $current_page - 1 ? 'active-page' : '') . '" style="margin: 5px 3px; border-radius: 25%; font-weight: bold;" data-offset="' . ($i * $limit) . '">' . ($i + 1) . '</a>';
			}
	  }

	  if (!empty($pagination_links)) {
	    $data['pagination_links'] = $pagination_links;
	  } else {
	    $data['pagination_links'] = '';
	  }


	  $total_pages = ceil($total_rows / $limit);

	  $data['upload_path'] = $this->arr_values['upload_path'];
	  $data['view_url'] = base_url('admin_con/'.$this->arr_values['view_url'].'/view/');
	  $data['edit_url'] = base_url('admin_con/'.$this->arr_values['edit_url'].'/edit/');
	  $data['delete_url'] = base_url('admin_con/'.$this->arr_values['delete_url'].'/delete/');

	  $definevariable = array(
	  	'ALLDATA' => $data['ALLDATA'],
	  	'upload_path'=>$data['upload_path'],
	  	'view_url'=>$data['view_url'],
	  	'edit_url'=>$data['edit_url'],
	  	'delete_url'=>$data['delete_url'],
	  	'limit'=>$limit,
	  	'total_rows'=>$total_rows,
	  	'offset'=>$offset,
	  	'total_pages'=>$total_pages,
	  );

	  $html = $this->load->view($this->arr_values['table_url'], $definevariable, true);
	  echo json_encode(array('html' => $html, 'pagination_links' => $data['pagination_links'],'limit'=>$limit));
}




	//------------delete 

	public function delete()
	  {
	  	check_controller_inner_access(8,4);
	  	$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete($this->arr_values['table_name']);
		$this->session->set_flashdata('message','Record has been Successfully Delete..');
	  }

	  /*-------delete multiple*/
	  function delete_all()
		{
			check_controller_inner_access(8,4);
			$ids = $this->input->post('id');
		    if (!empty($ids)) 
		    {
		    	$this->db->where_in('id', $ids);
		        $this->db->delete($this->arr_values['table_name']);
		        $this->session->set_flashdata('message','Record has been Successfully Delete..');
		    }
		}


	//----------------edit

	function edit()
	{
		check_controller_inner_access(8,3);		 
		$args=func_get_args();
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			$name = $this->input->post('name'); // example: "1 min", "2 min"
			$duration_seconds = $this->input->post('duration_seconds');
			$stop_bet_seconds = $this->input->post('stop_bet_seconds');
	        $status = $this->input->post('status');



	        $all = $this->updateGameTimer($duration_seconds,$stop_bet_seconds);
	        print_r($all);




	        

	        $data['name'] = $name;
	        $data['duration_seconds'] = $duration_seconds;
	        $data['stop_bet_seconds'] = $stop_bet_seconds;
	        $data['status'] = $status;
	        						
			$data['modifieddate'] = date('Y-m-d H:i:s');

			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			
			die;

			$this->session->set_flashdata('message','Record has been successfully Updated.');
		    redirect($this->arr_values['redirect_path'].'listing');	
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'edit',$data);
	}



function updateGameTimer($sessionDuration = 60, $stopBetSeconds = 10) {
    // Get current time in Asia/Kolkata
    date_default_timezone_set('Asia/Kolkata');
    $now = new DateTime();
    
    // Get the current seconds in the day
    $currentSeconds = $now->format('H') * 3600 + $now->format('i') * 60 + $now->format('s');
    
    // Calculate session number
    $sessionNumber = floor($currentSeconds / $sessionDuration) + 1;
    
    // Calculate seconds passed and seconds left in the current session
    $secondsPassed = $currentSeconds % $sessionDuration;
    $secondsLeft = $sessionDuration - $secondsPassed;

    // Format mm:ss
    $mins = str_pad(floor($secondsLeft / 60), 2, '0', STR_PAD_LEFT);
    $secs = str_pad($secondsLeft % 60, 2, '0', STR_PAD_LEFT);

    // Logic for disabling the bet button based on remaining time
    $disableBetting = ($mins == "00" && (int)$secs <= $stopBetSeconds) ? true : false;

    // Display session number and countdown
    echo "Session Number: " . $sessionNumber . "<br>";
    echo "Countdown: " . $mins . ":" . $secs . "<br>";

    // Full list of sessions from 00:00:00 to 23:59:59
    $allSessions = [];
    $totalSessionsInDay = (24 * 60 * 60) / $sessionDuration; // Total number of sessions in a day
    
    // Loop through each session and calculate start and end times
    for ($i = 0; $i < $totalSessionsInDay; $i++) {
        $sessionTimeStart = $i * $sessionDuration;
        $sessionTimeEnd = $sessionTimeStart + $sessionDuration;
        
        $allSessions[] = [
            'session' => $i + 1,
            'start_time' => date('H:i:s', $sessionTimeStart),
            'end_time' => date('H:i:s', $sessionTimeEnd),
        ];
    }

    // Display all sessions (full day from 00:00:00 to 23:59:59)
    echo "Sessions from 00:00:00 to 23:59:59:<br>";
    foreach ($allSessions as $session) {
        echo "Session {$session['session']} - Start: {$session['start_time']} - End: {$session['end_time']}<br>";
    }

    // Return whether the betting should be disabled or not
    return $disableBetting;
}

/*// Example usage
// $disableBetting = updateGameTimer(60, 10);
if ($disableBetting) {
    echo "Betting Disabled";
}*/



	//----------------view

	function view()
	{
		check_controller_inner_access(8,5);		 
		$args=func_get_args();
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'view',$data);
	}


//---------------------status

	public function status_change()
	{
		if(isset($_POST['submit']))
		{						
			$id = $this->input->post('id');						
			$data['status'] = $this->input->post('status');		
			$this->db->update($this->arr_values['table_name'],$data,array("id"=>$id));
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully Updated.</div>');
		    redirect($this->arr_values['redirect_path'].'listing');	
		}

	}



	public function new_status()
	{
		$status = $this->input->post('status');
		$id = $this->input->post('id');
		$this->db->update($this->arr_values['table_name'],array('status'=>$status),array('id'=>$id));
		$status_html = status($status);
		$data['data'] = array("status"=>$status_html,);
		echo json_encode($data);
	}



	// public function statusupdate()
	// {	
	// 	//echo "string";
	// 	$data['status'] = $_GET['l_status'];
	// 	$this->crud->update($this->arr_values['table_name'],$_GET['ld'],$data);
	// 	redirect($this->arr_values['redirect_path'].'listing');	
	// }



}