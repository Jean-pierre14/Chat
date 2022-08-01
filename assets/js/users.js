const search = document.querySelector(".users .search input"),
    searchBar = document.querySelector(".users .searchText"),
    usersList = document.querySelector(".users .user-list"),
    searchBtn = document.querySelector(".users .search button");

searchBtn.onclick = () => {

    search.classList.toggle("active");

    search.focus();

    searchBtn.classList.toggle('active');
    searchBar.value = "";

}

searchBar.onkeyup = () => {

    let searchText = searchBar.value;

    if (searchBar != '') {
        searchBar.classList.add("active");
    } else {
        searchBar.classList.remove("active");
    }

    let xhr = new XMLHttpRequest();

    xhr.open("POST", "./backend/search.php", true);

    xhr.onload = () => {

        if (xhr.readyState === XMLHttpRequest.DONE) {

            if (xhr.status === 200) {
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    }

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.send(`searchText=${searchText}`);
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "./backend/users.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (!searchBar.classList.contains("active")) {
                    usersList.innerHTML = data;
                }
            }
        }
    }
    xhr.send();
}, 500)