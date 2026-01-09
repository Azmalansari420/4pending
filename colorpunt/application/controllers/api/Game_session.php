<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game_session extends CI_Controller 
{
     



    

   // public function start_session()
   //  {
   //      $todaydate = date('Y-m-d H:i:s');
   //      $date_part = date('Ym');
   //      $games = $this->crud->selectDataByMultipleWhere('game', array('status' => 1));

   //      if (empty($games)) {
   //          echo json_encode(['status' => 400, 'message' => 'No active games found.']);
   //          return;
   //      }

   //      foreach ($games as $game) {
   //          $game_id = $game->id;
   //          $game_name = $game->name;
   //          $duration_minutes = $game->duration_minutes;

   //          // Fetch last session only for this game
   //          $last_session = $this->db->select('session_id')
   //                                   ->from('game_sessions')
   //                                   ->where('session_id LIKE', $date_part . '%' . $game_id)
   //                                   ->order_by('session_id', 'DESC')
   //                                   ->limit(1)
   //                                   ->get()
   //                                   ->row();

   //          if ($last_session) {
   //              $last_number = (int) substr($last_session->session_id, strlen($date_part), 3); // extract the middle 3 digits
   //          } else {
   //              $last_number = 0;
   //          }

   //          $start_time = date('Y-m-d H:i:s');

   //          for ($i = 0; $i < 1440; $i++) {
   //              $new_number = str_pad($last_number + 1, 3, '0', STR_PAD_LEFT);
   //              $session_id = $date_part . $new_number . $game_id;

   //              $current_start_time = date('Y-m-d H:i:s', strtotime("+$i minutes", strtotime($start_time)));
   //              $current_stop_time = date('Y-m-d H:i:s', strtotime("-10 seconds", strtotime("+$duration_minutes seconds", strtotime($current_start_time))));
   //              $bet_start_time = $current_start_time;
   //              $bet_stop_time = date('Y-m-d H:i:s', strtotime("-10 seconds", strtotime($current_stop_time)));
   //              $next_session_start_time = date('Y-m-d H:i:s', strtotime("+$duration_minutes seconds", strtotime($current_start_time)));
   //              $session_result_declare_time = date('Y-m-d H:i:s', strtotime("-5 seconds", strtotime($next_session_start_time)));

   //              $data = [
   //                  'session_id' => $session_id,
   //                  'game_id' => $game_id,
   //                  'game_name' => $game_name,
   //                  'session_start_date_time' => $current_start_time,
   //                  'session_stop_date_time' => $current_stop_time,
   //                  'bet_start_date_time' => $bet_start_time,
   //                  'bet_stop_date_time' => $bet_stop_time,
   //                  'session_result_declare_date_time' => $session_result_declare_time,
   //                  'declare_number' => rand(0, 9),
   //                  'is_result_declare' => 0,
   //                  'status' => 1,
   //                  'created_at' => $todaydate,
   //              ];

   //              $this->db->insert('game_sessions', $data);
   //              $last_number++;
   //          }
   //      }

   //      echo json_encode([
   //          'status' => 200,
   //          'message' => 'Sessions created successfully for all active games for the next 24 hours.',
   //      ]);
   //  }



    public function start_session()
    {
        $todaydate = date('Y-m-d H:i:s');
        $games = $this->crud->selectDataByMultipleWhere('game', array('status' => 1));

        if (empty($games)) {
            echo json_encode(['status' => 400, 'message' => 'No active games found.']);
            return;
        }

        $allSessions = [];

        foreach ($games as $game) {
            $game_id = $game->id;
            $game_name = $game->name;

            // Use duration from DB per game
            $sessionDuration = !empty($game->duration_seconds) ? intval($game->duration_seconds) : 60;

            $totalSecondsInDay = 86400;
            $totalSessions = floor($totalSecondsInDay / $sessionDuration);

            $now = time();
            $midnight = strtotime("today midnight");
            $secondsToday = $now - $midnight;
            $currentSession = floor($secondsToday / $sessionDuration) + 1;

            for ($i = 1; $i <= $totalSessions; $i++) {
                $startTimeSec = ($i - 1) * $sessionDuration;
                $startTimestamp = $midnight + $startTimeSec;
                $startTimeStr = date("Y-m-d H:i:s", $startTimestamp);

                // Label: 1 = Past, 2 = Current, 3 = Upcoming
                if ($i < $currentSession) {
                    $label = "1";
                } elseif ($i == $currentSession) {
                    $label = "2";
                } else {
                    $label = "3";
                }

                // Prepare session data
                $data = [
                    'game_id' => $game_id,
                    'game_name' => $game_name,
                    'status' => $label,
                    'session_id' => $i,
                    'declare_number' => rand(0, 9),
                    'session_start_date_time' => $startTimeStr,
                    'created_at' => $todaydate,
                ];

                // Insert into DB
                $this->db->insert('game_sessions', $data);

                // For response
                $allSessions[] = $data;
            }
        }

        echo json_encode([
            'status' => 200,
            'message' => 'Sessions inserted successfully with dynamic game durations.',
            'sessions' => $allSessions
        ]);
    }







    public function get_current_session() 
    {
        $game_id = $this->input->post('game_id');

        if(!empty($game_id))
        {
            $query = $this->db->get_where('game',array('id'=>$game_id))->result_object();
            echo json_encode([
                'success' => true,
                'duration_seconds' => $query[0]->duration_seconds,
                'stop_bet_seconds' => $query[0]->stop_bet_seconds,
            ]);
        }
        else {
            echo json_encode(['success' => false]);
        }
    }





    public function get_old_session_detail() 
    {
        $game_id = $this->input->post('game_id');
        $session_id = $this->input->post('session_id');
        $user_id = $this->input->post('user_id');
        $oldSessionId = $session_id-1;

        if(!empty($game_id))
        {
            $oldSessionRecords = $this->db->order_by("id desc")->limit(5)->where("session_id!=$session_id")->get_where('game_sessions',array('game_id'=>$game_id,))->result_object();

            $this->db->select("game_bet.*, 
                CASE 
                    WHEN game_bet.session_id = " . (int)$session_id . " THEN NULL 
                    ELSE game_sessions.declare_number 
                END AS declare_number", false);

            $userBets = $this->db->order_by("game_bet.id desc")->limit(10)
                ->join("game_sessions as game_sessions", "game_sessions.session_id = game_bet.session_id AND game_sessions.game_id = game_bet.game_id", "left")
                ->get_where('game_bet', array('game_bet.game_id' => $game_id))
                ->result_object();


            // $oldSessionId = 839;

            $oldSession = $this->db->order_by("id desc")->limit(1)->get_where('game_sessions',array('game_id'=>$game_id,"session_id"=>$oldSessionId,))->result_object();

            $gameResult = [];
            $declare_number = '';
            if(!empty($oldSession))
            {
                $oldSession = $oldSession[0];
                $isBet = 0;
                $isWin = 0;
                $checkUserBet = $this->db->get_where('game_bet',array('game_id'=>$game_id,"session_id"=>$oldSessionId,"user_id"=>$user_id,))->result_object();
                if(!empty($checkUserBet))
                {
                    foreach ($checkUserBet as $key => $value) {
                        $bet_type = $value->bet_type;
                        $colornumberid = $value->colornumberid;
                        $declare_number = $oldSession->declare_number;


                        if($bet_type==1)
                        {
                            if(in_array($declare_number,check_color_number($colornumberid,$bet_type)))
                            {
                                $isWin = 1;
                            }
                        }
                        else
                        {
                            if(in_array($declare_number,check_color_number($colornumberid,$bet_type)))
                            {
                                $isWin = 1;
                            }
                        }

                    }
                    $isBet = 1;
                }


                $gameResult = [
                    "old_session_id"=>$oldSessionId,
                    "declare_number"=>$declare_number,
                    "oldSession"=>$oldSession,
                    "is_bet"=>$isBet,
                    "is_win"=>$isWin,
                ];                
            }




            $query = $this->db->get_where('game',array('id'=>$game_id))->result_object();
            echo json_encode([
                'success' => true,
                'old_session_records' => $oldSessionRecords,
                'user_bets' => $userBets,
                'game_result' => $gameResult,
            ]);
        }
        else {
            echo json_encode(['success' => false]);
        }
    }
















































    public function get_active_sessions()
    {
        // Get the current time
        $current_time = date('Y-m-d H:i:s');
        $sessions = $this->db->select('game_id, session_id, session_start_date_time, session_stop_date_time, bet_stop_date_time, bet_start_date_time, session_result_declare_date_time')
                             ->from('game_sessions')
                             ->where('status', 1) // Only active sessions
                             ->where('session_stop_date_time >', $current_time) // Sessions not yet ended
                             ->get()
                             ->result();

        // If no active sessions are found
        if (empty($sessions)) {
            $this->output
                 ->set_content_type('application/json')
                 ->set_status_header(200)
                 ->set_output(json_encode([
                     'status' => 200,
                     'message' => 'No active sessions found.',
                     'data' => []
                 ]));
            return;
        }

        // Return the active sessions
        $this->output
             ->set_content_type('application/json')
             ->set_status_header(200)
             ->set_output(json_encode([
                 'status' => 200,
                 'message' => 'Active sessions found.',
                 'data' => $sessions
             ]));
    }

 


    public function expire_sessions()
    {
        // Get the current time
        $current_time = date('Y-m-d H:i:s');

        // Update the status of sessions where session_stop_date_time <= current time and status is active (1)
        $this->db->where('session_stop_date_time <=', $current_time)
                 ->where('status', 1)
                 ->update('game_sessions', ['status' => 'expired']);

        // Check if any rows were affected
        if ($this->db->affected_rows() > 0) {
            $this->output
                 ->set_content_type('application/json')
                 ->set_status_header(200)
                 ->set_output(json_encode([
                     'status' => 200,
                     'message' => 'Expired sessions have been updated successfully.'
                 ]));
        } else {
            $this->output
                 ->set_content_type('application/json')
                 ->set_status_header(200)
                 ->set_output(json_encode([
                     'status' => 200,
                     'message' => 'No sessions to expire at this time.'
                 ]));
        }
    }

    




    




















}