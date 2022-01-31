function invalidInput(){
    var form = document.getElementById('form');
    var x = document.getElementById('first-name');  
    var y = document.getElementById('email');  
    var z = document.getElementById('message');  

    x.classList.add("submitted");
    y.classList.add("submitted");
    z.classList.add("submitted");


    if(form.valid()){
        form.submit();
        form.reset();
    }
}