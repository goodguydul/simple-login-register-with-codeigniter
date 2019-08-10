<body>
<div class="wrapper fadeInDown">
  <h1 class="bighead">Login</h1>
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?php echo base_url();?>lib/img/user.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="<?php echo base_url();?>login/loginaction" method="POST">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="email" required>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" style="display: inline-block;" href="<?php echo base_url();?>register">Register - </a>
      <a class="underlineHover" style="display: inline-block;" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
