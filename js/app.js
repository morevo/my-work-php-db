/* Smooth transition DB */

$(document).ready(function() {

    $("body").fadeIn(1000, "swing"); // Show page

    let links = $("a.header__nav-link"); // Found links

    links.on("click", function(e) { // On click links
       e.preventDefault();  // Delete default behavior
      
        $("body").fadeOut(400, "swing"); // On click set opacity 0
        linkLocation = this; // Got link to file php (cars,drivers...)
        setTimeout( () => {
         window.location = $(linkLocation).attr("href"); // Transition to new file php (cars, drivers...)
        }, 400);
   
    });
    /* Smooth transition forms */
    let filter = $("[data-filter]");

    filter.on("click", function(e) {
        e.preventDefault();

       let cat = $(this).data("filter");

       let formAdd = $(".form__add");
       let formDelete = $(".form__delete");
       let formUpdate = $(".form__update");

     if(cat == "delete") {

        setTimeout( () =>{
            $(formAdd).fadeOut("slow", "swing");
            $(formUpdate).fadeOut("slow", "swing");
        }, 100 );

        setTimeout( () =>{
            $(formDelete).fadeIn("slow", "swing");
         }, 500 );

    } else if(cat == "add") {
        setTimeout( () =>{
            $(formDelete).fadeOut("slow", "swing");
            $(formUpdate).fadeOut("slow", "swing");
        }, 100 );

        setTimeout( () =>{
            $(formAdd).fadeIn("slow", "swing");
         }, 500 );

    }else if(cat == "update") {
        setTimeout( () =>{
            $(formAdd).fadeOut("slow", "swing");
            $(formDelete).fadeOut("slow", "swing");
        }, 100 );

        setTimeout( () =>{
            $(formUpdate).fadeIn("slow", "swing");
         }, 500 );
    }
       
    });
});

