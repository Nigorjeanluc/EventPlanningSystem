//var elem= document.getElementById("kbs");
function printTime(){
    var d = new Date();
    var hours = d.getHours();
    var mins = d.getMinutes();
    var secs = d.getSeconds();
    if(hours<10){
        hours= "0"+d.getHours();
    }

    if(mins<10){
        mins= "0"+d.getMinutes();
    }
    
    if(secs<10){
        secs= "0"+d.getSeconds();
    }
    document.getElementById("kbs").innerHTML="<h1>"+"Today's hour: "+hours +":"+mins +":"+secs+"</h1>";
}
setInterval(printTime,1000);
//elem.innerHTML="<h1> "+new Date()+"</h1>";
/*var text = '{"people":['+'{"name":"JeanLuc","age":"21"},'+'{"name":"Bertin","age":"37"},'+'{"name":"David","age":"41"}]}';
var obj = JSON.parse(text);
var a1 = obj.people[0].name;
var a2 = obj.people[0].age;
var a3 = obj.people[1].name;
var a4 = obj.people[1].age;
var a5 = obj.people[2].name;
var a6 = obj.people[2].age;
document.getElementById("kbs1").innerHTML="<h1>"+a1+" and he's aged "+a2+"</h1>";
document.getElementById("kbs2").innerHTML="<h1>"+a3+" and he's aged "+a4+"</h1>";
document.getElementById("kbs4").innerHTML="<h1>"+a5+" and he's aged "+a6+"</h1>";*/


/*Drop and Drag*/
/*function allowDrop(ev){
    ev.preventDefault();
}
function drop(ev){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
function drag(ev){
    ev.dataTransfer.setData("text",ev.target.id);
}
var gps = navigator.geolocation.getCurrentPosition();
var fine = gps.ErrorHandler;
document.getElementById("kbs3").innerHTML="<h1>"+fine+"</h1>";*/
