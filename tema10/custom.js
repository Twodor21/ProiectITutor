var v1 = document.getElementById("p1");

for(i=5;i<=15;i+=2)
	v1.innerHTML += i + " ";

var person = {fname:"John", lname:"Doe", age:25};

var text1 = "";
var x;
for (x in person) {
  text1 += person[x]+" ";
}
function IdOutput(par){
	return document.getElementById(par);
}

IdOutput("p2").innerHTML= text1;

var cars = ['BMW', 'Volvo', 'Mini'];
var x;

var text2 = "";
for (x of cars) {
  text2 += (x + "<br >");
}
IdOutput("p3").innerHTML= text2;

var txt1 = 'JavaScript';
var txt2 = "";
for (y of txt1) {
  txt2 += y + "<br >";
}
IdOutput("p4").innerHTML= txt2;

var text3 = "";
for (i = 0; i < 10; i++) {
  if ((i%2)!= 0) { continue; }
  text3 += "The number is " + i + "<br>";
}
IdOutput("p5").innerHTML = text3;

var txt3="";
for (i = 0; i < 10; i++) {
  txt3 += i+" ";
  if (i == 5) {   
    	break;
  }
}
IdOutput("p6").innerHTML = txt3;
var t = function (){}.constructor;
IdOutput("p7").innerHTML = t;

var myDate = new Date();
document.getElementById("p8").innerHTML = isDate(myDate);
function isDate(myDate) {
  return myDate.constructor === Date;
}

try{
	NoExistingFunction();
}
catch(err){
	IdOutput("p9").innerHTML= 
		" try{} catch(err){} blocks catched this error: "+err.message;
}
finally{
	IdOutput("p9").innerHTML += "<br/>This code is from <b>finally</b> block.";
}
try{
	throw "Random error";
}
catch(err){
	IdOutput("p10").innerHTML= " We have thrown this error: "+err;
}

var person = {
  firstName: "Tudor",
  lastName : "Popa",
  id     : 21,
  fullName : function() {
    return this.firstName + " " + this.lastName;
  }
};
IdOutput("p11").innerHTML =
	 "Using \"this keyword\" the person full name is: "
	 + person.fullName();

var person1 = {
  fullName: function() {
    return this.firstName + " " + this.lastName;
  }
}
var person2 = {
  firstName:"Mitica",
  lastName: "Dragomir"
}
IdOutput("p12").innerHTML = 
	" Using person1.fullName.call(person2) : "
	+ person1.fullName.call(person2);