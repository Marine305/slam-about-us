"use strict";

window.addEventListener("load", function () {
  var youtube = document.querySelectorAll(".youtube");

  for (var i = 0; i < youtube.length; i++) {
    youtube[i].addEventListener("click", function () {
      var iframe = document.createElement("iframe");
      iframe.setAttribute("frameborder", "0");
      iframe.setAttribute("allowfullscreen", "");
      iframe.setAttribute("allow", "autoplay");
      iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.embed + "?wmode=opaque&rel=0&showinfo=0&autoplay=1&enablejsapi=1");
      this.innerHTML = "";
      this.appendChild(iframe);
    });
  }
});