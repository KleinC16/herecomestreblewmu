function loadImages() {
  var images = ["img (189).jpg", "img (190).jpg", "img (191).jpg", "img (192).jpg", "img (193).jpg", "img (195).jpg", "img (196).jpg", "img (197).jpg"];

  for (i = 0; i < images.length; i++) {
      if (i % 4 == 0) {
        document.write("</div>");
        document.write("<div class=\"row\">");
      }
      document.write(("<div class=\"col-md\"><img src=\"images/") + images[i] + ("\"style=\"width:99%; margin-bottom: 1em;\" onclick=\"openModal();currentSlide(") + (i+1) + (")\" class=\"hover-shadow\"></div>"));
  }
}

function loadModal() {
    var images = ["img (189).jpg", "img (190).jpg", "img (191).jpg", "img (192).jpg", "img (193).jpg", "img (195).jpg", "img (196).jpg", "img (197).jpg"];
    var total = images.length;

    for (i = 0; i < total; i++) {
        document.write("<div class=\"mySlides\">");
        document.write(("<div class=\"numbertext\">") + (i+1) + (" / ") + total + ("</div>"));
        document.write(("<img src=\"images/") + images[i] + ("\" style=\"width: 100%;\">"));
        document.write("</div>");
    }

    document.write("<a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>");
    document.write("<a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>");
}
