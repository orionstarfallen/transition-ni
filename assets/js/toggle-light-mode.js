function toggleLightMode(){
    var page_content = document.getElementById("page-content");
    var moon = document.getElementById("moon");
    var sun = document.getElementById("sun");
    var footer = document.getElementById('footer');

    page_content.style.background = "whitesmoke";
    page_content.style.color = "black";
    moon.style.display = "none";
    sun.style.display = "block";
    footer.style.borderTop = '1rem solid black';
  }

  function toggleDarkMode(){
    var page_content = document.getElementById("page-content");
    var moon = document.getElementById("moon");
    var sun = document.getElementById("sun");
    var footer = document.getElementById('footer');

    page_content.style.background = "rgb(29, 29, 29)";
    page_content.style.color = "white";
    moon.style.display = "block";
    sun.style.display = "none";
    footer.style.borderTop = '1rem solid whitesmoke';
  }