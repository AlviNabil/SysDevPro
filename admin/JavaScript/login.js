const form = document.querySelector(".login form "),
continueBtn = form.querySelector(".button input"),
errorTxt = form.querySelector(".error-txt ");;


form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest(); //creating XML request
    xhr.open("POST", "PHP/login.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                if(data == "success"){
                    location.href = "firstpage.php";
                    
                }
                else{
                    errorTxt.style.display = "block";
                    errorTxt.textContent = data;
                }
            }
        }
    }



    let formData = new FormData(form);
    xhr.send(formData);
}