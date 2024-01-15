var formCad = document.getElementById("form-cad")
var btnCad = document.getElementById("btnCad")

var inputUser = document.getElementById("user")
var inputEmail = document.getElementById("email")
var inputPassword = document.getElementById("password")
var inputAge = document.getElementById("age")




formCad.addEventListener("submit",(e) => {
  e.preventDefault()
  
  if(inputUser.value === ""){
    alert("Preencha o campo de Usuário")
    return;
  }
  if(inputEmail.value === ""){
    alert("Preencha o campo de Email")
    return;
  }
  if(inputPassword.value === ""){
    alert("Preencha o campo de Senha")
    return;
  }
  
  
  formCad.submit()
  
})