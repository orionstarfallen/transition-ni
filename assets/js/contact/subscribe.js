function invalidInput(){
    var form = document.getElementById('form');
    var x = document.getElementById('name');  
    var y = document.getElementById('email');  

    x.classList.add('submitted');
    y.classList.add('submitted');

    if(form.valid()) {
        form.submit();
        form.reset();
    }
}

function toggleLight(){
    var mail = document.getElementById('mail-box');

    mail.style.background = 'rgb(0, 0, 0)';
    mail.style.color = 'white';
}

  function toggleDark(){
    var mail = document.getElementById('mail-box');

    mail.style.background = 'rgb(255, 255, 255)';
    mail.style.color = 'black';
  }