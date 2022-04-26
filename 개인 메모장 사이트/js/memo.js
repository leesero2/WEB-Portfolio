//변수
// const checkIdButton = document.querySelector(".checkID > button"); //회원가입 버튼 변수
// const chkForm = document.querySelector("register_form");


// let f;
// const form = document.querySelector('form');


//회원가입 전용 js
// Example starter JavaScript for disabling form submissions if there are invalid fields
// (function () {
//     'use strict'
  
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var forms = document.querySelectorAll('.needs-validation')
  
//     // Loop over them and prevent submission
//     Array.prototype.slice.call(forms)
//       .forEach(function (form) {
//         form.addEventListener('submit', function (event) {
//           if (!form.checkValidity()) {
//             event.preventDefault()
//             event.stopPropagation()
//           }

//           form.classList.add('was-validated')
//         }, false)
//       })
//   })()


// checkIdButton.addEventListener("click",()=>{ //회원가입 버튼 클릭 이벤트리스너
//     checkid()
// })

//비밀번호 일치 체크 함수
// function checkPW(){
//     let password1 = document.getElementById("pw1").value;
//     let password2 = document.getElementById("pw2").value;

//     if(password1 != password2){
//         alert("비밀번호가 일치하지 않습니다");
//         return false;
//     } 
//     return true;
// }

// function checkid(){
    
// 	var userid = document.getElementById("uid").value;
// 	if(userid)  //userid로 받음
// 	{
// 		url = "checkid.php?userid="+userid;
// 		window.open(url,"","width=400,height=200");
// 	} else {
// 		alert("아이디를 입력하세요.");
// 	}
// }

/* global bootstrap: false */

(function () {
    'use strict'
  
    // Tooltip and popover demos
    document.querySelectorAll('.tooltip-demo')
      .forEach(function (tooltip) {
        new bootstrap.Tooltip(tooltip, {
          selector: '[data-bs-toggle="tooltip"]'
        })
      })
  
    document.querySelectorAll('[data-bs-toggle="popover"]')
      .forEach(function (popover) {
        new bootstrap.Popover(popover)
      })
  
    document.querySelectorAll('.toast')
      .forEach(function (toastNode) {
        var toast = new bootstrap.Toast(toastNode, {
          autohide: false
        })
  
        toast.show()
      })
  
    // Disable empty links and submit buttons
    document.querySelectorAll('[href="#"], [type="submit"]')
      .forEach(function (link) {
        link.addEventListener('click', function (event) {
          event.preventDefault()
        })
      })
  
    function setActiveItem() {
      var hash = window.location.hash
  
      if (hash === '') {
        return
      }
  
      var link = document.querySelector('.bd-aside a[href="' + hash + '"]')
  
      if (!link) {
        return
      }
  
      var active = document.querySelector('.bd-aside .active')
      var parent = link.parentNode.parentNode.previousElementSibling
  
      link.classList.add('active')
  
      if (parent.classList.contains('collapsed')) {
        parent.click()
      }
  
      if (!active) {
        return
      }
  
      var expanded = active.parentNode.parentNode.previousElementSibling
  
      active.classList.remove('active')
  
      if (expanded && parent !== expanded) {
        expanded.click()
      }
    }
  
    setActiveItem()
    window.addEventListener('hashchange', setActiveItem)
  })()
  