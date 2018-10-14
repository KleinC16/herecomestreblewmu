function loadImages() {
  var images = ["img (189).jpg", "img (190).jpg", "img (191).jpg", "img (192).jpg", "img (193).jpg", "img (195).jpg", "img (196).jpg", "img (197).jpg"]

  for (i = 0; i < images.length; i++){

      document.write(("<div class=\"col\"><img src=\"images/") + images[i] + "\"style=\"width:100%\" onclick=\"openModal();currentSlide(1)\" class=\"hover-shadow cursor\"></div>");
      console.log(images[i]);
  }
}
