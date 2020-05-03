
function loadMassage() {
  document.getElementById("demo").innerHTML = "Welcome! The page successfully loaded!";
}

function checkboxes(){
    var inputElems = document.getElementsByTagName("input");
    count = 0;
    for (var i=0; i<inputElems.length; i++) {
    if (inputElems[i].type == "checkbox" && inputElems[i].checked == true){
        count++;
    }
}
     document.getElementById("TotalField").innerHTML = ("Total item checked: " + count);
     document.getElementById("demo2").innerHTML = ("Total Price: " + count);     
}

function validateForm() {
  var x = document.forms["myForm"]["first_name"].value;
  var y = document.forms["myForm"]["last_name"].value;
  var z = document.forms["myForm"]["address"].value;
  var a = document.forms["myForm"]["phone"].value;
  var b = document.forms["myForm"]["credit_card"].value;
  var c = document.forms["myForm"]["exp_date"].value;  
  if (x == "") {
    document.getElementById("demo").innerHTML = "Form must be filled";
    document.getElementById("first").focus();
    return false;
  }
    else if (y == "") {
    document.getElementById("demo").innerHTML = "Form must be filled";
    document.getElementById("last").focus();
    return false;
  }
    else if (z == "") {
    document.getElementById("demo").innerHTML = "Form must be filled";
    document.getElementById("addr").focus();
    return false;
  }
  phonenumber(a);
  ValidateCreditCardNumber(b);
  expireDate(c);   
}

function phonenumber(inputtxt)
{
  var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  if((inputtxt.value.match(phoneno)))
        {
      return true;
        }
      else
        {
        document.getElementById("demo").innerHTML = "require 10 digits must be of the format 208-497-3657.";
        document.getElementById("pho").focus();
        return false;
        }
}

function ValidateCreditCardNumber(num) {
  var ccNum = num;
  //var ccNum = document.getElementById("creditCard").value;
  var numberOfDigits = Math.floor(Math.log(num) / Math.LN10 + 1);
  var isValid = false;

  if(numberOfDigits == 16) {
    isValid = true;
  } 

  if(isValid) {
     return true;
  } else {
    document.getElementById("demo").innerHTML = "Credit card number must be 16 digits.";
        document.getElementById("creditCard").focus();
     return false;
  }
}

function expireDate(input)
{
  var exDate = /^((0[1-9])|(1[0-2]))\/(\d{4})$/;

  if((input.value.match(exDate)))
        {
      return true;
        }
      else
        {
        document.getElementById("demo").innerHTML = "Expire date is not correct.";
        document.getElementById("exp_date").focus();
        return false;
        }
}

function reset1() {
    var test = document.getElementsByClassName("className");
    test[0].innerHTML = "";
    document.getElementById("demo").innerHTML = "";
    document.getElementById("demo2").innerHTML = "";
    document.getElementById("first").focus();
}

function submitNote() {
   document.getElementById("demo2").innerHTML = "Congrats! The form successfully submitted!";
}