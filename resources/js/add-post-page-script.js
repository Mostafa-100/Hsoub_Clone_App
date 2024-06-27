const selectCommunityBtn = document.querySelector(".add-post__chosen-community");
const selectCommunityValue = selectCommunityBtn.querySelector("span");
const selectCommunityList = document.querySelector(".add-post__select-box");
const selectInput = document.querySelector(".add-post__search-community");

const selectValues = document.querySelectorAll(".add-post__community-list li");
const selectCommunityValueWrapper = document.getElementById("chosen-community");

window.onload = function () {
    selectCommunityValueWrapper.value = selectCommunityValue.dataset.id;
}

selectCommunityBtn.addEventListener("click", function () {
    selectCommunityList.classList.toggle("add-post__select-box--visible");
    selectCommunityBtn.classList.toggle("add-post__chosen-community--clicked");
    selectInput.focus();
})

selectValues.forEach(function (item) {
    item.onclick = function () {
        selectCommunityValue.textContent = this.textContent;
        selectCommunityValueWrapper.value = this.content;
        selectCommunityList.classList.remove("add-post__select-box--visible");
        selectCommunityBtn.classList.toggle("add-post__chosen-community--clicked");

        selectCommunityValueWrapper.value = this.dataset.id;

    }
})
