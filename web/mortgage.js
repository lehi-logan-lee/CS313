function validateForm() {
  var x = document.forms["myForm"]["aprName"].value;
  var y = document.forms["myForm"]["termName"].value;
  var z = document.forms["myForm"]["amountName"].value;
  if (x == "") {
    document.getElementById("payment").innerHTML = ("APR must be filled out");
    document.getElementById("apr").focus();
    return false;
  }
    else if (y == "") {
    document.getElementById("payment").innerHTML = ("Term must be filled!");
    document.getElementById("term").focus();
    return false;
  }
    else if (z == "" || isNaN(z)) {
    document.getElementById("payment").innerHTML = ("Amount must be filled with a number!");
    document.getElementById("amount").focus();
    return false;
  }
    else if (x > 25 || x <= 0 || isNaN(x)) {
    document.getElementById("payment").innerHTML = ("APR value must between 0 to 25.00");
    document.getElementById("apr").focus();
    return false;
  }
    else if (y >= 40 || y <= 0 || isNaN(y)) {
    document.getElementById("payment").innerHTML = ("Term must be > zero and less or equal to 40.");
    document.getElementById("term").focus();
    return false;
  }

}

function reset1() {
    document.getElementById("payment").innerHTML = ("");
    document.getElementById("apr").focus();
}