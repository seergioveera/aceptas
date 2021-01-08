/*funcion que se activa al presionar el boton de aceptar*/

function presionaSi() {
    // alert("Haz presionado si.");
    window.location="view/form.php";
}

/*funcion que se activa al presionar el boton de rechazar*/
function presionaNo() {
    width = window.innerWidth;
    height = window.innerHeight;

    newWidth = Math.random() * width;
    newHeight = Math.random() * height;

    document.getElementById("btnNo").style.position = "absolute";
    document.getElementById("btnNo").style.left = newWidth + "px";
    document.getElementById("btnNo").style.top = newHeight + "px";
}

