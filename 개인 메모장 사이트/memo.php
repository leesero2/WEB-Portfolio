<?
    session_start(); 
    include "dbClass.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<? if(isset($_SESSION['isLoginId'])){ ?>
    <a href="logOut.php">로그아웃 </a>
<form action="memoProc.php" method="post">
    <textarea name="memo" placeholder="메모를 입력해주세요." style="width:500px; height:200px;"></textarea>
    <br>
    <button type="submit">저장</button> 
</form>

<table border=1>
        <tr>
            <td> 아이디
            <td> 메모 
            <td> 등록일 
        <?
            $query = "select * from memo where user_id=? order by idx desc ";
            $list = $db->query($query, $_SESSION['isLoginId'])->fetchAll(); 
            foreach($list as $data){ 
        ?>
        <tr>
            <td> <?=$data['user_id']?>
            <td> <?=nl2br($data['memo'])?>
            <td> <?=$data['regdate']?> 
        <? } ?>

</table>

<? } ?> 
    
</body>
</html>