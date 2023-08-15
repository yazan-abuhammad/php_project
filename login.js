let form = document.querySelector("#longin");

form.addEventListener('submit', function(e) {
    
    
   
    const Email_Address = document.querySelector('#Email').value;
    const Password = document.querySelector('#pass').value;
    const wraning = document.querySelector('#text');
   

    fetch('http://localhost/php_project/fun.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(sendBack)
    })
    .then(r => r.json())
    .then(function(data){
        
        data.forEach(function(e,i){
            if(data[i].Email_Address === Email_Address && data[i].Password === Password){
               
                window.location.href = "../view_page/welcome.html";
            }
            else{
                wraning.classList.remove("hiden");
            }
        })
    })
    
});