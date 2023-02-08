// Set welcome text height according to it's content
var welcomeTextBlock = document.getElementById('welcome-text');
if(welcomeTextBlock){
    function setWelcomeTextHeight() {
        var welcomeTextTitle = document.querySelector('.welcome-text-title');
        welcomeTextBlock.style.height = welcomeTextTitle.offsetHeight + "px";
    }
    
    window.addEventListener("resize", setWelcomeTextHeight);
    window.addEventListener("load", setWelcomeTextHeight);
    setWelcomeTextHeight();
}