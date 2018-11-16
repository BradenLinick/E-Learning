console.log("hello, it's timer");
let countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();
var h1 = document.getElementsByTagName('h1')[0],
start = document.getElementById('timeStart'),
stop = document.getElementById('timeStop'),
refresh = document.getElementById('timeRefresh'),
seconds = 0, minutes = 0, hours = 0,
t;

function add() {
seconds++;
if (seconds >= 60) {
    seconds = 0;
    minutes++;
    if (minutes >= 60) {
        minutes = 0;
        hours++;
    }
}

h1.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);


}
function timer() {
clearInterval(window.t);    
console.log('interval cleared');
window.t = setInterval(add, 1000);
}
timer();


//start.onclick = timer;
start.addEventListener('click', function(){
    timer();
});
stop.addEventListener('click', function() {
    clearInterval(window.t);
});
refresh.addEventListener('click', function() {
    h1.textContent = "00:00:00";
    seconds = 0; minutes = 0; hours = 0; 
    console.log('hello, new refresh');   
} )

/*stop.onclick = function() {
clearInterval(window.t);
} */

/* refresh.onclick = function() {
h1.textContent = "00:00:00";
seconds = 0; minutes = 0; hours = 0;
} */