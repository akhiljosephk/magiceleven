fetch('./files/squad.json')
.then(function(response){
    
         return response.json();
})
.then(function (data){
    const divContainer = document.getElementById("squad");
   
    for(var i=0;i<data.length;i++){

        
    
        const newDiv = document.createElement("div");
        newDiv.classList.add("boxteam");
        divContainer.appendChild(newDiv);

        const imgTag =  document.createElement("img")  ;
        newDiv.appendChild(imgTag).setAttribute("src",`files/${data[i].playerImg}`);

        const h2Tag = document.createElement("h2");
        
        h2Tag.innerHTML= (data[i].playerName);
        newDiv.appendChild(h2Tag);


        const spanTag = document.createElement("span");
       
        spanTag.innerHTML= (data[i].playerRole);
        newDiv.appendChild(spanTag);


 
        }
    
 
  
}).catch(function (err){
    console.log(err);
});

var attempt = 3;
function validate(){
fetch('./files/login.json')
.then(function(response){
    
         return response.json();
})
.then(function (data){

 // Variable to count number of attempts.
// Below function Executes on click of login button.

var username = document.getElementById("email").value;
var password = document.getElementById("password").value;
if ( username == data[0].adminUser && password == data[0].adminpass){
// alert ("Login successfully");
window.location = "uploadLogin.html"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("email").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
})
}
