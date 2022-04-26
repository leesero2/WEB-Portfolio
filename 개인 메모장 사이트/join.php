<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script>
        //아이디 중복체크 함수
        function checkid(){    
            var userid = document.getElementById("uid").value; //userid 변수에 uid 값을 대입
            if(userid)  //내용이 있다면(참이라면)
            {
                url = "checkid.php?userid="+userid;
                window.open(url,"chkid","width=400,height=200"); //윈도우 창 뜸
            } else { //빈값일 경우
                alert("아이디를 입력하세요.");
            }
        }

        //비밀번호 일치 체크 함수
        function checkPW(){
            let password1 = document.getElementById("pw1").value;
            let password2 = document.getElementById("pw2").value;

            if(password1 != password2){
                alert("비밀번호가 일치하지 않습니다");
                return false;
            } 
            return true;
        }

        //중복검사 결정 함수
        function decide(){
            document.getElementById("decide").innerHTML = "";
            document.getElementById("decide_id").value = document.getElementById("uid").value;
            document.getElementById("uid").disabled = true;
            document.getElementById("join_button").disabled = false;
            document.getElementById("check_button").setAttribute("onclick", "change()");
        }
        //중복함수 교환함수
        function change(){
            document.getElementById("decide").innerHTML = "<span style='color:red;'>ID 중복 여부를 확인해주세요.</span>"
            document.getElementById("uid").disabled = false
            uid1 = document.getElementById("uid").value = ""
            document.getElementById("join_button").disabled = true
            document.getElementById("check_button").setAttribute("onclick", "checkid()")
            uid1.autofocus;
        }
        
        //회원가입 버튼을 누르면 뜨는 알림
        function join(){
            alert("회원가입이 완료되었습니다.");
        }


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="js/memo.js"></script> -->
</head>

<body class="bg-light">
<form name="register_form" action="joinProc.php" method="post" onsubmit="return checkPW();">
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Register Form</h2>
    </div>
    <div class="row g-5">
      <div class="col-md col-lg">
        <form class="needs-validation" novalidate>
          <div class="row g-3">

          <div class="col-6">
              <label for="text" class="form-label">ID</label>
              <input type="text" class="form-control" id="uid" name="user_id" placeholder="user_ID" required>
              <input type="hidden" name="decide_id" id="decide_id">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-6">
              <label for="text" class="form-label"></label>
              <span id="decide" style='color:red;'>ID 중복 여부를 확인해주세요.</span>
            </div>
            
            <div class = "checkID">
                <div class="col-2">
                <button class="w-100 btn btn-primary btn" id="check_button" onclick="checkid();">중복확인</button>
                </div>
            </div>

            <div class="col-6">
              <label for="email" class="form-label">Password</label>
              <input type="password" class="form-control" id="pw1" name="user_pwd" placeholder="PW" required>
            </div>

            <div class="col-6">
              <label for="email" class="form-label">Password check</label>
              <input type="password" class="form-control" id="pw2" name="user_pwd2" placeholder="PW" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name(성)</label>
              <input type="text" class="form-control" name = "LastN" id="lastName" placeholder=""  required>
            </div>

            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name(이름)</label>
              <input type="text" class="form-control" name = "FirstN" id="firstName" placeholder=""  required>
            </div>

            <div class="col-4">
              <label for="username" class="form-label">Email</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username" name="email" placeholder="email" required>
                <span class="input-group-text">@</span>
              </div>
            </div>

            <div class="col-md-8">
              <label for="country" class="form-label">Choose</label>
              <select class="form-select" name="SO"id="country" required>
                <option value=""></option>
                <option value="naver.com">naver.com</option>
                <option value="gmail.com">gmail.com</option>
                <option value="daum.net">daum.net</option>
              </select>
            </div>
            
            
          </div>

          <hr class="my-4">
        <div class = "register-button">
          <button class="w-100 btn btn-primary btn-lg" id="join_button" type="submit" onclick="join();">Continue</button>
        </div>
        </form>
      </div>
    </div>
  </main>
  </form> 
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Dev_hoon</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="https://github.com/leesero2">github</a></li>
      <li class="list-inline-item"><a href="mailto:huny10000@naver.com">Email</a></li>
      <li class="list-inline-item"><a href="#">contact</a></li>
    </ul>
  </footer>
</div>
</body>
</html>

