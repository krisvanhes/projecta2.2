
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4" id="form">

    <h1>Show no Mercy</h1>
    <h5> Vul hier jou gegevens in</h5>
    <form class="" action="" method="post" id="registerForm" name="registerForm">
      <div class="row">
        <div class="col-md-3">
          <span>Voornaam</span>
        </div>
        <div class="col-md-9">
          <input class="form-register col-md-9" type="text" name="voornaam" value="<?php echo $_SESSION['voornaam']; ?>" placeholder="Harry" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <span>Achternaam</span>
        </div>
        <div class="col-md-9">
          <input class="form-register col-md-9" type="text" name="achternaam" value="<?php echo $_SESSION['achternaam']; ?>" placeholder="de Vries" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <span>Adres</span>
        </div>
        <div class="col-md-9">
          <input class="form-register col-md-9" type="text" name="adres" value="<?php echo $_SESSION['adres']; ?>" placeholder="Hoofdstraat 12" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <span>Postcode</span>
        </div>
        <div class="col-md-9">
          <input class="form-register col-md-9" type="text" name="postcode" value="<?php echo $_SESSION['postcode']; ?>" placeholder="1234AB" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <span>E-mail</span>
        </div>
        <div class="col-md-9">
          <input class="form-register col-md-9" type="email" name="email" value="<?php echo $_SESSION['email']; ?>" placeholder="jouw@e-mail.com" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <a href='inloggen.php' style="color:#000;">&crarr; Inloggen</a>
        </div>
        <div class="col-md-6">
          <input class="form-register submitButton" type="submit" name="sendUser" value="Verzenden &rarr;" style="">
        </div>
      </div>

      <div class="col-md-12"><br></div>
    </form>
  </div>
  <div class="col-md-4"></div>
</div>

<marquee behavior="scroll" direction="right" style="margin-left:-15px; margin-top:-300px; z-index:-1;" scrollamount="<?php echo rand(1,10);?>">
    <img src="img/bg/cloud.png" width="120" height="80" alt="Mario cloud">
</marquee>
<marquee behavior="scroll" direction="left" style="margin-right:-15px; z-index:-1;" scrollamount="<?php echo rand(1,10);?>">
    <img src="img/bg/cloud.png" width="120" height="80" alt="Mario cloud">
</marquee>

<style media="screen">
  .col-md-9 > input[type=text], .col-md-9 > input[type=email] {
    margin-bottom: 5px;
  }
</style>
