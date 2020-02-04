function hello(){
	setTimeout(fc2,5000);
}
function fc2(){
	alert("Hello and welcome to my page!");
}
hello();

var cars = ["Volvo","BMW","Mercedes"];
document.getElementById("demo2").innerHTML="The first element in \"cars\" array is "+
	cars[0]+" and the typeof cars is "+ typeof(cars);

var person={
	firstName : "Tudor",
	lastName: "Popa",
	age: 27,
	eyeColor: "brown"
};
document.getElementById("demo1").innerHTML="The persons name is "+person.firstName+
	" his age is "+person.age+" and his eyeColor is "+person.eyeColor+
	" and typeof person is "+ typeof(person);

function myFunction(p1, p2) {
  return p1 * p2;   // The function returns the product of p1 and p2
}
document.getElementById("sp1").innerHTML= myFunction(3,2);