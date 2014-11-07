
var body;
var targets;
var titles;
var objectTitles;

function init() {
  objectTitles = [{
	{"title1",100,100},{"title1",200,100},{"title1",100,200},
	{"title1",200,200},{"title1",300,100},{"title1",100,300},
	{"title1",300,300}}];
	body =  document.getElementById("body");
  divMain = document.createElement("div");
  divMain.setAttribute("id", "stage");
  body.appendChild(divMain);
  loadXML();
  console.log("Little Meow >>>>> ");
}



