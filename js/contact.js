function validate(form) {
  if(form.name.value=="") {
    alert("Please enter your name.");
    valid = false;
  }
  if(form.email.value=="") {
    alert("Please enter your email address.");
    valid = false;
  }
  if(form.message.value=="") {
    alert("Please type your message.");
    valid = false;
  }
}
