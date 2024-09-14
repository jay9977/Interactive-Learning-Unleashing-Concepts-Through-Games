var play = false;
var score=0;
var action;
var timeremaining;
var correctans;
var correctpos;
var x;
var y;
var wrongans;
document.getElementById("reset").onclick=function(){
    if(play==true){
        location.reload()
    }
    else{
        play=true;
        score=0;
        document.getElementById("scorevalue").innerHTML=score;
        show("time");
        document.getElementById("reset").innerHTML="Reset Game";
        document.getElementById("reset").style.left="20px";
        timeremaining=60;
        document.getElementById("timevalue").innerHTML=timeremaining+" sec";
        showtime()
        hide("gameover")
        genarateQandA();
    }
}
function showtime(){
    action=setInterval(function(){
        timeremaining-=1;
        document.getElementById("timevalue").innerHTML=timeremaining+" sec";
        if(timeremaining==0){
            stopcount();
            document.getElementById("")
            hide("time");
            show("gameover");
            document.getElementById("gamescore").innerHTML=score;
            hide("right");
            hide("wrong");
            document.getElementById("reset").innerHTML="Start Game";
            document.getElementById("reset").style.left="150px";
        }
    },1000);
}
function stopcount(){
    clearInterval(action);
}
function hide(id){
    document.getElementById(id).style.visibility="hidden";
}
function show(id){
    document.getElementById(id).style.visibility="visible";
}
function genarateQandA (){
    var x =1 + Math.round(9*Math.random());
    var y =1 + Math.round(9*Math.random());
    correctans =x-y;
    document.getElementById("question").innerHTML=x +"-"+ y;
    correctpos=1 + Math.round(3*Math.random());
    document.getElementById("box"+correctpos).innerHTML=correctans;
    var arrayans=[correctans];
    for(i=1;i<5;i++){
        if(i != correctpos){
            do{
                wrongans=(1 + Math.round(9*Math.random()))+(1 + Math.round(9*Math.random()));
            }while(arrayans.indexOf(wrongans)>-1)
            document.getElementById("box"+i).innerHTML=wrongans;
            arrayans.push(wrongans);
        }
    }
}
for(i=1;i<5;i++){
    document.getElementById("box"+i).onclick=function(){
    if(play==true){
        if(this.innerHTML==correctans){
            score++;
            document.getElementById("scorevalue").innerHTML=score;
            hide("wrong");
            show("right");
            setTimeout(function(){
                hide("right");
            },1000);
            genarateQandA();
        }
        else{
            hide("right");
            show("wrong");
            setTimeout(function(){
                hide("wrong");
            },1000);
        }
    }
  }
}