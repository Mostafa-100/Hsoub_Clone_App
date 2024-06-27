const communityCloseBtns = document.querySelectorAll('.communites__close-btn');

communityCloseBtns.forEach(function(closeBtn) {
    closeBtn.addEventListener('click', function() {
        const parent = this.closest('.communites__box');
        if(parent) {
            parent.remove();
        }
    })
})
