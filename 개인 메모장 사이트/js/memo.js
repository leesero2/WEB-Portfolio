//변수
const registerButton = document.querySelector(".register-text > button"); //회원가입 버튼 변수
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

// })

function chkFrm(){
    var a = document.getElementById("name").value;
    if(a==""){
        alert('이름을 입력해주세요.');
        document.getElementById("name").focus(); 
        return false; 
    }
    return true;
}

// form.addEventListener('submit',()=>{
//     var a = document.getElementById("name").value;
//     if(a==""){
//         alert('이름을 입력해주세요.');
//         document.getElementById("name").focus(); 
//         return false; 
//     }
//     return true;
// })
