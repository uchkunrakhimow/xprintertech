document.addEventListener("click", function (e) {
    if (e.target.classList.contains("hamburger-toggle")) {
        e.target.children[0].classList.toggle("active");
    }
});

// Home page slider
let homeSlider = new Swiper(".homeSlider", {
    direction: "horizontal",
    loop: true,
    autoplay: {
        delay: 3000,
    },
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// About Slider
let aboutSlider = new Swiper(".aboutSlider", {
    direction: "horizontal",
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    autoplay: {
        delay: 3000
    }
});

// News slider
let newsSlider = new Swiper(".newsSlider", {
    direction: "horizontal",
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    autoplay: {
        delay: 3000
    }
});

/*
    !TODO: When hovering over the image, write the information written in the alt in the h3
*/

let changeBlock = $(".img-block");
let changeTile = document.querySelector(".lg-img-div .lg-img-title");
let changeTileImg = document.querySelector(".lg-img-div .img");

for (let idx = 0; idx < changeBlock.length; idx++) {
    const element = changeBlock[idx];
    const elementImg = changeBlock[idx].querySelector("img");
    element.addEventListener("mouseenter", () => {
        changeTile.innerText = elementImg.getAttribute("alt");
        changeTileImg.setAttribute("src", elementImg.getAttribute("src"));
    });
}

// Product detail zoom function
$(".xzoom, .xzoom-gallery").xzoom({
    zoomWidth: 400,
    title: true,
    tint: "#333",
    Xoffset: 15,
});
$(".xzoom2, .xzoom-gallery2").xzoom({
    position: "#xzoom2-id",
    tint: "#ffa200",
});
$(".xzoom3, .xzoom-gallery3").xzoom({
    position: "lens",
    lensShape: "circle",
    sourceClass: "xzoom-hidden",
});
$(".xzoom4, .xzoom-gallery4").xzoom({ tint: "#006699", Xoffset: 15 });
$(".xzoom5, .xzoom-gallery5").xzoom({ tint: "#006699", Xoffset: 15 });

//Integration with hammer.js
var isTouchSupported = "ontouchstart" in window;

if (isTouchSupported) {
    //If touch device
    $(".xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5").each(function () {
        var xzoom = $(this).data("xzoom");
        xzoom.eventunbind();
    });

    $(".xzoom, .xzoom2, .xzoom3").each(function () {
        var xzoom = $(this).data("xzoom");
        $(this)
            .hammer()
            .on("tap", function (event) {
                event.pageX = event.gesture.center.pageX;
                event.pageY = event.gesture.center.pageY;
                var s = 1,
                    ls;

                xzoom.eventmove = function (element) {
                    element.hammer().on("drag", function (event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        xzoom.movezoom(event);
                        event.gesture.preventDefault();
                    });
                };

                xzoom.eventleave = function (element) {
                    element.hammer().on("tap", function (event) {
                        xzoom.closezoom();
                    });
                };
                xzoom.openzoom(event);
            });
    });

    $(".xzoom4").each(function () {
        var xzoom = $(this).data("xzoom");
        $(this)
            .hammer()
            .on("tap", function (event) {
                event.pageX = event.gesture.center.pageX;
                event.pageY = event.gesture.center.pageY;
                var s = 1,
                    ls;

                xzoom.eventmove = function (element) {
                    element.hammer().on("drag", function (event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        xzoom.movezoom(event);
                        event.gesture.preventDefault();
                    });
                };

                var counter = 0;
                xzoom.eventclick = function (element) {
                    element.hammer().on("tap", function () {
                        counter++;
                        if (counter == 1) setTimeout(openfancy, 300);
                        event.gesture.preventDefault();
                    });
                };

                function openfancy() {
                    if (counter == 2) {
                        xzoom.closezoom();
                        $.fancybox.open(xzoom.gallery().cgallery);
                    } else {
                        xzoom.closezoom();
                    }
                    counter = 0;
                }
                xzoom.openzoom(event);
            });
    });

    $(".xzoom5").each(function () {
        var xzoom = $(this).data("xzoom");
        $(this)
            .hammer()
            .on("tap", function (event) {
                event.pageX = event.gesture.center.pageX;
                event.pageY = event.gesture.center.pageY;
                var s = 1,
                    ls;

                xzoom.eventmove = function (element) {
                    element.hammer().on("drag", function (event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        xzoom.movezoom(event);
                        event.gesture.preventDefault();
                    });
                };

                var counter = 0;
                xzoom.eventclick = function (element) {
                    element.hammer().on("tap", function () {
                        counter++;
                        if (counter == 1) setTimeout(openmagnific, 300);
                        event.gesture.preventDefault();
                    });
                };

                function openmagnific() {
                    if (counter == 2) {
                        xzoom.closezoom();
                        var gallery = xzoom.gallery().cgallery;
                        var i,
                            images = new Array();
                        for (i in gallery) {
                            images[i] = { src: gallery[i] };
                        }
                        $.magnificPopup.open({
                            items: images,
                            type: "image",
                            gallery: { enabled: true },
                        });
                    } else {
                        xzoom.closezoom();
                    }
                    counter = 0;
                }
                xzoom.openzoom(event);
            });
    });
} else {
    //If not touch device

    //Integration with fancybox plugin
    $("#xzoom-fancy").bind("click", function (event) {
        var xzoom = $(this).data("xzoom");
        xzoom.closezoom();
        $.fancybox.open(xzoom.gallery().cgallery, {
            padding: 0,
            helpers: { overlay: { locked: false } },
        });
        event.preventDefault();
    });

    //Integration with magnific popup plugin
    $("#xzoom-magnific").bind("click", function (event) {
        var xzoom = $(this).data("xzoom");
        xzoom.closezoom();
        var gallery = xzoom.gallery().cgallery;
        var i,
            images = new Array();
        for (i in gallery) {
            images[i] = { src: gallery[i] };
        }
        $.magnificPopup.open({
            items: images,
            type: "image",
            gallery: { enabled: true },
        });
        event.preventDefault();
    });
}



$('body').attr('data-theme', 'light');
if($('body').attr('data-theme') == 'light') {
    $("#theme-toggle").html('<i class="fa-solid fa-moon"></i>');
}

$("#changeTheme").click(function () {
    if ($("body").attr("data-theme") == "light") {
        $("body").attr("data-theme", "dark");
        $("#theme-toggle").html('<i class="fa-solid fa-brightness"></i>');
        localStorage.setItem('dark', 'true');
    } else {
        $("#theme-toggle").empty();
        $("body").attr("data-theme", "light");
        $("#theme-toggle").html('<i class="fa-solid fa-moon"></i>');
        localStorage.setItem('dark', 'false');
    }
});

if (localStorage.getItem('dark') == 'true') {
    $("#theme-toggle").empty();
    $("#theme-toggle").html('<i class="fa-solid fa-brightness"></i>');
    $("body").attr("data-theme", "dark");
} else {
    $("#theme-toggle").empty();
    $("#theme-toggle").html('<i class="fa-solid fa-moon"></i>');
    $("body").attr("data-theme", "light");
}


// Product detail swiper
let detailSwiper = new Swiper("#detailSwiper", {
    direction: "horizontal",
    slidesPerView: 5,
    slidesPerGroup: 1,
    navigation: {
        prevEl: ".fa-chevron-left",
        nextEl: ".fa-chevron-right",
    },
});