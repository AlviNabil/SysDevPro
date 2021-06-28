const toggleBtn = document.querySelector(".form .field i"),
passField = document.querySelector(".form input[type='password']");

toggleBtn.onclick = ()=>{
    if(passField.type == "password"){
        passField.type = "text";
        toggleBtn.classList.add("active");
    }else{
        passField.type = "password";
        toggleBtn.classList.remove("active");
    }
}