<?php


$a=$_POST['username'];
$p=$_POST['password'];
$px=md5($p);

if(empty($a) || empty($p)){
    echo "<div class='alert alert-danger'>";
    echo "<b><strong><center><font color='white'>Please Enter User Details</font></center></strong></b>";
    echo"</div>";
}else{

    include 'connection.php';
    $find=$db->query("SELECT COUNT(U_ID) AS ro FROM users WHERE U_Name = '$a' && password ='$px'");
    $x= $find->fetch_assoc();
     $cou=$x['ro'];

    if($cou==0){

        echo "<strong><center><font color='Black'>Incorrect User Details</font></center></strong>";

    }else{
        $getdetails=$db->query("SELECT *  FROM users WHERE U_Name = '$a' && password ='$px'");
        $row= $getdetails->fetch_assoc();

        if($row['Active'] == "1" ){
            session_start();

            if($_SESSION['id'] = $row['U_ID']){

                echo "<script language='javascript'>window.location.href='home.php'</script>";
            }else{
                $msg="Sessions not Started,please try again";
                echo "<script>window.top.location='login.php?msg=$msg'</script>";
            }


        }
        else{

            echo "<b><strong><center><font color='white'>You are offline user ! please meet your Administrator !</font></center></strong></b>";


        }

    }



}






?>