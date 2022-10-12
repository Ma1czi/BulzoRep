var animation = false;
var size = 50;
var i = 0.1;
var maxSize = 75;
var minSize = 10;

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function dosomethink(){
    if(animation == false){
        document.getElementById("button").innerHTML = "Sobuś Adaś";
        animation = true;
    } else{
        document.getElementById("button").innerHTML = "Adaś Sobuś";
        animation = false;
    }

    while(animation && size > minSize){
        size -= i;
        await sleep(10);
        document.getElementById("picture").style.width = size + "%";
    }
    while(!animation && size < maxSize){
        size += i;
        await sleep(10);
        document.getElementById("picture").style.width = size + "%";
    }
}