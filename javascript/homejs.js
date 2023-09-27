// =================== javascript for the To do app dashboard ============================
const inputBox = document.getElementById("input-box");
const listContainer = document.getElementById("list-container");

const addTaskBtn = document.getElementById("create-btn").addEventListener("click", function () {
    if (inputBox.value === "") {
        alert(" Please enter your to do!");
    } else {
        let li = document.createElement("li");
        li.innerHTML = inputBox.value;
        listContainer.appendChild(li);

        let span = document.createElement("span");
        span.innerHTML = "\u00d7";
        li.appendChild(span);
    }
    inputBox.value = "";
    saveInBrowser();
})

listContainer.addEventListener("click", function (e) {
    if (e.target.tagName === "LI") {
        e.target.classList.toggle("checked");
        saveInBrowser();
    } else if (e.target.tagName === "SPAN") {
        e.target.parentElement.remove();
        saveInBrowser();
    } else {

    }
}, false);

function saveInBrowser() {
    localStorage.setItem("data", listContainer.innerHTML);
}

function getFromBrowser() {
    listContainer.innerHTML = localStorage.getItem("data");
}
getFromBrowser();