<?php
include_once "conn_db.php";

if(isset($_GET['user_id'])){
    
//    if(query($conn, "DELETE FROM users WHERE user_id = ?", $params) ){
//        header("location: u_user_display.php?user_delete=done");
//        exit();
//    }
//    else{
//        header("location: u_user_display.php?user_delete=failed");
//        exit();
//    } 
    
    $table = "users";
    $d_user_id = $_GET['user_id'];
    $fields = array( 'user_status' => 'I' );
    $filter = array( 'user_id' => $d_user_id );
    
   if( update($conn, $table, $fields, $filter )){
       header("location: u_user_display.php?update_status=deleted");
       exit();
   }
    else{
        header("location: u_user_display.php?update_status=failed");
        exit();
    }
}