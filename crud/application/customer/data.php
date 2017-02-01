<?php
    include "../config.php";

    //$query = mysqli_query($db, "SELECT @rownum := @rownum + 1 AS urutan,t.* FROM customer t, (SELECT @rownum := 0) r");
    $query = mysqli_query($db, "SELECT * FROM customer LIMIT 10");
    $data = array();

    while ($r = mysqli_fetch_assoc($query))
    {
        $data[] = $r;
    }

    $i=0;
    foreach ($data as $key)
    {
        $data[$i]['urutan'] = $i;
        $data[$i]['button'] = '<button type="submit" id_cust="'.$data[$i]['id_cust'].'" class="btn btn-primary btnedit" ><i class="fa fa-edit"></i></button> 
                               <button type="submit" id_cust="'.$data[$i]['id_cust'].'" name_cust="'.$data[$i]['name'].'" class="btn btn-primary btnhapus" ><i class="fa fa-remove"></i></button>';
        $i++;
    }
    $datax = array('data' => $data);

    echo json_encode($datax);
