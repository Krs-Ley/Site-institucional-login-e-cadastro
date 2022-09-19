const campos = document.querySelectorAll(".input_user");
const form = document.getElementById("form");

form.addEventListener("submit", function(e){
    if(campos[5].value != campos[6].value)
    {
        e.preventDefault();
        alert("Repita Senha deve ser igual a senha!");
    }
});

//Colore o campo de verde ou vermelho
function setError(index){
    campos[index].style.border = "2px solid #ff6961";
}

function setTarget(index){
    campos[index].style.border = "2px solid #77dd77"
}

//Função permite que apenas seja capaz de digitar números
function onlynumber(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    //var regex = /^[0-9.,]+$/;
    var regex = /^[0-9.]+$/;
    if( !regex.test(key) ) {
       theEvent.returnValue = false;
       if(theEvent.preventDefault) theEvent.preventDefault();
    }
 }

//Previne que no input nome não seja colocado números
campos[0].addEventListener("keypress", function(e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    if (keyCode > 47 && keyCode < 58) {
        e.preventDefault();
    }
});

function validaNome(index){
    if(campos[index].value.length < 6 || campos[index].value.length > 80){
        setError(index);
    }

    else
        setTarget(index);
}

//VALIDA MATRICULA E CPF
function valida11Digitos(index){
    if(campos[index].value < 11111111111){
        setError(index);
        return false;
    }
    else
        setTarget(index);
}
    
function valida9Digitos(index){
    if(campos[index].value < 111111111){
        setError(index);
    }
    else
        setTarget(index);
}

function validatePassword(index){
    if(campos[index].value.length < 4 || campos[index].value.length > 35){
        setError(index);
    }
    else
        setTarget(index);
}

function comparaSenha(index){
    if(campos[index].value == campos[index+1].value)
        setTarget(index+1);
    else{
        setError(index+1);
    }
}

