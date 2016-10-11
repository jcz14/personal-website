function validate(form) {
  // prevent form from clearing after submit button is clicked
  event.preventDefault();
  
  // keep track of form validity
  var valid=true;
  
  // display alert message and set validity status to false if any field is left blank
  if(form.name.value=="") {
    alert("Please enter your name.");
    valid=false;
  }
  if(form.email.value=="") {
    alert("Please enter your email address.");
    valid=false;
  }
  if(form.message.value=="") {
    alert("Please type your message.");
    valid=false;
  }

  // if all fields have been filled out replace the form with a success message
  if(valid) {
    document.getElementById("form").style.display="none";
    document.getElementById("completionMessage").style.display="block";
  }
}
