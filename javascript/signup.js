const form =  document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.prevendDefault(); // preventing form from submitting
}

continueBtn.onclick = ()=>{
    let xhr =  new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "php/signup.php", true); // opening connection to server with POST method and async=true
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "Success"){
                    location.href = "users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }
    let formData = new FormData(form); //creating new form data object
    xhr.send(formData); // sending form data to php
}