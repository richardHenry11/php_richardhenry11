<?php
include 'soal3a.php';

class person
{
    private $conn;
    function __construct()
    {
        global $connect;
        $this->conn = $connect;   
    }
    
    function showDat()
    {
        $queryRead = mysqli_query($this->conn, "SELECT * FROM `hobi` ORDER BY `person_id` DESC");
        while($rows = mysqli_fetch_assoc($queryRead))
        {
            $data[] = $rows;
        }
        return $data;
    }

    function search($keyword,$jumlahPerson)
    {
        $queryR = mysqli_query($this->conn, "SELECT * FROM hobi WHERE
        hobi LIKE '%$keyword%' OR person_id LIKE '%$jumlahPerson%'");  
        while($rows = mysqli_fetch_assoc($queryR))
        {
            $data[] = $rows;
        }
        return $data;
    }
}