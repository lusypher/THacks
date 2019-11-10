function addToList() { 
   
    var userInput = document.getElementById("userInput").value;
    var li = document.createElement("LI");
    var textnode = document.createTextNode(userInput);
    var x = document.createElement("INPUT");
    x.setAttribute("type", "checkbox");
    x.setAttribute("value", "ON");
     li.appendChild(x);   
    li.appendChild(textnode);
    var list = document.getElementById("cntr_list");
    list.insertBefore(li, list.childNodes[0]); 