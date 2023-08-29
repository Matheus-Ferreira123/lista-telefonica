$(document).ready(function(){
    $("#login").on('click', function(event){
        event.preventDefault()
        login()
    })

})

function login(event){
    var login = $("#username").val()
    var password = $("#password").val()
    
    
    $.ajax({
        method: "POST",
        url: "config.php",
        data: { username: login, password: password },
        dataType: "json",
        success: function(resp){
            console.log(resp.sucesso)
            if(resp.sucesso == 1){
                window.location.href="http://localhost/lista-telefonica"
                
            }else {
                alert("usuario ou senha incorretos")
            }
        }
       })

}