const pswrd = document.querySelector(".form .field input[type='password']"),
    toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () => {
    if (pswrd.type == "password") {
        pswrd.type = 'text';
    } else {
        pswrd.type = 'password';
    }
}