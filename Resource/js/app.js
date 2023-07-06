var user = new User();

var imageUser = (evt) =>{
    console.log("imageUser");
    user.archivo(evt, "imageUser");
}


var main = new Main();
$().ready(()=>{     //func anonima
    let URLactual = window.location.pathname;
    console.log("My url: " + URLactual);
    main.linkMain(URLactual);
});