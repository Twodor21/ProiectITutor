document.getElementById("title").innerHTML="Tema 6 JS";
var person = { 
	firstName: "Tudor",
	lastName: "Popa",
	age: 27,
	fullName: function(){
		return this.firstName+" "+this.lastName;
	}};
document.getElementById("name").innerHTML="Hello! My full name is "+
	person.fullName();
var txt = "\"We will test string methods on this text.\"";
document.getElementById("text").innerHTML = "The length of "+
	txt+" is "+txt.length;
function f1(){
	document.getElementById("text").innerHTML = txt.indexOf("string");
}
function f2(){
	document.getElementById("text").innerHTML = txt.slice(3,8);
}
function f3(){
	document.getElementById("text").innerHTML = txt.replace("text", "paragraph");
}
function f4(){
	var txt2 = document.getElementById("split").innerHTML;
	var arr = txt2.split(",");
	document.getElementById("split").innerHTML="";
	for(i=0;i<arr.length;i++)
		document.getElementById("split").innerHTML += arr[i]+"<br />";
}