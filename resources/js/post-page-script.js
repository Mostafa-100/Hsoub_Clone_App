const postCommentsToggle = document.getElementById("post-comments-toggle");
const postCommentsMenu = document.getElementById("post-comments-menu");

if (postCommentsToggle && postCommentsMenu) {
    postCommentsToggle.onclick = function () {
        postCommentsMenu.classList.toggle("menu-visible");
    }
}

const comments = document.querySelectorAll(".fist-comment .comment");

comments.forEach(function (comment) {
    const parentBg = getComputedStyle(comment.parentElement).backgroundColor;

    if (parentBg === "rgb(255, 255, 255)") {
        comment.style.backgroundColor = "#EFEFEF";
    } else if (parentBg === "rgb(238, 238, 238)") {
        comment.style.backgroundColor = "#FFFFFF";
    }
})

const moreToggle = document.querySelector(".comment__more-first-btn");
const moreMenu = document.querySelector(".comment__more-container");

moreToggle.addEventListener("click", function() {
    moreMenu.classList.toggle("comment__more-container--visible");
})
