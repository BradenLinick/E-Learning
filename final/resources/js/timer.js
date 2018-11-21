console.log("hello, it's timer");
let countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();
var h1 = document.getElementsByTagName('h1')[0],
start = document.getElementById('timeStart'),
stop = document.getElementById('timeStop'),
refresh = document.getElementById('timeRefresh'),
seconds = 0, minutes = 0, hours = 0,
t;
h1.classList.add('time');

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

let interval = null;

export function startTimer(){
    if(interval === null){
        interval = setInterval(add, 1000);
    }
}
startTimer();


export function stopTimer(){
    clearInterval(interval);
    interval = null;
}

export function resetTimer() {
    h1.textContent = "00:00:00";
    seconds = 0; minutes = 0; hours = 0; 
}

//start.onclick = timer;
start.addEventListener('click', function(){
    startTimer();
    console.log("new start");
});
stop.addEventListener('click', function() {
    stopTimer();
});

refresh.addEventListener('click', function() {
    resetTimer();    
    console.log('hello, new refresh');   
} )

/*stop.onclick = function() {
clearInterval(window.t);
} */

/* refresh.onclick = function() {
h1.textContent = "00:00:00";
seconds = 0; minutes = 0; hours = 0;
} */