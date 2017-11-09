<?php

class htmlTable{
    public static function genarateTableFromMultiArray($arr){
        $tableGen = '<table border="1" cellpadding="2" cellspacing="3">';
        foreach($arr as $row => $innerArray){
            $tableGen .= '<tr>';
            foreach($innerArray as $innerRow => $value){
                $tableGen .= '<td>' . $value . '</td>';
            }
            $tableGen .= '<td><a href="index.php?page=updateRecord&record=1" class=".updateRecords" name="edit" id="edit">Edit</a>
                    </td><td><a href="index.php?page=deleteRecord&record=10">Delete</a></td></tr>';
        }
        $tableGen .= '</table><hr>';
        /*$tableGen .= '<script type=\'text/javascript\'>
            (\'.updateRecords\').click(function(){
                var row_number = $(this).closest("tr")[0].rowIndex;
                alert("row number: "+row_number);
            });
        </script>';*/
        return $tableGen;
    }
}
?>