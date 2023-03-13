<?php
include_once APPROOT . '/views/Includes/header.php';
?>


  <div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class= 'message'> 
        Nog geen account? <a href="<?= URLROOT ?>/register/register">Meld je aan!</a>
       </p>
    </form>
  </div>
</div>
</body>
  
