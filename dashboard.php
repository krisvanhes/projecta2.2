<?php
  include('header.php');
  if(isset($_SESSION["USER"]) && $_SESSION["STATUS"] == 1){
?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10" id="form">
        <h1>Admin dashboard</h1>
        <h5>Kies een filter om een lijst te selecteren</h5>
        <div class="row">
          <div class="col-md-4">
            <form method="post">
              <br><span>Type speler</span>
              <select name="filter" class="custom-select" id="filter" onchange="this.form.submit()">
                <option value="none">Kies een filter</option>
                <option value="Alleen">Alleen spelen</option>
                <option value="Fysiek samen">Fysiek samen</option>
                <option value="Online samen">Online samen</option>
              </select>
            </form>
          </div>

          <div class="col-md-4">
            <form method="post">
              <br><span>Type spel</span>
              <select name="typespel" class="custom-select" id="filter" onchange="this.form.submit()">
                <option value="none">Kies een filter</option>
                <option value="Bordspellen">Bordspellen</option>
                <option value="Computer games">Computer games</option>
              </select>
            </form>
          </div>

          <div class="col-md-4">
            <form method="post">
              <br><span>Specifiek spel</span>
              <select name="spel" class="custom-select" id="filter" onchange="this.form.submit()">
                <option value="none">Kies een filter</option>
                <option value="Kaartspellen">Kaartspellen</option>
                <option value="Strategische bordspellen">Strategische bordspellen</option>
                <option value="Fantasy bordspellen">Fantasy bordspellen</option>
                <option value="Klassieke gezelschapsspellen">Klassieke gezelschapsspellen</option>
                <option value="Sportgames">Sportgames</option>
                <option value="Adventure">Adventure</option>
                <option value="Wargames">Wargames</option>
                <option value="Strategische games">Strategische games</option>
              </select>
            </form>
          </div>
        </div>

        <button class="btn" style="float:right;" onclick="exportTableToCSV('Lijst.csv')">Download lijst</button>
        <br><br>
        <?php
          if(isset($_POST["filter"])){
            $sql = "SELECT * FROM gebruiker INNER JOIN spel WHERE spel.gebruikerID = gebruiker.id AND spel.soort = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute(array($_POST["filter"]));
          }

          else if(isset($_POST["typespel"])){
            $sql = "SELECT * FROM gebruiker INNER JOIN spel WHERE spel.gebruikerID = gebruiker.id AND spel.categorie = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute(array($_POST["typespel"]));
          }
          else if(isset($_POST["spel"])){
            $sql = "SELECT * FROM gebruiker INNER JOIN spel WHERE spel.gebruikerID = gebruiker.id AND spel.game = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute(array($_POST["spel"]));
          }
          else {
              $sql = "SELECT * FROM gebruiker INNER JOIN spel WHERE spel.gebruikerID = gebruiker.id";
              $stmt = $db->prepare($sql);
              $stmt->execute();
          }

          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if(count($result) >= 1){
            echo "<table class='table table-hover table-responsive'><thead><tr><th>Voornaam</th><th>Achternaam</th><th>Adres</th><th>Postcode</th><th>Email</th><th>Soort spel</th><th>Soort speler</th><th>Spel</th></tr></thead><body>";
            foreach ($result as $result) {
                echo "<tr><td>" . $result["voornaam"] . "</td>";
                echo "<td>" . $result["achternaam"] . "</td>";
                echo "<td>" . $result["adres"] . "</td>";
                echo "<td>" . $result["postcode"] . "</td>";
                echo "<td>" . $result["email"] . "</td>";
                echo "<td>" . $result["categorie"] . "</td>";
                echo "<td>" . $result["game"] . "</td>";
                echo "<td>" . $result["soort"] . "</td>";
                echo "</tr>";
            }
          echo "</tbody></table>";
        }else{
          echo "Geen gegevens gevonden<br><br>";
        }
        ?>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>


  <script type="text/javascript">
  function downloadCSV(csv, filename) {
      var csvFile;
      var downloadLink;

      // CSV file
      csvFile = new Blob([csv], {type: "text/csv"});

      // Download link
      downloadLink = document.createElement("a");

      // File name
      downloadLink.download = filename;

      // Create a link to the file
      downloadLink.href = window.URL.createObjectURL(csvFile);

      // Hide download link
      downloadLink.style.display = "none";

      // Add the link to DOM
      document.body.appendChild(downloadLink);

      // Click download link
      downloadLink.click();
  }

  function exportTableToCSV(filename) {
      var csv = [];
      var rows = document.querySelectorAll("table tr");

      for (var i = 0; i < rows.length; i++) {
          var row = [], cols = rows[i].querySelectorAll("td, th");

          for (var j = 0; j < cols.length; j++)
              row.push(cols[j].innerText);

          csv.push(row.join(","));
      }

      // Download CSV file
      downloadCSV(csv.join("\n"), filename);
  }
  </script>
  </body>
</html>

<style media="screen">
  #filter{
    border:1px solid #000;
  }

  #form{
    background: rgba(255,255,255,0.8);
  }

</style>

<?php
}else{
  echo "<script>location.href='index.php';</script>";
}
?>
