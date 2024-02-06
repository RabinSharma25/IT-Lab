/*
Here we will validate the following things
1. User must re-enter the password
2. Password must be atleast 5 characters long
3. Name must atleast contain 3 characters 

*/

function validateform() {
  var name = document.myform.nam.value;
  var password1 = document.myform.pass1.value;
  var password2 = document.myform.pass1.value;
  var email = document.myform.mail.value;

  if (name == null || name == "") {
    alert("Name can't be blank");
    return false;
  }
  else if (name.length < 3) {
    alert("Name must atleast contain 3 characters");
    return false;
  }

  else if (password1.length < 6) {
    alert("Password must be at least 6 characters long.");
    return false;
  }
  else if (password1 != password2) {
    alert("Please re-enter the password correctly");
    return false;
  }

  else {
    alert("Successfully registered");
    return true;
  }
} 
