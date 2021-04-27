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
  
});
