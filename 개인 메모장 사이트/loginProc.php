<?
    session_start(); 

    include "dbClass.php";

    $user_id = $_POST['user_id'];
    $pwd = $_POST['pwd'];

    $q = ' select * from uni_member where user_id=? '; //여기서 찾은 인자(user_id)를
    $data = $db->query($q,$user_id)->fetchArray();  //$user_id에 값을 대입함

    if(!$data['idx']){
        echo "존재하지 않는 회원입니다.";
        exit; 
    }


    $q = 'select * from uni_member where pwd=? ';
    $tmp = $db->query($q, $pwd)->fetchArray(); 
 
    if($data['pwd']!=$tmp['pwd']){
        echo "로그인정보가 잘못되었습니다.";
        exit; 
    }


    $_SESSION['isLoginId'] = $user_id; 
    
    // Header("Location: index.php"); 
    
?>
<script>
    location.href='index.php';
</script>