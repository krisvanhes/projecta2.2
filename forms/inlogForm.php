<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4" id="form">
    <h1>Show no Mercy</h1>
    <h5>Admin login</h5>
    <form class="" action="" method="post" id="inlogForm" name="inlogForm">
      <div class="row">
        <div class="col-md-3">
          <span>Email</span>
        </div>
        <div class="col-md-9">
          <input class="form-register col-md-9" type="email" name="email" value="<?php echo $_SESSION['voornaam']; ?>" placeholder="Harry" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <span>Wachtwoord</span>
        </div>
        <div class="col-md-9">
          <input class="form-register col-md-9" type="password" name="password" placeholder="*********" required style="font-family:arial;">
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <a href='index.php' style="color:#000;">&crarr; Homepagina</a>
        </div>
        <div class="col-md-6">
          <input class="form-register submitButton" type="submit" name="sendLogin" value="Inloggen &rarr;" style="">
        </div>
      </div>

      <div class="col-md-12"><br><?php echo $error ?></div>
    </form>
  </div>
  <div class="col-md-4"></div>
</div>

<style media="screen">
  .col-md-9 > input[type=email], .col-md-9 > input[type=password]{
    margin-bottom: 5px;
  }
</style>
