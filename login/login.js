function login(event){
    event.preventDefault()
    var user = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

    var data = {username: user, password: pass}

    fetch("config.php", {
        method: "POST",
        
        body: JSON.stringify(data),
    })
    .then((response) => response.json())
    .then((data) => {
        console.log("Success:", data);
    })
    .catch((error) => {
        console.error("Error:", error);
    });
}