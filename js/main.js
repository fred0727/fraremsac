const btnEnviar = document.getElementById('btnEnviar')
btnEnviar.addEventListener("click",()=>{
    enviarEmail();
})

const form = document.getElementById('form-contact')
form.addEventListener("click",(e)=>{
    e.preventDefault();
    form.reset();
})

function enviarEmail(){
    const nombre = document.getElementById('nombre').value
    const email = document.getElementById('email').value
    const celular = document.getElementById('celular').value
    const asunto = document.getElementById('asunto').value
    const mensaje = document.getElementById('mensaje').value
    if(nombre=="" && email=="" && celular=="" && asunto=="" && mensaje==""){
        Swal.fire(
            'No enviado!',
            'Por favor complete todos los campos!',
            'warning'
        )
    }else{
        var xml = new XMLHttpRequest();
        Swal.fire(
            'Espere por favor!',
            'Enviado correo....',
            'info'
        )
        xml.open("POST","email.php",true);
        xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xml.send("nombre="+ nombre + "&email=" + email + "&celular=" + celular + "&asunto=" + asunto + "&mensaje=" + mensaje )
        xml.onreadystatechange = () => {
            if(xml.readyState == 4 && xml.status == 200){
                var respuesta = xml.responseText
                if(respuesta==1){
                    Swal.fire(
                        'Gracias!',
                        'Correo enviado correctamente!',
                        'success'
                    )
                }else{
                    Swal.fire(
                        'Error!',
                        'Ha ocurrido un error al enviar!',
                        'error'
                    )
                }
            }
        }
    }
}