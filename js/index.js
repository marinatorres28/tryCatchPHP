window.onload=function (){
    check=document.querySelector("#check");
    boton=document.querySelector("#enviar");

    check.addEventListener("change",function (){
        if (check.checked){
            boton.disabled=false;
        }else{
            boton.disabled=true;
        }
    })

}