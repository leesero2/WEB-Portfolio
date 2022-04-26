<?
    $conn = mysqli_connect('localhost','purple','purple123','member');
    $uid = $_GET['user_id'];
    $sql = "SELECT * FROM member where user_id = '$user_id' ";
    $Idcheck = mysqli_fetch_array(mysqli_query($conn, $sql));

    if(!$Idcheck){
        echo "사용 가능한 아이디 입니다.";
    }else{
        echo "사용 불가능한 아이디 입니다.";
    }
        

    // Header("Location: index.php"); 
?>
<!-- <script>
    location.href='index.php';
</script> -->
