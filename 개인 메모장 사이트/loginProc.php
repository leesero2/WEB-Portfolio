<?
    session_start(); 

    include "dbClass.php";

    $user_id = $_POST['user_id'];
    $user_pwd = $_POST['user_pwd'];

    $q = ' select * from member where user_id=? '; //여기서 찾은 인자(user_id)를
    $data = $db->query($q,$user_id)->fetchArray();  //$user_id에 값을 대입함

    if(!$data['idx']){
        ?>
        <script>
            alert('존재하지 않는 회원입니다.');
            location.href='index.php';
        </script>
        <?php 
    }

    $q = 'select * from member where user_pwd=? ';
    $tmp = $db->query($q, $user_pwd)->fetchArray(); 
 
    if($data['user_pwd']!=$tmp['user_pwd']){
        ?>
        <script>
            alert('로그인정보가 잘못되었습니다.');
            location.href='index.php';
        </script>
        <?php
    }

    $_SESSION['isLoginId'] = $user_id; 
    
    //위의 조건에 해당이 안된다면 로그인 후 index.php로 이동
    Header("Location: memo.php"); 
    
?>
