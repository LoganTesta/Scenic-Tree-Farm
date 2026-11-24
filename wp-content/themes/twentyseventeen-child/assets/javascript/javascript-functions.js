
window.addEventListener("load", function() {  

    /*Enable the user to click the footer up arrow to go to the top of the page.*/
    let scollToTop = document.getElementById("scollToTop");
    scollToTop.addEventListener("click", goToTopOfPage, false);
    
    function goToTopOfPage() {
        window.scrollTo(window.scrollLeft, 0);
    }
       
}, "false");
