<?php

namespace App\Helpers;

class Helper
{
    public $credits = array();
    public $gpa = array();
    function _constructor($credits, $gpa){
        $this->credits = $credits;
        $this->gpa = $gpa;
    }

    function get_result(){
        $result = 0;
        $total_credit = array_sum($this->credits);
        $total_sum = 0;
        $len = count($this->credits);

        for($i=0; $i<$len; $i++){
            $total_sum+=($this->credits[$i]*$this->gpa[$i]);
        }

        $result = $total_sum/4;

        return $result;
    }
}

?>