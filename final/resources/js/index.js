import Split from 'split.js';
import {url} from './env.js';

<<<<<<< HEAD
if(document.querySelector('#box-left')){
=======
if (document.getElementById('lesson-container')) {
>>>>>>> master
  Split(['#box-left', '#box-mid', '#box-right'], {
    sizes: [33.3, 33.4, 33.3],
    minSize: 200,
    gutterSize: 5
  });
  require("./timer.js");


}



console.log("hello, index");

if(document.querySelector('#editor')) {
  require("./editor.js");
}


  let prev = document.getElementById('prev-lesson');
  let next = document.getElementById('next-lesson');
  let lessonNumber = document.getElementById('lesson-container').dataset.lesson;
  let hasMoreLessons = true;
  
  function showPrevButton(){
    if(lessonNumber > 1){
      prev.classList.remove('hidden');
    } else {
      prev.classList.add('hidden');
    }
  }

  function fetchLessons(){
    fetch(url + '/api/lesson/' + lessonNumber)
    //replace URL with "http://www.final.test:8080"
    .then(function(response){
      return response.json();
    })
    .then(function(json){
        console.log(json);
        document.getElementById('lesson-text').innerHTML = escapeHtml(json.lesson.description);
        if(json.last){
          hasMoreLessons = false;
        }
    });
  }

  function escapeHtml(unsafe) {
    return unsafe
         .replace(/&/g, "&amp;")
         .replace(/</g, "&lt;")
         .replace(/>/g, "&gt;")
         .replace(/"/g, "&quot;")
         .replace(/'/g, "&#039;");
 }

  prev.addEventListener('click', () => {
    lessonNumber--;
    showPrevButton();
    fetchLessons();
  });

  next.addEventListener('click', () => {
    //Grab solution, send it to server (use fetch?), add conditional wrapping around everything below within function
    
    if(!hasMoreLessons){
      alert('no more lessons');


      //window location redirects
      window.location.replace(url);
      // braden's code: window.location.replace("http://www.final.test:8080");

      return;
    }

    lessonNumber++;
    showPrevButton();
    fetchLessons();
  });




}

console.log("Hello");
