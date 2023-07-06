class UploadPicture{
    archivo(evt,id){
        let files = evt.target.files;   //evt->parametro para poder usar target->propiedad y acceder a files->objeto
        let f = files[0];       //coleccion de objetos
        if (f.type.match("image.*")) {
            let reader = new FileReader();
            reader.onload = ((theFile) => {   //funcion anonima
                return (e) => {
                    document.getElementById(id).innerHTML = ['<img class="imageUser" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');  //join para unir todo en unasola cadena
                }
            })(f);

            reader.readAsDataURL(f);        //leer la url del objeto (imagen)
        }
    }
}