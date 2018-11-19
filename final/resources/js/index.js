import Split from 'split.js';

if(document.querySelector('#box-left')){
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

