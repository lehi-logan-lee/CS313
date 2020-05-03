document.getElementById("culculate").onclick = function() {return validateForm()};
document.getElementById("formid").onchange = function() {culculate()};
document.getElementById("clear").onclick = function() {reset()};
function culculate() {
   var apr = document.getElementById("apr").value;
   var term = document.getElementById("term").value;
   var amount = document.getElementById("amount").value;
   var monthlyPay = ((apr/100/12)*amount)/(1-(Math.pow((1+(apr/100/12)),term*(-12))));
   var num = monthlyPay.toFixed(2);
   document.getElementById("payment").innerHTML = ("Monthly Payment: " + num);
}

function validateForm() {
  var x = document.forms["myForm"]["aprName"].value;
  var y = document.forms["myForm"]["termName"].value;
  var z = document.forms["myForm"]["amountName"].value;
  if (x == "") {
    confirm("APR must be filled out");
    document.getElementById("apr").focus();
    return false;
  }
    else if (y == "") {
    confirm("Term must be filled!");
    document.getElementById("term").focus();
    return false;
  }
    else if (z == "" || isNaN(z)) {
    confirm("Amount must be filled with a number!");
    document.getElementById("amount").focus();
    return false;
  }
    else if (x > 25 || x <= 0 || isNaN(x)) {
    confirm("APR value must between 0 to 25.00");
    document.getElementById("apr").focus();
    return false;
  }
    else if (y >= 40 || y <= 0 || isNaN(y)) {
    confirm("Term must be > zero and less or equal to 40.");
    document.getElementById("term").focus();
    return false;
  }
    else {
    culculate();
    }
}

function reset() {
    document.getElementById("payment").innerHTML = ("");
    document.getElementById("apr").focus();
}