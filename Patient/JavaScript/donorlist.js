const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list"),
val = document.querySelector(".users .search2 select");





//the following function will run frequently every 500ms
setInterval(()=>{
    let xhr = new XMLHttpRequest(); //creating XML request
    xhr.open("GET", "PHP/donor.php", true);
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