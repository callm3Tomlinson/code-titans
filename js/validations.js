function confirmPassword(){
    var password = document.getElementById("pass").value;
    var repass = document.getElementById("repass").value;
    var button = document.getElementById("button");
    var form = document.getElementById("crearC");
    var error = document.getElementById("error");
    var form = document.getElementById("crearC");

    form.addEventListener('click',(e)=>{
        if(password != "" && repass != ""){
            if(password != repass){  
                e.preventDefault();                
                error.textContent = "Contraseñas no coinciden!!!";
                error.style.color = "red";
                console.log(password);
                console.log(repass);                
            }else{
                form.submit();
            }               
        
        }
    });           
}
