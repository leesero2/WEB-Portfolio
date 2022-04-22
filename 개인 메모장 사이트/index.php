<?
    session_start(); 
    include "dbClass.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>개인 메모장 사이트</title>
    <style>
        .text-right{text-align:right; }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="text-right">
    <? if(isset($_SESSION['isLoginId'])){ ?> 
        <a href="logOut.php">로그아웃 </a>
        
    <? }else{ ?>
        <a href="join.php">회원가입</a>
        <a href="login.php">로그인</a>
    
    <? } ?> 
</div>    





<? if(isset($_SESSION['isLoginId'])){ ?>

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
            $query = "select * from uni_memo where user_id=? order by idx desc ";
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

