<?php
include('partials/header.php');
?>

<style>
  .block{
    width: 100%;
    height: 103px;
  }
  </style>

<main class="d-flex align-items-center justify-content-center">
  <section section class="container mt-3 pb-3" id="contact-form">
    <div class="row">
      <div class="col-100">
        <h3 class="text-center">Registration</h1>
          <form action="inc/login/register.php" method="post">
            <div class="form-input">
              <label for="name" class="label">Name</label><br>
              <input type="text" name="user_name" placeholder="Your name" class="input">
              <small class="form-error-feedback"></small>
            </div>
            <div class="form-input">
              <label for="email" class="label">E-mail</label><br>
              <input type="email" name="user_email" placeholder="Your email" class="input">
              <small class="form-error-feedback"></small>
            </div>
            <div class="form-input">
              <label for="passowrd" class="label">Password</label><br>
              <input type="password" name="user_password" placeholder="Password" class="input">
              <small class="form-error-feedback"></small>
            </div>
            <input type="submit" value="Registration" name="add_user" id="form-btn">
          </form>
          <br>
          <p>You already have an account? <a href="login.php">Log in</a></p>
      </div>
    </div>
  </section>
</main>
<div class="block"></div>
<?php
include('partials/footer.php');
?>