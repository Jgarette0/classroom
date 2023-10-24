

// Kani nga js code kay para sa navbar,
// if ang 'current scroll position' is greater than 'bag-ong scroll position' 
// meaning nag scroll up or nag swipe down
// kay ang navbar position magpabilin
// else if 'nag scroll down' kay ang navbar sa top ug bottom kay motago
// bcz -valuePX
let prevScrollTop = window.pageYOffset;

const navbar = document.getElementById("navbar");
const navbarBottom = document.getElementById("navbarBottom");
const mapButton = document.getElementById("map");

window.onscroll = function() {
    const currentScrollTop = window.pageYOffset;

    if (prevScrollTop > currentScrollTop) {
        navbar.style.top = "0";
        document.querySelector(".navbarBottom").style.bottom = "0";
        document.querySelector(".map").style.bottom = "0";
    } else {
        navbar.style.top = "-68px";
        document.querySelector(".navbarBottom").style.bottom = "-73px";
        document.querySelector(".map").style.bottom = "-58px";
    }

    prevScrollTop = currentScrollTop;
};

//this code kay belong sa profile icon
//if profile icon is clicked kay mogawas ang modal(pop-up)
//ig human ug show-up sa modal kay pwede raka mo click bisan asa para maclose and modal

const profileBtn = document.getElementById("profileBtn");
const theDialog = document.getElementById("theDialog");

profileBtn.addEventListener("click", () => {
    theDialog.showModal();
});

theDialog.addEventListener("click", () => {
    theDialog.close();
});



