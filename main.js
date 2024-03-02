var Productimg = document.getElementById("ProductImg ");
var SmallImg = document.getElementsByClassName("small-img ")

SmallImg[0].onclick = function() {
    ProductImg.src = SmallImg[0].src;
}
SmallImg[1].onclick = function() {
    ProductImg.src = SmallImg[].src;
}
SmallImg[2].onclick = function() {
    ProductImg.src = SmallImg[2].src;
}
SmallImg[3].onclick = function() {
    ProductImg.src = SmallImg[3].src;
}

var MenuItems = document.getElementById(" MenuItems ");

MenuItems.style.maxHeight = "0px ";

function menutoggle() {
    if (MenuItems.style.maxHeight == "0px ") {
        MenuItems.style.maxHeight = "200px "
    } else {
        MenuItems.style.maxHeight = "0px "
    }

}



/*------typing animation-------*/
var typed = new Typed(".typing", {
    string: ["EMI", "Developer", "Blogger", "Designer", "Freelancer"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});

var typed = new Typed(".typing-2", {
    strings: ["YouTuber", "Developer", "Blogger", "Designer", "Freelancer"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});


// owl carousel script
$('.carousel').owlCarousel({
    margin: 20,
    loop: true,
    autoplayTimeOut: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 3,
            nav: false
        }
    }
});