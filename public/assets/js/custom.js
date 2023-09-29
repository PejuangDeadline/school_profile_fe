// Submit tag <a>
document
    .getElementById("submitBtn")
    .addEventListener("click", function (event) {
        event.preventDefault(); // Prevents the default behavior of the anchor tag
        document.getElementById("myForm").submit(); // Submits the form with the ID "myForm"
    });
// Submit tag <a>
document
    .getElementById("submitBtn2")
    .addEventListener("click", function (event) {
        event.preventDefault(); // Prevents the default behavior of the anchor tag
        document.getElementById("myForm2").submit(); // Submits the form with the ID "myForm"
    });

// function toggleSocialPopup(event) {
//     event.preventDefault();
//     const popup = document.querySelector(".social-popup");
//     const displayStyle = getComputedStyle(popup).display;
//     popup.style.display = displayStyle === "none" ? "block" : "none";
// }
