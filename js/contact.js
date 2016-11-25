function validate(form) {
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
}
