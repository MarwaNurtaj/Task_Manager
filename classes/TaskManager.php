<?php

    class TaskManager{

        private $con;
        public function __construct(){
            define("HOSTNAME", "localhost");
            define("USERNAME", "root");
            define("PASSWORD", "");
            define("DATABASE", "taskmanager");
        
        $result = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE); 
        }

        public function addTask($info){
            $task   = $info['add_task'];
            $taskdate = $info['add_date'];

            $sql = "INSERT INTO 'task'('task_name', 'datetime') VALUES ('$task', '$taskdate')";

            $fire =mysqli_query($this->con, $sql);

            // if ($this->con) {
            //     echo "Connected";
                
            // }
    }
}
