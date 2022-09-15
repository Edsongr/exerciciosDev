function checkForm(create = true)
{
    let errors = [];

    /**
     * Verifica se tem nome e sobrenome
     */
    let name = $("#name").val();
    allName  = name.split(' ');

    if (allName.length == 1 || allName[1].trim() == "") {
        errors.push('Digite seu nome e Sobrenome!\n');
    }

    /**
     * Verifica se é um email valido
     */
    if (!isValidEmail($("#email").val())) {
        errors.push('Digite um email valido!\n');
    }

     /**
     * Verifica se tem no minimo 3 caracteres para Nome Login
     */
      if (($("#userName").val().trim()).length < 3) {
        errors.push('Digite um nome login com no mínimo 3 caracteres!\n');
    }

    /**
     * Verifica se a senha contem letra e numero
     */
     if (create && (!containsNumbers($("#password").val()) || containsOnlyNumbers($("#password").val()))) {
        errors.push('Digite uma senha com pelo menos uma letra e um numero!\n');
    }

    if (errors.length > 0) {

        swal({
            title: "ATENÇÃO!",
            text: errors.join(" "),
            icon: "warning",
            buttons: true,
            dangerMode: true,
          });


    } else {
        $("#formUsers").submit();
    }

}


function isValidEmail(email) 
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
        return true
    else  
        return false
}

function maskCep(cep)
{
    cep = cep.replace(/D/g,"");     
    cep =  cep.replace(/^(\d{5})(\d)/,"$1-$2");
    $("#zipCode").val(cep)
}

function containsOnlyNumbers(str) 
{
    return /^\d+$/.test(str);
}

function containsNumbers(str) 
{
    return /[0-9]/.test(str);
}
