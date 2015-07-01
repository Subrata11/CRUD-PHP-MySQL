<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'db.php';

$query = "select * from student order by full_name asc";
$data = mysql_query($query);
?>
<table border="1"  cellpadding="0"  cellspacing="0" width="80%">
    <tr>
        <td colspan="3">Student List</td>
        <td align="right"><a href="student_new.php">Add New</a></td>
    </tr>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Student Id</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Action</strong></td>
    </tr>
    <?php while($row = mysql_fetch_array($data)){?>
    <tr>
        <td><?=$row[1]?></td>
        <td><?=$row[2]?></td>
        <td><?=$row[3]?></td>
        <td>
            <a href="student_edit.php?action=edit&id=<?=$row[0]?>">Edit</a> | 
            <a href="student_edit.php?action=delete&id=<?=$row[0]?>">Delete</a>
            
            
        </td>
    </tr>
    <?php 
        }
    ?>    
</table>
