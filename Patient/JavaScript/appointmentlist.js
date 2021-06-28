const usersList = document.querySelector(".users .users-list");



//the following function will run frequently every 500ms
setInterval(()=>{
    let xhr = new XMLHttpRequest(); //creating XML request
    xhr.open("GET", "PHP/appointmentlist.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;
                // console.log(data);
            }
        }
    }
    xhr.send();
},1000); 