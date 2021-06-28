const form = document.querySelector(".login form "),
continueBtn = form.querySelector(".button input"),
errorTxt = form.querySelector(".error-txt ");;


form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting
}

continueBtn.onclick = ()=>{
    let em = form['email'].value;

    let xhr = new XMLHttpRequest(); //creating XML request
    xhr.open("POST", "PHP/donorlogin.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                if(data == "success"){
                    str = "donorupdate.php?email=";
                    location.href = str.concat(em) ;
                    
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