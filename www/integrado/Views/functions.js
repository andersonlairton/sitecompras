function editProd(id){
    $.ajax({
        url: "Controllers/ProdutosController.php",
        type: "POST",
        dataType: "JSON",
        data: {
            id:id,
            action:"list"
        },
        success: function (data) {
            window.location='cad_produto.php';
        },error:function(){
            console.log('error 14');
        }
    });
}

function newUser() {
    $.ajax({
        type: "POST",
        url: "Controllers/UsuarioController",
        data: {
            action:'cadastrar'
        },
        dataType: "JSON",
        success: function (data) {
            console.log(data);
        },error:function(){
            console.log('error 29')
        }
    });
}