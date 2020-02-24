var x= 5+10;
var z= x.toString();
var y = "To String method: ";
document.getElementById("p1").innerHTML=y+"<b>"+z+"</b>";
x=9.656;
document.getElementById("sp1").innerHTML=x.toFixed(0);
document.getElementById("sp2").innerHTML=x.toFixed(4);

y = "10 now";
document.write('parseInt("10 now"); is '+parseInt(y));
document.write("<br /><br />Arrays");
var array = ["indx0","indx1","indx2"];
for(i=0;i<array.length;i++)
	document.write("<br />"+array[i]);

for(i=3;i<11;i++)
	array[i] = "indx"+i;

document.write("<p>The full array is now: ")
for(i=0;i<array.length;i++)
	document.write("<br />"+array[i]);
document.write("</p>");
document.write("The second last item in the array is: ");
document.write(array[array.length-2]);

var text;

text = "<ul>";
for(i=0;i<array.length;i++)
	text += "<li>"+array[i]+"</li>";
text +="</ul>";
document.write(text);

for(i=0;i<array.length;i++)
	array[i] = "array["+i+"]";
text="<p><ul>";
array.forEach(addValue);
text+="</ul></p>";
document.write(text);
function addValue(value){
	text += "<li>"+value+"</li>";
}

document.write("<p>Adding elemets to an Array with array.push(\"value\");</p>");
array.push("array["+array.length+"]");
document.write("<p>The last element of the array is "+array[array.length-1]+"</p>");
document.write("<p>Removing elemets to an Array with array.pop();</p>");
array.pop();
document.write("<p>The last element of the array is "+array[array.length-1]+"</p>");
document.write("<p>Removing the first element from an Array with array.shift();</p>");
array.shift();
document.write("<p>The first element of the array is "+array[0]+"</p>");
document.write("<p>Adding elemets at the begining of an Array with array.unshift(\"value\");</p>");
array.unshift("array[0]");
document.write("<p>The first element of the array is "+array[0]+"</p>");
document.write("<p>Deleting elemets to an Array with delete array[\"index\"];</p>");
delete array[4];
document.write("<p>The value of the array[4] is "+array[4]+"</p>");
array.reverse();
document.write("<p>The array sorted descending <br />"+array+"</p>");