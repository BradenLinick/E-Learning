import Solution from './solution.js';
import {startTimer} from './timer.js';

export default class Lesson {
    constructor() {
        this.prev_button = null;
        this.next_button = null;
        this.editor = null;
        this.codeScreen = null;
        this.solution = null;
        this.lesson_id = null;
        this.hasMoreLessons = true;

        this.setup();

    }

    //setup the editor environment
    setup() {
        let self = this;

        this.editor = ace.edit("editor");
        this.editor.setTheme("ace/theme/terminal");
        this.editor.getSession().setMode("ace/mode/html");
        this.editor.setValue(`<!DOCTYPE html>
        <html>
          <head>
          </head>
        
          <body>
          </body>
        
        </html>`, 1);

        this.editor.focus();

        this.editor.setOptions({
            fontSize: "16pt",
            showLineNumbers: true,
            showGutter: true,
            vScrollBarAlwaysVisible: true,
            enableBasicAutocompletion: true, 
            enableLiveAutocompletion: true,
            wrap: true,
            enableSnippets: true,
            indentedSoftWrap: false
        });

        this.editor.setShowPrintMargin(true);
        this.editor.setBehavioursEnabled(true);
        
        this.editor.on('change', function(e){        
            self.update();
            
        })  

        //defining the iframe
        this.codeScreen = document.getElementById('editorIframe').contentWindow.document;

        this.prev_button = document.getElementById('prev-lesson');
        this.next_button = document.getElementById('next-lesson');

        this.prev_button.addEventListener('click', () => {
            self.initializeLesson(self.lesson_id-1);
        });
        
        this.next_button.addEventListener('click', () => {
            self.initializeLesson(self.lesson_id+1);
        });

            //Grab solution, send it to server (use fetch?), add conditional wrapping around everything below within function
  

    }

    setBaseURL(url) {
        this.url = url;
    } 

    update() {
        this.codeScreen.open();
        this.codeScreen.write(this.editor.getValue());
        this.codeScreen.close();

        this.solution.checkUserSolution(this.editor.getValue());
    }

    initializeLesson(lesson_id) {
        this.lesson_id = parseInt(lesson_id);

        if(!this.hasMoreLessons){
            alert('no more lessons');
      
      
            //window location redirects
            window.location.replace(url);
            // braden's code: window.location.replace("http://www.final.test:8080");
      
            return;
        }

    
        this.togglePrevButton();


        this.fetchLessons();

        startTimer();

    }

    togglePrevButton(){
        if(this.lesson_id > 1){
            this.prev_button.classList.remove('hidden');
        } else {
            this.prev_button.classList.add('hidden');
        }
    }
    
    fetchLessons(){
        let self = this;
        fetch(this.url + '/api/lesson/' + this.lesson_id)
        //replace URL with "http://www.final.test:8080"
        .then(function(response){
          return response.json();
        })
        .then(function(json){
            console.log(json);
            document.getElementById('lesson-text').innerHTML = self.escapeHtml(json.lesson.description);
            if(json.last){
              self.hasMoreLessons = false;
            }

            self.solution = new Solution(json.lesson.solution);
            console.log(json.lesson.solution);
        });
      }
    
      escapeHtml(unsafe) {
        return unsafe
             .replace(/&/g, "&amp;")
             .replace(/</g, "&lt;")
             .replace(/>/g, "&gt;")
             .replace(/"/g, "&quot;")
             .replace(/'/g, "&#039;");
     }
    
}