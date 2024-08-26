var action;
var playing =false;
var score;
var trialsleft;
var audiolist=["application","calcium","temperature","mentality"];
var letter;
var timeremaining;
var correctans;
var correctpos;
var wrongans;
document.getElementById("ans").value=null;
$(function(){
   $("#reset").click(function(){
      if(playing == true)
          {
              location.reload();
          }
       else{
              playing=true;
              score=0;
              $("#scorevalue").html(score);
              show("trials");
              trialsleft=3;
              addhearts();
              hide("gameover");
              $("#reset").html("Reset Game")
              start("timevalue");
              show("time");
              timeremaining=60;
              document.getElementById("timevalue").innerHTML=timeremaining+" sec";
              showtime();
              show("submit");
              show("ans");
              show("score");
           }
   }); 
function addhearts(){
    $("#trials").empty();
    for(i=0 ; i<trialsleft ; i++)
              {
                  $("#trials").append('<img src="heart.png" class="life">');
              }
    if(trialsleft==0)
        {
            endgame();
        }
};
function start(){
    chooseaudio();
};
function chooseaudio(){
    correctans =audiolist[Math.round(3*Math.random())];
    letter="audio/"+correctans+".mp4"; 
    $("#audiotag").attr("src",letter);
};
$("#submit").click(function(){
     var x = document.getElementById("ans").value;
     if(x==correctans){
        score++;
        document.getElementById("scorevalue").innerHTML=score;
         chooseaudio();
      }
    else
        {
            if(x!=null)
            {
                trialsleft--;
                addhearts();
            }
        }
    document.getElementById("ans").value=null;
});
                       
function showtime(){
    action=setInterval(function(){
        timeremaining-=1;
        document.getElementById("timevalue").innerHTML=timeremaining+" sec";
        if(timeremaining==0){
            endgame();
        }
    },1000);
}
function hide(id){
    document.getElementById(id).style.visibility="hidden";
}
function show(id){
    document.getElementById(id).style.visibility="visible";
}
function endgame(){
    clearInterval(action);
    document.getElementById("reset").innerHTML="Start Game";
    hide("submit");
    hide("time");
    hide("ans");
    hide("score");
    show("gameover");
    hide("trials");
     document.getElementById("gamescore").innerHTML=score;
    document.getElementById("reset").innerHTML="Play Again";
}
});

 helpBtn = document.querySelector(".help");
 const help = () => {
     alert("1. Start the Game.\n2. Click on the Audio Button, It will Genrate a Random Word Pronunciation.\n3. Listen to that Pronunciation Correctly and Write that pronunciation into Word in the Box.\n4. If the Word you Write in the box is Correct you Will get +1 score.");
    }
helpBtn.addEventListener("click", help);
