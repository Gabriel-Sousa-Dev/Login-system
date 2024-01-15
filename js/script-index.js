var form = document.querySelector("form#form-login")
var inputUser = document.querySelector("input#user")
var inputPassword = document.querySelector("input#password")
var btnLogin = document.querySelector("btnSubmit")


form.addEventListener("submit", (e) => {
  e.preventDefault()
  
  if(inputUser.value === ""){
    alert("Preecha o campo de Usuário!")
    return;
  }
  
  if(inputPassword.value === ""){
    alert("Preencha o campo de Senha!")
    return;
  }
  
  form.submit()
})