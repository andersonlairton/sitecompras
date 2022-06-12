$(document).ready(function () {
    console.log('arquivo login.js')    
    $("#btn_entrar").click(function () { 
        console.log('35')
        $.ajax({
            type: "POST",
            url: "../../source/configajax.php",
            data: {
                action:'login',
                component:'UsuarioModel',
                cnpj:$("#cnpj_cli").val(),
                password:$("#password_cli").val()
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data);
            },error:function(){
                console.log('error 29')
            }
        });
        
    });
});