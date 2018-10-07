var scripts= document.getElementsByTagName('script');
var path= scripts[scripts.length-1].src.split('?')[0];      // remove any ?query
var mydir= path.split('/').slice(0, -1).join('/')+'/';  // remove last filename part of path

console.log(mydir);

var files = readdirSync("mydir/../images/");

var colClass = "col-md-2"

var i = 0;
while (i < files.length) {
  document.write("<div class='" + colClass  + "' >");
  document.write("<img src=images/" + files[i]);
  document.write("</div>");
  console.log(i + " " + files[i]);
  i++;
}
