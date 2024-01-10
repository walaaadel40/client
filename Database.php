<?php 
class Database  
{ 
    var $conn; 
 
    function __construct() 
    { 
        $this->conn = mysqli_connect("localhost", "root", "", "client",); 
 
    } 
 
        // to insert,update and delete 
 
 
    function RunDML($statement, $params = []) 
    { 
        try { 
            $stmt = mysqli_prepare($this->conn, $statement); 
 
            if ($stmt === false) { 
                return "error: " . mysqli_error($this->conn); 
            } 
 
            if (!empty($params)) { 
                $types = str_repeat('s', count($params)); 
                mysqli_stmt_bind_param($stmt, $types, ...$params); 
            } 
 
            if (mysqli_stmt_execute($stmt)) { 
                mysqli_stmt_close($stmt); 
                return "ok"; 
            } else { 
                return "error: " . mysqli_error($this->conn); 
            } 
        } catch (mysqli_sql_exception $e) { 
            return $e->__toString(); 
        } 
    } 
 
 
    // to search select 
    function GetData($select) 
    { 
        $result = mysqli_query($this->conn, $select); 
        return $result; 
    } 
 
    // إغلاق الاتصال بقاعدة البيانات 
    function CloseConnection() { 
        mysqli_close($this->conn); 
    } 
} 
?>