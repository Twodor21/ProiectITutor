function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}
function OutputRandom(){
	var minNR = document.getElementById("min").value;
	var maxNR = document.getElementById("max").value;
	if(minNR==""||maxNR==""){
		document.getElementById("random").innerHTML = "<br/> You must fill both fields!";
	}else if(isNaN(minNR)||isNaN(maxNR)){
		document.getElementById("random").innerHTML = "<br/> The inputs must be Numbers!";
	}else{
		document.getElementById("random").innerHTML = "<br/> "+getRndInteger(Number(minNR),parseInt(maxNR));
	}
}
function DayCheck(){
	var day = new Date();
	var WeekDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
	var dayValue = 	document.getElementById("day").value;
	if(dayValue!=WeekDays[0] && dayValue!=WeekDays[1] && 
		dayValue!=WeekDays[2] && dayValue!=WeekDays[3] && dayValue!=WeekDays[4] && 
		dayValue!=WeekDays[5] && dayValue!=WeekDays[6]){
		document.getElementById("bool").innerHTML = " Type the day correctly! (e.g. Monday)";
	}else if(dayValue==WeekDays[day.getDay()]){
		document.getElementById("bool").innerHTML = " " +
			Boolean(dayValue == WeekDays[day.getDay()]);
			switch (day.getDay()) {
				case 1:
				case 2:
					document.getElementById("bool").innerHTML += 
						"<br/> It's the begining of the week :(";
				case 3:
					document.getElementById("bool").innerHTML += 
						"<br/> It's the middle of the week :|";
				case 4:
				case 5:
					text = "Soon it is Weekend :)";
				break;
				case 0:
				case 6:
					document.getElementById("bool").innerHTML += 
						"<br/>It is Weekend :D";
				break;
				default:
					document.getElementById("bool").innerHTML += 
						"<br/>Something went wrong!";
			}
	}else{
		document.getElementById("bool").innerHTML = " "+
			Boolean(dayValue == WeekDays[day.getDay()])+". Keep Trying!";
	}
}