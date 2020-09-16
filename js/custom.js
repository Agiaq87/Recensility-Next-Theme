// li  parent tag from ul father
var li = document.querySelectorAll("#recensility-menu-primary-navigation > li")


if( document.body.clientWidth < 835 ){

    li.forEach(e => {
        e.style.padding = "1em";
        e.style.display = "none";
    });

} 

// This intercept li tags
function burgerFunction() {
    //var x = document.querySelectorAll("#recensility-menu-primary-navigation > li");

    li.forEach(e => {
        //console.log(e.style)
        if (e.style.display === "block") {
            //console.log(e.style.display)
            e.style.display = "none";
        } else {
            e.style.display = "block";
        }
    });
}


