//require('ace/ext/language_tools');
//require('ace/multi_select');

//var editor = ace.edit('propertiesText');
//editor.getSession().setMode('ace/mode/properties');
import swal from 'sweetalert';
var langTools = ace.require('ace/ext/language_tools');


function update() {
    var codeScreen = document.getElementById('editorIframe').contentWindow.document;

    codeScreen.open();
    codeScreen.write(editor.getValue());
    codeScreen.close();
    
}

var lesson1Solution = "<!DOCTYPE html><html><head></head><body><h1>Hello world</h1></body></html>";


function trimSpaces(str) {
    return str.replace(/\s+/g, '');
}

function setupEditor() {
    window.editor = ace.edit("editor");
    editor.setTheme("ace/theme/terminal");
    editor.getSession().setMode("ace/mode/html");
    editor.setValue(`<!DOCTYPE html>
    <html>
      <head>
      </head>
    
      <body>
      </body>
    
    </html>`, 1);

    /*editor.getSession().on('change', function () {
        update();
        validateLesson1();

    }); */

    editor.focus();


    editor.setOptions({
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

    editor.setShowPrintMargin(true);
    editor.setBehavioursEnabled(true);



    
    editor.on('change', function(e){        
        update();
        validateLesson1();    })  
}


function validateLesson1(){
    let lesson1 = editor.getValue();    
    console.log(lesson1);
    console.log(lesson1Solution);
    if(trimSpaces(lesson1.toLowerCase()) == trimSpaces(lesson1Solution.toLocaleLowerCase())) {
        swal("YOU SOLVED THE EXERCISE!");
    }
}



//lesson1 write a h1 headline with hello world


/*var staticWordCompleter = {
    getCompletions: function(editor, session, pos, prefix, callback) {
        var wordList = ["foo", "bar", "baz"];
        callback(null, wordList.map(function(word) {
            return {
                caption: word,
                value: word,
                meta: "static"
            };
        }));

    }
} */

// or 
//editor.completers = [staticWordCompleter] 

/* editor.completers.push({
    getCompletions: function(editor, session, pos, prefix, callback) {
      callback(null, [
        {value: "foo", score: 1000, meta: "custom"},
        {value: "bar", score: 1000, meta: "custom"}
      ]);
    }
  }) */



setupEditor();
update();