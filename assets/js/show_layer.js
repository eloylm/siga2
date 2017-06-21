/* ---------------------------- */
/* SHOW-HIDE Layer				*/
/* ---------------------------- */
var last_clicked="";

function showlayer(layer){
var myLayer=document.getElementById(layer);
if (last_clicked==""){
    last_clicked=document.getElementById(layer);
}

if((myLayer.style.display=="none" || myLayer.style.display=="") && last_clicked.style.display=="block"){
    last_clicked.style.display="none";
    myLayer.style.display="block";
    last_clicked = myLayer;
} else if(myLayer.style.display=="none" || myLayer.style.display==""){
    myLayer.style.display="block";
    last_clicked = myLayer;
    } else {
        myLayer.style.display="none";
    }
}

function hidelayer(){
var myLayer;
for(i=1;i<=4;i++){
	myLayer=document.getElementById('sm_'+i);
        if(myLayer){ /*Fix IE object required issue*/
            myLayer.style.display="none";
        }
    }
}
function wait(msecs){
    var start = new Date().getTime();
    var cur = start;
    while(cur - start < msecs){
        cur = new Date().getTime();
    }
}
//Funcion para capturar la tecla de escape y esconder los menues
document.onkeydown = function(e) {
         e = e || window.event;
         var keyCode = e.which || e.keyCode;
         switch(keyCode) {
            case 27:
              hidelayer();
              break;
         }
      }