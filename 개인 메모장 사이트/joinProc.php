<?
    include "dbClass.php"; 

    $data = array($_POST['user_id'],$_POST['user_pwd'],$_POST['name'],$_POST['email']); 

    $data[] = date("Y-m-d H:i:s");
    $data[] = $_SERVER['REMOTE_ADDR']; 

    $query = "insert into member(user_id, user_pwd, name, email, regdate, ip) values(?,?,?,?,?,?) ";
    $insert  = $db->query($query,$data); 
    $cnt = $insert->affectedRows();

    if($cnt!=1){
        echo $cnt;
        exit; 
    }

    Header("Location: index.php"); 

?>
