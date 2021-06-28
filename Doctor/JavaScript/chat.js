const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting
}


sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest(); //creating XML request
    xhr.open("POST", "PHP/insert-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                inputField.value = "";
                scrollToBottom();
            }
        }
    }



    let formData = new FormData(form);
    xhr.send(formData);
}

chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}


setInterval(()=>{
    let xhr = new XMLHttpRequest(); //creating XML request
    xhr.open("POST", "PHP/get-chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                // let data = '<p>Hello Billie<p>';
                // console.log(data);
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){
                    scrollToBottom();
                }
                // console.log(data);
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
},1000);

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}