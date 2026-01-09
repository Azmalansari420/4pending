<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CronJob extends CI_Controller 
{
     

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

    public function declareResult()
    {


        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");


        $gameId = $this->input->get('game_id');
        $todaydate = date('Y-m-d H:i:s');
        $games = $this->crud->selectDataByMultipleWhere('game', array('status' => 1,"id"=>$gameId,));

        if (empty($games)) {
            echo json_encode(['status' => 400, 'message' => 'No active games found.']);
            return;
        }
        $games = $games[0];
        $allSessions = [];
        // print_r($games);


        $currentSession = currentSession($gameId);
        $session_id = $currentSession['session_id'];
        $sessionStartTime = $currentSession['sessionStartTime'];
        $sessionEndTime = $currentSession['sessionEndTime'];
        $mins = $currentSession['mins'];
        $secs = $currentSession['secs'];



        // Assuming $games is already fetched and contains the duration in seconds
        // $sessionDuration = $games->duration_seconds;
        $game_name = $games->name;

        // Get the current time and calculate how many seconds have passed since midnight
        // $midnight = strtotime("today midnight");
        // $secondsToday = time() - $midnight;

        // Calculate the session number
        // $sessionNumber = floor($secondsToday / $sessionDuration) + 1;
        // $secondsPassed = $secondsToday % $sessionDuration;
        // $secondsLeft = $sessionDuration - $secondsPassed;

        // Format the remaining time (mm:ss)
        // $mins = str_pad(floor($secondsLeft / 60), 2, '0', STR_PAD_LEFT);
        // $secs = str_pad($secondsLeft % 60, 2, '0', STR_PAD_LEFT);

        // Start time: calculate session start timestamp
        // $sessionStartTimestamp = $midnight + (($sessionNumber - 1) * $sessionDuration);
        // $sessionStartTime = date("Y-m-d H:i:s", $sessionStartTimestamp);

        // End time: session start + session duration (in seconds)
        // $sessionEndTimestamp = $sessionStartTimestamp + $sessionDuration;
        // $sessionEndTime = date("Y-m-d H:i:s", $sessionEndTimestamp);

        // Output session info
        
        // echo "Session Number: " . $session_id . "<br>";
        // echo "Session Start Time: " . $sessionStartTime . "<br>";
        // echo "Session End Time: " . $sessionEndTime . "<br>";
        // echo "Time Left in Current Session: " . $mins . ":" . $secs . "<br>";


        $result = rand(0, 9);
        $declare_date_time = date("Y-m-d H:i:s");
        $is_result_declare = 1;


        /*result logic*/


            


        /*result logic end*/




        $data = [
            'game_id' => $gameId,
            'game_name' => $game_name,
            'status' => 1,
            'session_id' => $session_id,
            'declare_number' => $result,
            'session_start_date_time' => $sessionStartTime,
            'session_stop_date_time' => $sessionEndTime,
            'session_result_declare_date_time' => $declare_date_time,
            'is_result_declare' => $is_result_declare,
            'created_at' => date("Y-m-d H:i:s"),
        ];
        $check = $this->db->get_where("game_sessions",["session_id"=>$session_id,"game_id"=>$gameId,])->result_object();
        if(empty($check))
        {
            $this->db->insert('game_sessions', $data);
        }        
        



    }

}