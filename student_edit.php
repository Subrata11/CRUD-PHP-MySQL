<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'db.php';

$id = $_GET['id'];
$action = $_GET['action'];

if($action == 'delete'){
   $id = $_GET['id'];
   $query = "delete from student where id=$id";
   mysql_query($query);
   header('location:student_list.php');
}

if(isset($_POST['submit'])){
    $st_name = $_POST['st_name'];
    $st_id = $_POST['st_id'];
    $st_email = $_POST['st_email'];
    $id = $_GET['id'];
    $query = "update student set `full_name`='$st_name', `st_id` = '$st_id', `email`='$st_email' where id= $id";
    $return = mysql_query($query) or die(mysql_error());
    header('location:student_list.php');
}

$query = "Select * from student where id = $id";
$result = mysql_fetch_object(mysql_query($query));
?>
<form method="post" action="">
    <input type="hidden" name="id" value="<?=$result-id?>">
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="st_name" value="<?=$result->full_name?>"></td>
        </tr>    
        <tr>
            <td>student id</td>
            <td>:</td>
            <td><input type="text" name="st_id"  value="<?=$result->st_id?>"></td>
        </tr>  
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="st_email" size="25" value="<?=$result->email?>"></td>
        </tr>  
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>  
    </table>
    
</form>