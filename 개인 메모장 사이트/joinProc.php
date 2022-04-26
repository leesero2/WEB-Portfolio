<?
    include "dbClass.php"; 
    $Fn = $_POST['FirstN']; //first name
    $Ln = $_POST['LastN']; //last name
    $Name = $Ln . $Fn; //.이 php문법에선 + 역할을 함

    $email = $_POST['email'] . '@' . $_POST['SO'];

    $data = array($_POST['decide_id'],$_POST['user_pwd'],$Name,$email); 

    $data[] = date("Y-m-d H:i:s");
    $data[] = $_SERVER['REMOTE_ADDR']; 

    $query = "insert into member(user_id, user_pwd, name, email, regdate, ip) values(?,?,?,?,?,?) ";
    $insert  = $db->query($query,$data); 
    $cnt = $insert->affectedRows();

    if($cnt!=1){
        echo $cnt;
        exit; 
    }

    // Header("Location: index.php"); 
?>
<script>
    location.href='index.php';
</script>
