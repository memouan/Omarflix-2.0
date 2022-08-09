// function to change logo on click

let omarLogo = document.querySelector('img');

omarLogo.onclick = function(){
    let mySrc = omarLogo.getAttribute('src');
    if(mySrc === '../image/logoOff.png'){
        omarLogo.setAttribute ('src','../image/logoOn.png');
    }
    else{
        omarLogo.setAttribute ('src','../image/logoOff.png');
    }
}
