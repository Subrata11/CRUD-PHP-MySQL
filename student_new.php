<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'db.php';

if(isset($_POST['submit'])){
    $st_name = $_POST['st_name'];
    $st_id = $_POST['st_id'];
    $st_email = $_POST['st_email'];
    
    $query = "insert into student(`full_name`, `st_id`, `email`) values('$st_name', '$st_id', '$st_email')";
    $return = mysql_query($query) or die(mysql_error());
    header('location:student_list.php');
}
?>
<form method="post" action="">
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="st_name"></td>
        </tr>    
        <tr>
            <td>student id</td>
            <td>:</td>
            <td><input type="text" name="st_id"></td>
        </tr>  
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="st_email"></td>
        </tr>  
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>  
    </table>
    
</form>