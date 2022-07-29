const pswrd = document.querySelector(".form .field input[type='password']"),
    toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () => {
    if (pswrd.type == "password") {

        pswrd.type = 'text';

        toggleBtn.classList.add("active");

    } else {

        pswrd.type = 'password';

        toggleBtn.classList.remove('active');
    }
}