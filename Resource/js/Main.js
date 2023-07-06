class Main {
    linkMain(link){
        let url = "";
        let cadena = link.split("/");
        // alert(cadena);
        for (let i = 0; i < cadena.length; i++) {
            if (i >= 3) {
                url += cadena[i];
                // alert(url);
            }            
        }
        switch (url) {
            case "UserRegister":
                console.log("UserRegister");
                document.getElementById('files').addEventListener('change', imageUser, false);
                break;
        
            default:
                break;
        }
    }
}