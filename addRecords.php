<?php

class addRecords extends page{

    public function get(){

        $form = '<form method="post" enctype="multipart/form-data"><center>';
        $form .= '<h1>Add Record</h1>';

        $form .= 'ID:<input type="text" name="id" id="id"></br>';
        $form .= 'Email:<input type="text" name="email" id="email"></br>';
        $form .= 'First Name:<input type="text" name="fname" id="fname"></br>';
        $form .= 'Last Name:<input type="text" name="lname" id="lname"></br>';
       // $form .= 'Email:<input type="text" name="email" id="email"></br>';
        $form .= 'Phone:<input type="text" name="phone" id="phone"></br>';
        $form .= 'Birthday:<input type="text" name="bday" id="bday"></br>';
        $form .= 'Gender:<input type="text" name="gender" id="gender"></br>';
        $form .= 'Password:<input type="text" name="pwd" id="pwd"></br>';


        $form .= '<input class="button" type="submit" value="Add Record" name="addRowAccounts">';

        $form .= '</center></form> ';
        $this->html .= $form;
    }

    public function post(){

        echo 'inside post';
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $bday = $_POST['bday'];
        $gender = $_POST['gender'];
        $pwd = $_POST['pwd'];
        $columns = array('id'=> $_POST['id'],'email'=> '"'."$email".'"','fname'=> '"'."$fname".'"','lname'=> '"'."$lname".'"','phone'=> '"'."$phone".'"','birthday'=> '"'."$bday".'"','gender'=> '"'."$gender".'"','password'=> '"'."$pwd".'"');
        //print_r($columns);
        $records = accounts::insertRecord($columns);



    }
}

?>