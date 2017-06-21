<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$date = date('Y-m-j');
$newdate = strtotime ( '+23 day' , strtotime ( $date ) ) ;
$newdate = date ( 'd-m-Y' , $newdate );
echo "<p>".$newdate;
?>
