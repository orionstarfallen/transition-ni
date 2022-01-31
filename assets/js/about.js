  function toggleDark(){
    var donate_button = document.getElementById("donate-button");
    var donate_icon = document.getElementById("donate-icon");
    var container = document.getElementById("container");
    var about_author = document.getElementById("about-author");
    var quote = document.getElementById("quote");
    var orion = document.getElementById("orion");

    donate_button.style.backgroundColor = "black";
    donate_button.style.color = "white";
    donate_icon.style.filter = "invert()";
    container.style.backgroundImage = "linear-gradient(to bottom, rgba(255,255,255,0.2), rgba(255,255,255,1)) , url('../images/connection.jpg')";
    about_author.style.color = "black";
    quote.style.border = "5px double black";
    quote.style.backgroundColor = "rgba(0,0,0,0.05)";
    orion.style.border = "5px solid rgba(0,0,0,0.05)";
  }

  function toggleLight(){
    var donate_button = document.getElementById("donate-button");
    var donate_icon = document.getElementById("donate-icon");
    var container = document.getElementById("container");
    var about_author = document.getElementById("about-author");
    var quote = document.getElementById("quote");
    var orion = document.getElementById("orion");

    donate_button.style.backgroundColor = "white";
    donate_button.style.color = "black";
    donate_icon.style.filter = "none";
    container.style.backgroundImage = "linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0, 1)) , url('../images/connection-dark.jpg')";
    about_author.style.color = "white";
    quote.style.border = "5px double white";
    quote.style.backgroundColor = "rgba(255,255,255,0.2)";
    orion.style.border = "5px solid rgba(255,255,255,0.2)";
  }