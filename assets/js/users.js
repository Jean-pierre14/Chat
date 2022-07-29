const search = document.querySelector(".users .search input"),
    searchBtn = document.querySelector(".users .search button");

searchBtn.onclick = () => {

    search.classList.toggle("active");

    search.focus();

    searchBtn.classList.toggle('active');

}