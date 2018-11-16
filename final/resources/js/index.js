import Split from 'split.js';

Split(['#box-left', '#box-mid', '#box-right'], {
  sizes: [33.3, 33.4, 33.3],
  minSize: 200,
  gutterSize: 5
});
console.log("hello, index");

require("./editor.js");
require("./timer.js");