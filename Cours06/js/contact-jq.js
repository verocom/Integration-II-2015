var $contactForm = $("#contact-form");
$contactForm.on("submit", function(event){
    var isValid = true;
    $("#contact-form input, #contact-form textarea").each(function(){
        var $this = $(this);
        if ($this.val() == ""){
            isValid = false;
            $this.addClass("invalide");
        } else {
            $this.removeClass("invalide");
        }
    });
    
    if (!isValid) {
        event.preventDefault();
    }
});