window.onload = function () {

var slideShow = function () {
    var i;
    var slides = document.querySelectorAll(".slides");
    for (i = 0; i < slides.length; i++) {
      slides[i].setAttribute("style","display:none");
    }
    count++;
    if (count > slides.length) { count = 1; }
    slides[count-1].setAttribute("style","display:block");
    setTimeout(slideShow, 3600);
}

var count = 0;
slideShow();
}