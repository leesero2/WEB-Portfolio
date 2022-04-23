//변수
const registerButton = document.querySelector(".register-button > button"); //회원가입 버튼 변수
const chkForm = document.querySelector("register_form");


// let f;
// const form = document.querySelector('form');


//회원가입 전용 js
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()


// registerButton.addEventListener("click",()=>{ //회원가입 버튼 클릭 이벤트리스너
//     function chkPW()
//  })

// function chkFrm(){
//     var a = document.getElementById("name").value;
//     if(a==""){
//         alert('이름을 입력해주세요.');
//         document.getElementById("name").focus(); 
//         return false; 
//     }
//     return true;
// }

// function chkPW(){
//     if(chkForm.user_pwd.value != chkForm.user_pwd2.value){
//         alert("비밀번호가 일치하지 않습니다.");
//         chkForm.user_pwd.focus();
//         chkForm.user_pwd.select();
//         return;
//     }
//     chkForm.submit();

// }

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