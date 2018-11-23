import Split from 'split.js';
import {url} from './env.js';
import Lesson from './lesson.js';

if(document.querySelector('#box-left')){
if (document.getElementById('lesson-container')) {
  Split(['#box-left', '#box-mid', '#box-right'], {
    sizes: [25, 50, 25],
    minSize: 200,
    gutterSize: 5
  });
  require("./timer.js");


}



console.log("hello, index");

if(document.querySelector('#editor')) {
  let lessonNumber = document.getElementById('lesson-container').dataset.lesson;

  let lesson = new Lesson();
  lesson.setBaseURL(url);
  lesson.initializeLesson(lessonNumber);
  // require("./editor.js");
}


  
//   function showPrevButton(){
//     if(lessonNumber > 1){
//       prev.classList.remove('hidden');
//     } else {
//       prev.classList.add('hidden');
//     }
//   }

//   function fetchLessons(){
//     fetch(url + '/api/lesson/' + lessonNumber)
//     //replace URL with "http://www.final.test:8080"
//     .then(function(response){
//       return response.json();
//     })
//     .then(function(json){
//         console.log(json);
//         document.getElementById('lesson-text').innerHTML = escapeHtml(json.lesson.description);
//         if(json.last){
//           hasMoreLessons = false;
//         }
//     });
//   }

//   function escapeHtml(unsafe) {
//     return unsafe
//          .replace(/&/g, "&amp;")
//          .replace(/</g, "&lt;")
//          .replace(/>/g, "&gt;")
//          .replace(/"/g, "&quot;")
//          .replace(/'/g, "&#039;");
//  }






}

console.log("Hello");
