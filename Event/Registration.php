<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    
    .form-wrapper {
      background-color: #fff;
      border-radius: 10px;
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      width: 400px;
    }
    
    .form-wrapper h2 {
      color: #333;
      margin-bottom: 20px;
      text-align: center;
    }
    
    .form-wrapper input[type="text"],
    .form-wrapper input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 2px solid #f9f9f9;
      margin-bottom: 20px;
      background-color: #f9f9f9;
      color: #333;
      transition: border-color 0.3s ease;
    }
    
    .form-wrapper input[type="text"]:focus,
    .form-wrapper input[type="password"]:focus {
      background-color: #fff;
      border-color: #007bff;
    }
    
    .form-wrapper input[type="text"].invalid,
    .form-wrapper input[type="password"].invalid {
      border-color: #ff0000;
    }
    
    .form-wrapper input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    .form-wrapper input[type="submit"]:hover {
      background-color: #0056b3;
    }
    
    .form-wrapper p {
      color: #333;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="form-wrapper">
    <h2>Registration</h2>
    <form action="#" method="POST" id="registration-form">
      <input type="text" name="first-name" id="first-name" placeholder="First Name" required>
      <input type="text" name="last-name" id="last-name" placeholder="Last Name" required>
      <input type="text" name="phone-number" id="phone-number" placeholder="Phone Number" required>
      <input type="email" name="email" id="email" placeholder="Email Address" required>
      <input type="password" name="password" id="password" placeholder="Password" required>
      <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required>
      <a href="login.html"></a> <input type="submit" value="Register"></a>
    </form>
  </div>
  
  <script>
    const formWrapper = document.querySelector('.form-wrapper');
    const registrationForm = document.querySelector('#registration-form');
    const firstNameInput = document.querySelector('#first-name');
    const lastNameInput = document.querySelector('#last-name');
    const phoneNumberInput = document.querySelector('#phone-number');
    const emailInput = document.querySelector('#email');
    const passwordInput = document.querySelector('#password');
    const confirmPasswordInput = document.querySelector('#confirm-password');

    registrationForm.addEventListener('submit', function(event) {
      event.preventDefault();

      // Perform validation
      let isValid = true;

      if (firstNameInput.value.trim() === '') {
        firstNameInput.classList.add('invalid');
        isValid = false;
      } else {
        firstNameInput.classList.remove('invalid');
      }

      if (lastNameInput.value.trim() === '') {
        lastNameInput.classList.add('invalid');
        isValid = false;
      } else {
        lastNameInput.classList.remove('invalid');
      }

      if (phoneNumberInput.value.trim() === '') {
        phoneNumberInput.classList.add('invalid');
        isValid = false;
      } else {
        phoneNumberInput.classList.remove('invalid');
      }

      if (emailInput.value.trim() === '' || !isValidEmail(emailInput.value.trim())) {
        emailInput.classList.add('invalid');
        isValid = false;
      } else {
        emailInput.classList.remove('invalid');
      }

      if (passwordInput.value.trim() === '') {
        passwordInput.classList.add('invalid');
        isValid = false;
      } else {
        passwordInput.classList.remove('invalid');
      }

      if (confirmPasswordInput.value.trim() === '' || confirmPasswordInput.value.trim() !== passwordInput.value.trim()) {
        confirmPasswordInput.classList.add('invalid');
        isValid = false;
      } else {
        confirmPasswordInput.classList.remove('invalid');
      }

      // If all fields are valid, submit the form
      if (isValid) {
        formWrapper.style.backgroundColor = '#ffcc00';
        registrationForm.reset();
      }
    });

    function isValidEmail(email) {
      // A simple email validation regex
      const emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
      return emailRegex.test(email);
    }
  </script>
</body>
</html>