<?php

class deleteRecord extends page{

    public function get(){

        $recordNumber = $_GET['record'];
        $records = accounts::deleteRecord($recordNumber);
    }
}

?>