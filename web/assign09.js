function loadDoc() {

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("head").innerHTML = "Ten largest cities and their population";
    document.getElementById("demo").innerHTML = this.responseText;
    }
  };

  if(document.getElementById('us').checked) {
  xhttp.open("GET", "usa.txt", true);
  }
  else if(document.getElementById('mexico').checked) {
  xhttp.open("GET", "mexico.txt", true);  
  }
  else if(document.getElementById('canada').checked) {
  xhttp.open("GET", "canada.txt", true);  
  }
  else if(document.getElementById('russia').checked) {
  xhttp.open("GET", "russia.txt", true);  
  }
  xhttp.send();
}

function myFunction() {
  document.getElementById("myTB").innerHTML = "";
  document.getElementById("errors").innerHTML = "";
  var jsonStr = document.getElementById("lname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.status == 404) {
        document.getElementById("errors").innerHTML = "File doesn't exist";
        return false;
    }
    if (this.readyState == 4 && this.status == 200) {
        try {
        JSON.parse(this.responseText);
    } catch (e) {
        document.getElementById("errors").innerHTML = "It is not a JSON file";
        return false;
    }
    var obj = JSON.parse(this.responseText);

    for (var i = 0; i < obj.students.length; i++) {
    var table = "<tr><td>"+ obj.students[i].first + " " + obj.students[i].last + 
    "</td><td>" + obj.students[i].address.city + " " + obj.students[i].address.state+ " " + obj.students[i].address.zip + 
    "</td><td>" + obj.students[i].major +
    "</td><td>"+obj.students[i].gpa+"</td></tr>";
    document.getElementById("myTB").innerHTML += table;
    }
  }
    };    
    xhttp.open("GET", jsonStr, true);
    xhttp.send();
}
