const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const successMsg = document.getElementById("success-msg");

form.addEventListener("submit", (e) => {
   e.preventDefault();
   checkInput();
});

function checkInput() {
   const usernameInput = username.value.trim();
   const emailInput = email.value.trim();
   let counter = 0;

   if (usernameInput === "") {
      errorMessageFor(username, "Field can not be empty!");
   } else {
      successMessageFor(username);
      counter++;
   }

   if (emailInput === "") {
      errorMessageFor(email, "Field can not be empty!");
   } else if (!isEmail(emailInput)) {
      errorMessageFor(email, "Invalid email format");
   } else {
      successMessageFor(email);
      counter++;
   }


   if (counter == 4) {
      successMsg.style.display = "block";
      successMsg.style.color = "#4cb944";
      successMsg.innerHTML = "Message Sent Successfully!";
   } else {
      successMsg.style.display = "block";
      successMsg.style.color = "#bb0a21";
      successMsg.innerHTML = "Opss! Something went wrong!";
   }
}

function errorMessageFor(input, message) {
   const formControl = input.parentElement;
   const small = formControl.querySelector(".small");

   small.innerHTML = message;

   formControl.className = "form-control error";
}

function successMessageFor(input) {
   const formControl = input.parentElement;
   formControl.className = "form-control success";
}

function isEmail(email) {
   return /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/.test(
      email
   );
}