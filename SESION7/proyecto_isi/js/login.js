function verificarFormulario(){
    let usuario = document.getElementById('txtusuario').value;
    let clave = document.getElementById('txtpassword').value;

    if(usuario==""){
        alert("Por favor ingresa tu usuario");
    }else{
        if(clave ==""){
            alert("Por favor ingresa tu contraseña ....")
        }else{
            document.formularioLogin.submit();
        }
    }
    
}