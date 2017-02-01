<?php
include "../config.php";
$id_cust = $_POST['id_cust'];
mysqli_query($db, "delete from customer where id_cust=$id_cust");
if (mysqli_error($db)) {
    $result['error']=mysql_error($db);
    $result['result']=0;
} else {
    $result['error']='';
    $result['result']=1;
}
 echo json_encode($result);
