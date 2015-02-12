
var contactForm = document.getElementById("contact-form");
contactForm.addEventListener("submit", function(event){
    var elements = document.querySelectorAll("#contact-form input, #contact-form textarea");
    var isValid = true;
    
    // tester tous les éléments
    for(var i = 0; i < elements.length; i++) {
        var el = elements[i];
        if (el.value == ""){
            isValid = false;
            el.className = "invalide";
        } else {
            el.className = "";
        }
    }
    
    if (!isValid) {
        event.preventDefault();
    }
});