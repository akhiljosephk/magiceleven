fetch('./files/events.json')
.then(function(response){
    
         return response.json();
})
.then(function (data){
    const divContainer = document.getElementById("test");
   
    for(var i=0;i<data.length;i++){

        
    
        const newDiv = document.createElement("div");
        newDiv.classList.add("event");
        divContainer.appendChild(newDiv);
    
                const leftDiv = document.createElement("div");
                leftDiv.classList.add("event-left");
                newDiv.appendChild(leftDiv);
    
                const dateDiv = document.createElement("div");
                dateDiv.classList.add("event-date");
                leftDiv.appendChild(dateDiv);
    
                const dayDiv = document.createElement("div");
                dayDiv.classList.add("date");
                dateDiv.appendChild(dayDiv);
                dayDiv.innerHTML = data[i].eventDay;
    
                const monthDiv = document.createElement("div");
                monthDiv.classList.add("month");
                dateDiv.appendChild(monthDiv);
                monthDiv.innerHTML = data[i].eventMonYear;
    
                            const rightDiv = document.createElement("div");
                            rightDiv.classList.add("event-right");
                            newDiv.appendChild(rightDiv);
    
                            const titleDiv = document.createElement("h3");
                            titleDiv.classList.add("event-title");
                            rightDiv.appendChild(titleDiv);
                            titleDiv.innerHTML=data[i].eventTitle;
    
                            const descDiv = document.createElement("div");
                            descDiv.classList.add("event-desc");
                            rightDiv.appendChild(descDiv);
                            descDiv.innerHTML=data[i].eventDesc;
    
    
                            const timeDiv = document.createElement("div");
                            timeDiv.classList.add("event-timing");
                          
                            rightDiv.appendChild(timeDiv);
                           
                            const imgTag=document.createElement("img")  ;
                            timeDiv.appendChild(imgTag).setAttribute("src","files/time.png");
                            const spanTag = document.createElement("span");
                            
                            timeDiv.appendChild(spanTag).innerHTML=data[i].eventTime;
        }
    
 
  
}).catch(function (err){
    console.log(err);
});
