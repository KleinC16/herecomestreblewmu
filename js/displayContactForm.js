function toggleForm() {
    var form = document.getElementById("myForm");
    var behind = document.getElementsByClassName("behind");
    var w = $(window).width();
    var h = $(window).height();

    console.log(w);
    console.log(h);

    if (form.style.display === "none") {
      // Make changes to display the form pop-up
      for (i = 0; i < behind.length; i++) {
        behind[i].style.opacity = "0.2";
      }

      form.style.display = "block";
      form.style.padding = "1em";
      form.style.postition = "fixed";
      form.style.top = "50%";
      form.style.left = "50%";
      form.style.width = (w*.35 + "px");
      form.style.height = (h/2 + "px");
      form.style["margin-top"] = ("-" + h/4 + "px");
      form.style["margin-left"] = ("-" + w/6 + "px");

      //form.style["background-color"] = "black !important";
      form.style.opacity = "1 !important";
    } else {
      //Make changes to hide the form pop-up
      for (i = 0; i < behind.length; i++) {
        behind[i].style.opacity = "";
      }
      form.style.display = "none";
    }


}
