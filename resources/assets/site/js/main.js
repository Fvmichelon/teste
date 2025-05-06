function init(){
    console.log('INIT');
    toggleMobileMenu();
}

function toggleMobileMenu(){
    $('.js-hamburger').on('click',function(){
        $('.js-hamburger').toggleClass('open');
        const mobileMenu = $(".js-mobile");
        
        if (mobileMenu.hasClass("show")) {
            // Closing the menu - trigger fadeOut animation
            mobileMenu.removeClass("show");
            mobileMenu.addClass("hiding");
            
            // Remove hiding class after animation completes
            setTimeout(() => {
                mobileMenu.removeClass("hiding");
            }, 300); // Match animation duration (0.3s)
        } else {
            // Opening the menu
            mobileMenu.addClass("show");
        }
        
        document.querySelector('body').classList.toggle('freeze');
    });
}

$(function() {
    init();
});
