// let searchBtn = document.querySelector(".panel-searchicon button");
// let searchBox = document.querySelector(".panel-searchbox");
// searchBtn.addEventListener("click", function () {
//     searchBox.classList.toggle("active");
// })

let sideBtn = document.querySelector("#hamburger");
let mainPanel = document.querySelector(".main-panel");
sideBtn.addEventListener("click", function () {
    mainPanel.classList.toggle("active");
})

console.log("hi");