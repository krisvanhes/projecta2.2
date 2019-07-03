<?php
  include('header.php');
?>
  <div class="container-fluid">

    <?php
    $error = "";
    include('forms/inlogForm.php');

    if(isset($_SESSION["ID"])){
      echo "<script>location.href='dashboard.php';</script>";
    }else{
      if (isset($_POST["sendLogin"])) {
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);

        try {
            $sql = "SELECT * FROM user WHERE email = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute(array($email));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $hash = $result["password"];
                if (password_verify($password, $hash)) {
                  echo 'haooooosadoads';
                    // $mijnSession = session_id();
                    $_SESSION["ID"] = session_id();
                    $_SESSION["USER"] = $result["email"];
                    $_SESSION["STATUS"] = 1;
                    echo "<script>location.href='dashboard.php';</script>";
                } else {
                    $error .= "Inloggegevens ongeldig";
                }
            } else {
                $error .= "Inloggegevens ongeldig";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
      }
    }
    ?>
  </div>
  </body>
</html>
