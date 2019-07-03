<?php
  include('header.php');
?>


  <div class="container-fluid">

    <?php
      $_SESSION["voornaam"] = "";
      $_SESSION["achternaam"] = "";
      $_SESSION["adres"] = "";
      $_SESSION["postcode"] = "";
      $_SESSION["email"] = "";

      if (!isset($_SESSION["email"])) {
          $_SESSION["voornaam"] = "";
          $_SESSION["achternaam"] = "";
          $_SESSION["adres"] = "";
          $_SESSION["postcode"] = "";
          $_SESSION["email"] = "";
      }

      if (isset($_POST["sendUser"])) {
          // variables to store in db
          $_SESSION["voornaam"] = (isset($_POST['voornaam'])) ? $_POST['voornaam'] : "";
          $_SESSION["achternaam"] = (isset($_POST['achternaam'])) ? $_POST['achternaam'] : "";
          $_SESSION["adres"] = (isset($_POST['adres'])) ? $_POST['adres'] : "";
          $_SESSION["postcode"] = (isset($_POST['postcode'])) ? $_POST['postcode'] : "";
          $_SESSION["email"] = (isset($_POST['email'])) ? $_POST['email'] : "";

          // check if email doesn't already excist in db
          $sql = "SELECT email FROM gebruiker WHERE `email` = ?";
          $stmt = $db->prepare($sql);
          $stmt->execute(array($_SESSION["email"]));
          $result = $stmt->fetch(PDO::FETCH_ASSOC);

          $query = "INSERT INTO gebruiker (voornaam, achternaam, adres, postcode, email) VALUES (?, ?, ?, ?, ?)";
          $stmt = $db->prepare($query);
          $stmt->execute(array($_SESSION["voornaam"], $_SESSION["achternaam"], $_SESSION["adres"], $_SESSION["postcode"], $_SESSION["email"]));
          include('forms/playerTypeForm.php');
      } elseif (isset($_POST["typePlayer"])) {
          $_SESSION["categorie"] = $_POST["typePlayer"];
          include('forms/gameTypeForm.php');
      } elseif (isset($_POST["typeGame"])) {
          $_SESSION["soort"] = $_POST["typeGame"];
          if ($_POST["typeGame"] == "Bordspellen") {
              include('forms/bordForm.php');
          } else if($_POST["typeGame"] == "Computer games") {
              include('forms/computerForm.php');
          }
      } elseif (isset($_POST["computerGame"]) || isset($_POST["bordGame"])) {
          if (isset($_POST["computerGame"])) {
              $_SESSION["game"] = $_POST["computerGame"];
          } else {
              $_SESSION["game"] = $_POST["bordGame"];
          }
          $email = $_SESSION["email"];
          $id_query = "SELECT id FROM gebruiker WHERE `email` = '$email'";
          $stmt = $db->prepare($id_query);
          $stmt->execute();
          $id = $stmt->fetch(PDO::FETCH_ASSOC);
          $id = implode("", $id);

          $query = "INSERT INTO spel (gebruikerID, categorie, soort, game) VALUES (?, ?, ?, ?)";
          $stmt = $db->prepare($query);
          $stmt->execute(array($id, $_SESSION["soort"], $_SESSION["categorie"], $_SESSION["game"]));

          echo "<script>location.href='inschrijvingGelukt.php';</script>";
      } else {
           include('forms/registerForm.php');
       }
    ?>
  </div>
  </body>
</html>
