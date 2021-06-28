const form = document.querySelector(".signup form "),
continueBtn = form.querySelector(".button input"),
errorTxt = form.querySelector(".error-txt ");;


form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest(); //creating XML request
    xhr.open("POST", "PHP/updatedonor.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "Update succeded"){
                    location.href = "index.php";
                    
                }
                else{
                    errorTxt.textContent = data;
                    errorTxt.style.display = "block";
                }
            }
        }
    }



    let formData = new FormData(form);
    xhr.send(formData);
}