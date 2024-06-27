/* navbar */
const navbarProfileBtns = document.querySelectorAll(".navbar__menu");

navbarProfileBtns.forEach(function (btn) {
    btn.onclick = function () {
        const profileMenu = btn.nextElementSibling;

        const isActive = btn.classList.contains("navbar__selected__btn");

        navbarProfileBtns.forEach(function (btn) {
            btn.classList.remove("navbar__selected__btn");
            btn.nextElementSibling.classList.remove("navbar__menu-visible");
        });

        if (!isActive) {
            btn.classList.add("navbar__selected__btn");
            profileMenu.classList.add("navbar__menu-visible");
        }
    }
});

/* bar */
const dropdownBtn = document.getElementById("dropdown-btn");
const dropDownMenu = document.getElementById("dropdown-menu");

dropdownBtn.addEventListener("click", function () {
    dropDownMenu.classList.toggle('bar__visible');
})
