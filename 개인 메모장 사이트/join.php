<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <script>
        function chkFrm(){
            var a = document.getElementById("name").value;
            if(a==""){
                alert('이름을 입력해주세요.');
                document.getElementById("name").focus(); 
                return false; 
            }
            return true;
        }
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/memo.js" type="module"></script>
</head>

<body class="bg-light">
<form action="joinProc.php" method="post" onsubmit="return chkFrm();">
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Register Form</h2>
    </div>
    <div class="row g-5">
      <div class="col-md col-lg">
        <!-- <h4 class="mb-3">Billing address</h4> -->
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name(성)</label>
              <input type="text" class="form-control" name = "LastN" id="lastName" placeholder=""  required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name(이름)</label>
              <input type="text" class="form-control" name = "FirstN" id="firstName" placeholder=""  required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-4">
              <label for="username" class="form-label">Email</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username" name="email" placeholder="email" required>
                <span class="input-group-text">@</span>
              <div class="invalid-feedback">
                  Your email is required.
                </div>
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
              <div class="invalid-feedback">
                Please select a email.
              </div>
            </div>

            <div class="col-12">
              <label for="text" class="form-label">ID</label>
              <input type="text" class="form-control" id="text" name="user_id" placeholder="user_ID">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-6">
              <label for="email" class="form-label">Password</label>
              <input type="password" class="form-control" id="email" name="user_pwd" placeholder="PW">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-6">
              <label for="email" class="form-label">Password check</label>
              <input type="password" class="form-control" id="email" placeholder="PW">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue</button>
        </form>
      </div>
    </div>
  </main>
  </form> 
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Dev_hoon</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">github</a></li>
      <li class="list-inline-item"><a href="#">Email</a></li>
      <li class="list-inline-item"><a href="#">contact</a></li>
    </ul>
  </footer>
</div>
  


  <!-- <form action="joinProc.php" method="post" onsubmit="return chkFrm();">
  <div>
        id : <input type="text" name="user_id" placeholder="아이디">
  <div>
  <div>
        pw : <input type="password" name="user_pwd" placeholder="pw">
  <div>
  <div>
        이름 : <input type="text" name="name" id="name" placeholder="이름">
  <div>
  <div>
        이메일 : <input type="text" name="email" placeholder="이메일">
  <div>    
        <button type="submit">회원가입</button>
</form>  -->

</body>
</html>

