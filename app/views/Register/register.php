<?php
include_once APPROOT . '/views/Includes/header.php';
?>



<body>
  <div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" name= "username" placeholder="name"/>
      <input type="password" name= "password" placeholder="password"/>
      <input type="text" name= "email" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="Username"/>
      <input type="password" placeholder="Password"/>
      <input type="email" placeholder="E-mail"/>
      <button>Register</button>
      <p class="message">Not registered? <a href="">Maak een account!</a></p>
    </form>
  </div>
</div>
</body>
  
