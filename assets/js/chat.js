const form = document.querySelector(".typing-area"),
    inputField = form.querySelector(".input-field"),
    sendBtn = form.querySelector('button'),
    ChatList = document.querySelector('.chat-box');

form.onsubmit = (e) => {
    e.preventDefault();
}

sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./backend/insert-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === 'success') {
                    inputField.value = "";
                    scrollToBottom();
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

ChatList.onmouseenter = () => {
    ChatList.classList.add("active");
}
ChatList.onmouseleave = () => {
    ChatList.classList.remove("active");
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./backend/get-chats.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                ChatList.innerHTML = data;
                if (!ChatList.classList.contains("active")) {
                    scrollToBottom();
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}, 500);

function scrollToBottom() {
    ChatList.scrollTop = ChatList.scrollHeight;
}