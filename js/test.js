/*var scripts= document.getElementsByTagName('script');
var path= scripts[scripts.length-1].src.split('?')[0];      // remove any ?query
var mydir= path.split('/').slice(0, -1).join('/')+'/';  // remove last filename part of path*/
var fs = require('fs');
var files = fs.readdirSync("C:/Users/Noah/Google Drive/Files/School/WMU/2018-3 Fall/CS3500/Project/herecomestreblewmu/images/");

var i = 0;

while (i < files.length) {
  console.log(i + " " + files[i]);
  i++;
}
