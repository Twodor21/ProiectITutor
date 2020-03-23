
var y=5;
for(var y=0;y<10;y++)
{}
document.write("Declared and redeclared with 'var':<br/>"+y);

let j=5;
for (let j=0;j<10;j++) 
{}
document.write("<br/>Declared and redeclared with 'let':<br/>"+j);

const PI = 3.14;
document.write("<p>Constant PI is: "+PI+"</p>");

const car = {type:"BMW", model:"M4"};
car.owner = "Tudor";
car.type = "Mercedes-Benz";
document.write("<p>The car.owner value is: "+
	car.owner+" and the car.type is: "+car.type+"</p>");
const cars = ["BMW","Mercedes-Benz","Audi"];
cars[0]="B-M-W";
document.write("<p>cars[0] is changed to: "+cars[0]+"</p>");

function1 = () =>{
  return "This is an arrow function return message";
}
hello = () => "Hello World from an arrow function";

hello2 = par1 => "Hello "+par1;

document.write(function1());
document.write("<p>"+hello()+"</p>");
document.write("<p>"+hello2("\"parameter\"")+"</p>");

class Chef{
  constructor(par2){
    this.ChefName= par2;
  }
  Breakfast(){
    return "The Chef is cooking Breakfast";
  }
  Lunch(par3){
    return "The Chef is cooking "+par3+" for Lunch ";
  }
}

Mario = new Chef("Mario");
document.write("The Chef name is: "+Mario.ChefName+" and "+
		Mario.Breakfast()+" and "+Mario.Lunch("Calamares"));
var txt="";
class Greeting{
	constructor(Name){
		txt = Name;
	}
	static greet(){
		return "<p>Welcome "+txt+"</p>";
	}
}
obj1 = new Greeting("Valeri");

document.write(Greeting.greet());

class Carr{
	constructor(brand){
	  this.carName = brand;
	}
	static hello(x){
	  return "Hello "+ x.carName;
	}
}
myCar = new Carr("Mustang");
document.write(Carr.hello(myCar));

class ItalianChef extends Chef{
	constructor(name,par2){
	  super(par2);
	  this.Name=name;
	}
	specialDish(){
	  return "Pasta con chicken Alfredo!";
	}
}
chef2 = new ItalianChef("Giovanni","M.");
document.write("<p>The Italian Chef's name is: "+chef2.Name+
		" and "+chef2.Lunch("Pasta Loca")+"and it's special dish is "+
		chef2.specialDish()+"</p>");

class vehicul{
	constructor(){
	  this._model = "";
	}
	get model(){
	  return this._model;
	}
	set model(x){
	  this._model = x;
	}
}

veh1 = new vehicul();
veh1.model = "volvo"; 
document.write("Using get Method we received: " + veh1.model);


var a = 5, b = 6, z = a + b;
debugger;
console.log(z);

