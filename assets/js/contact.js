function invalidInput(){
    var form = document.getElementById('form');
    var x = document.getElementById('name');  
    var y = document.getElementById('email');  
    var z = document.getElementById('message');  

    x.classList.add('submitted');
    y.classList.add('submitted');
    z.classList.add('submitted');

    if(form.valid()) {
        form.submit();
        form.reset();
    }
}

function toggleLight(){
    var form = document.getElementById('form');
    var mail = document.getElementById('mail-box');

    mail.style.background = 'rgba(0, 0, 0, 1)';
}

  function toggleDark(){
    var form = document.getElementById('form');
    var mail = document.getElementById('mail-box');

    mail.style.background = 'rgba(255, 255, 255, 0.1)';
  }