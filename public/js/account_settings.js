const btn_change_password = document.querySelector('#btn-change-password')
const password_section = document.querySelector('.password_section')

btn_change_password.addEventListener('click', function (){
    password_section.style.display = "block";
})