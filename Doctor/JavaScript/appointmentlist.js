const usersList = document.querySelector(".users .users-list"),
form = document.querySelector(".users form"),
gobutton = form.querySelector(".users .button");




form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting
}

//the following function will run frequently every 500ms
gobutton.onclick = () =>{
    let xhr = new XMLHttpRequest(); //creating XML request
    xhr.open("POST", "PHP/appointmentlist.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;
                // console.log(data);
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}