// Get Date
var d = new Date();
var month;
var suffix;
switch (d.getMonth()) {
  case 0:
    month = "January";
    break;
  case 1:
    month = "February";
    break;
  case 2:
    month = "March";
    break;
  case 3:
    month = "April";
    break;
  case 4:
    month = "May";
    break;
  case 5:
    month = "June";
    break;
  case 6:
    month = "July";
    break;
  case 7:
    month = "August";
    break;
  case 8:
    month = "September";
    break;
  case 9:
    month = "October";
    break;
  case 10:
    month = "November";
    break;
  case 11:
    month = "December";
}

if(d.getDate() % 10 == 1 && d.getDate != 11){
  suffix = "st"
}
else if(d.getDate() % 10 == 2 && d.getDate != 12){
  suffix = "nd"
}
else if(d.getDate() % 10 == 3 && d.getDate != 13){
  suffix = "rd"
}
else{
  suffix = "th"
}

document.getElementById("loginDate").innerHTML = d.getDate() + suffix + " " + month + " " + d.getFullYear();
// Get Date

// Get Day
var day;
switch (d.getDay()) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
    day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4:
    day = "Thursday";
    break;
  case 5:
    day = "Friday";
    break;
  case  6:
    day = "Saturday";
}
document.getElementById("loginDay").innerHTML = day + "!";
// Get Day