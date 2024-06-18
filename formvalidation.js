var form = document.getElementById("loginform")

form.addEventListener("submit", function (event) {
  event.preventDefault(); // Prevent form submission

  // Retrieve input field values
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  // Email validation pattern
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // Check if email is valid
  if (!emailPattern.test(email)) {
    document.getElementById("ers").innerHTML = "<p>No email</p>";
    return;
  }

  // Check if password is not empty
  if (password.length === 0) {
    alert("Please enter your password.");
    return;
  }

  // If all validations pass, proceed with login
  // You can perform additional actions here, like sending an AJAX request to a server for authentication.
  alert("Login successful!");
  // Alternatively, you can redirect the user to a different page using:
  window.location.href = "home.html";
});






