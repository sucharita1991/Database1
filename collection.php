<?php

class collection {

    static public function findAll() {

        $db = dbConn::getConnection();
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName;
        $statement = $db->prepare($sql);
        $statement->execute();
        $class = static::$modelName;
        $statement->setFetchMode(PDO::FETCH_CLASS, $class);
        $recordsSet =  $statement->fetchAll();
        return $recordsSet;
    }

    public static function insertRecord($columns){

        $db = dbConn::getConnection();
        $tableName = get_called_class();

        $columnString = implode(',', array_flip($columns));
        $valueString = implode(',', $columns);
        $sql = 'INSERT INTO '.$tableName.' ('.$columnString.') VALUES ('.$valueString.')';
        echo $sql;
        $statement = $db->prepare($sql);
        $statement->execute();
        echo 'done';

    }

    public static function updateRecord($columns,$id){

        $db = dbConn::getConnection();
        $tableName = get_called_class();
        $comma = " ";

        $sql = 'UPDATE '.$tableName.' SET ';
        foreach ($columns as $key=>$value){
            if( ! empty($value)) {
                $sql .= $comma . $key . ' = ' . $value;
                $comma = ", ";
            }
        }
        $sql .= ' WHERE id='.$id;
        echo $sql;
        $statement = $db->prepare($sql);
        $statement->execute();
        echo 'done';
    }

    public static function deleteRecord($id){

        $db = dbConn::getConnection();
        $tableName = get_called_class();
        $sql = 'DELETE FROM '.$tableName.' WHERE id='.$id;
        echo $sql;
        $statement = $db->prepare($sql);
        $statement->execute();
        echo 'done';
    }
}

?>