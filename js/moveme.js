/**function startPostion() { 
    document.getElementById('right').style.position="absolute";
    document.getElementById('right').style.right="10px"
    //document.getElementById('right').onclick=moveRight()
}
*/
function moveRight() { 
    var box = document.getElementById('container');
    var smiley = document.getElementById('smiley');
    var currentPosition = smiley.offsetLeft;
    
    if(currentPosition < (box.clientWidth - smiley.clientWidth)) {
        smiley.style.left = currentPosition + 20 + "px";
    } else alert("Ouch!");
}
    
function moveLeft() {
    var box = document.getElementById('container');
    var smiley = document.getElementById('smiley');
    var currentPosition = smiley.offsetLeft;
    
    if(currentPosition !== 0) {
    smiley.style.left = currentPosition - 20 + "px"; 
    }else alert("Ouch!");
}

function moveUp() {
    var box = document.getElementById('container');
    var smiley = document.getElementById('smiley');
    var currentPosition = smiley.offsetTop;
    
    if(currentPosition !== 0) {
       smiley.style.top = currentPosition - 20 + "px";
    }else alert("Ouch!");
}

function moveDown() {
    var box = document.getElementById('container');
    var smiley = document.getElementById('smiley');
    var currentPosition = smiley.offsetTop;
    
    if(currentPosition < (box.clientWidth - smiley.clientWidth)) {
       smiley.style.top = currentPosition + 20 + "px";
    }else alert("Ouch!");
}



