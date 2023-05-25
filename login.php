

  <?php
    include('partials/header.php');
  ?>

  <style>
  .block{
    width: 100%;
    height: 157px;
  }
  </style>

  <main>
    <section class="container">
      <div class="row">
      <div class="col-100">  
          <h1>Prihlásenie</h1>
          <form action="inc/login/login.php" method="post">
            <input type="email" name="user_email" placeholder="Váš email"><br>
            <br>
            <input type="password" name="user_password" placeholder="Vaše heslo"><br>
            <br>
            <input type="submit" value="Prihlásiť sa" name="log_user">
          </form>
          <br>
          <p>Nemáte účet? <a href="register.php">Registrujte sa</a></p>
        </div>
      </div>
    </section>
  </main>
  <div class="block"></div>
  <?php
    include('partials/footer.php');
  ?>