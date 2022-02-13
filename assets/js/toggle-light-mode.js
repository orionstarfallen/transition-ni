function toggleLightMode(){
    var page_content = document.getElementById("page-content");
    var moon = document.getElementById("moon");
    var sun = document.getElementById("sun");
    var footer = document.getElementById("footer");

    page_content.style.background = "url('assets/images/banners/background.svg')";
    page_content.style.color = "black";
    moon.style.display = "none";
    sun.style.display = "block";
    footer.style.borderTop = "1rem solid black"
  }

  function toggleDarkMode(){
    var page_content = document.getElementById("page-content");
    var moon = document.getElementById("moon");
    var sun = document.getElementById("sun");
    var footer = document.getElementById("footer");

    page_content.style.background = "url('assets/images/banners/background-dark.svg')";
    page_content.style.color = "white";
    moon.style.display = "block";
    sun.style.display = "none";
    footer.style.borderTop = "1rem solid whitesmoke"
  }