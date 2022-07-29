const form = document.querySelector(".signup form"),
    contnueBtn = document.querySelector(".button button");

form.onsubmit = (e) => {

    e.preventDefault();

}

contnueBtn.onclick = () => {
    // Start Ajax
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "./backend/actions.php");

    xhr.onload = () => {

    }

    xhr.send();
}