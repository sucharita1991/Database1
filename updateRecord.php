<?php

//echo "inside update";

class updateRecord extends page{

    public function get(){


        $recordNumber = $_GET['record'];
        //echo $recordNumber;
        $records=$_SESSION['allRecords'];
        $toUpdate = $records[$recordNumber-1];
        $toUpdateArray = get_object_vars ( $toUpdate);
        //print_r($toUpdate);
        $form = '<form method="post" enctype="multipart/form-data"><center>';
        $form .= '<h1>Update Record</h1>';

        $form .= 'ID:<input type="text" name="id" id="id" value="'.$toUpdateArray['id'].'" readonly="readonly"></br>';
        $form .= 'Email:<input type="text" name="email" id="email" value="'.$toUpdateArray['email'].'"></br>';
        $form .= 'First Name:<input type="text" name="fname" id="fname" value="'.$toUpdateArray['fname'].'"></br>';
        $form .= 'Last Name:<input type="text" name="lname" id="lname" value="'.$toUpdateArray['lname'].'"></br>';
        $form .= 'Phone:<input type="text" name="phone" id="phone" value="'.$toUpdateArray['phone'].'"></br>';
        $form .= 'Birthday:<input type="text" name="bday" id="bday" value="'.$toUpdateArray['birthday'].'"></br>';
        $form .= 'Gender:<input type="text" name="gender" id="gender" value="'.$toUpdateArray['gender'].'"></br>';
        $form .= 'Password:<input type="text" name="pwd" id="pwd" value="'.$toUpdateArray['password'].'"></br>';


        $form .= '<input class="button" type="submit" value="Update Record" name="updateRowAccounts">';

        $form .= '</center></form> ';
        $this->html .= $form;
    }

    public function post(){

        //echo 'inside update post';
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $bday = $_POST['bday'];
        $gender = $_POST['gender'];
        $pwd = $_POST['pwd'];
        $columns = array('email'=> '"'."$email".'"','fname'=> '"'."$fname".'"','lname'=> '"'."$lname".'"','phone'=> '"'."$phone".'"','birthday'=> '"'."$bday".'"','gender'=> '"'."$gender".'"','password'=> '"'."$pwd".'"');

        $records = accounts::updateRecord($columns,1);



    }
}


?>