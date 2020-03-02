document.getElementById("h1").innerHTML = "<h1>JS 8</h1>";
var d = new Date();
document.getElementById("p1").innerHTML = d;
d=new Date(2018,11,24);
document.write(d+"<br />");
document.write(d.toUTCString()+"<br />");
document.write(d.toDateString()+"<br />");
document.write("<h3>JS Date Formats</h3>");
d = new Date("2015-03-25");
document.write(d+"<br />");
var msec = Date.parse("March 21, 2012");
d = new Date(msec);
document.write(d+"<br />");
document.write("<h3>JS Date Get Methods</h3>");
d = new Date();
document.write((d.getMonth()+1)+"-"+d.getDate()+"-"+d.getFullYear());
document.write("<h3>JS Date Set Methods</h3>");
document.write("The date in 50 days will be: ");
d.setDate(d.getDate()+50);
document.write(d.toDateString());
var today, someday, text;
today = new Date();
someday = new Date();
someday.setFullYear(2025, 0, 14);

if (someday > today) {
  text = "<p>Today is before January 14, 2025.</p>";
} else {
  text = "<p>Today is after January 14, 2025.</p>";
}
document.write(text);
document.write("<h3>JS Math Objects</h3>");
document.write("Math.PI will return "+Math.PI);
document.write("<br />Math.round(4.7); will return "+Math.round(4.7));
document.write("<br />Math.round(4.4); will return "+Math.round(4.4));
document.write("<br />Math.pow(4,2); will return "+Math.pow(4,2));
var o = Math.random();
document.write("<br />Math.random(); will return "+ o);
document.write(" but Math.floor(Math.random()*100) -> "+Math.floor(o*100));