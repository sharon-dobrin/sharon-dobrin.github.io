<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dein Lernplan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="icon" type="image/png" href="(logo.png">
    <script type="text/javascript">

      function togglemenu(){
        document.getElementById('sidebar').classList.toggle('active');
      }
    </script>
  </head>
  <body>
    <div id="sidebar" onclick="togglemenu()">
      <div class="toggle-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="order.html">Lernplan bestellen</a></li>
        <li><a href="faq.html">FAQ</a></li>
      </ul>
    </div>
    <div class="order">
      <div id="order-titel">

    <h1>Bitte teile folgende Angaben mit uns</h1>
    </div>
    <?php
    if(isset($_POST["submit"])){
      mail("sharon.dobrin@gmail.com", "Order", 'Vorname:'.$_POST["vorname"].'Nachname:'.$_POST["nachname"].'Email:'.$_POST["email"].'Tel.:'.$_POST["telnum"].'Bundesland:'.$_POST["bundesland"].'Jahrgang:'.$_POST["jahrgang"].'Nächster Abschluss'.$_POST["abschluss"].'1. Leistungskurs'.$_POST["lk1"].'2. Leistungskurs'.$_POST["lk2"].'3. Prüfungsfach'.$_POST["pf3"].'4. Prüfungsfach'.$_POST["pf4"].'5. Prüfungskomponente'.$_POST["pk5"].'Aktivitäten'.$_POST["aktivitäten"].'Stundenplan'.$_POST["plan"]);
      mail($_POST["email"], "Bestellbestätigung", 'Vielen Dank für ihre Bestellung')
      ?>
      <h1 style="color: #8A084B;">Deine Bestellung wurde abgesendet!</h1>
      <?php
    }
    ?>

    <form action="order.php" method="post">
    <div id="order">
      <input type="text" name="vorname" placeholder="Vorname" required="required">
      <input type="text" name="nachname" placeholder="Nachname" required="required">
      <br>
      <input type="email" name="email" placeholder="Email-Adresse" required="required">
      <input type="tel" name="telnum" placeholder="Telefon/Handy">

      <br>
      <div class="drop">
      <form action="select.html">
        <select required name="bundesland" size="1" required="required">
          <option value="" disabled selected>Bundesland</option>
         <option value="bawü">Baden-Württenmberg</option>
         <option value="bay">Bayern</option>
         <option value="ber">Berlin</option>
         <option value="bran">Brandenburg</option>
         <option value="brem">Bremen</option>
         <option value="ham">Hamburg</option>
         <option value="hess">Hessen</option>
         <option value="meckpom">Mecklenburg-Vorpommern</option>
         <option value="niesa">Niedersachsen</option>
         <option value="nrw">Nordrhein-Westfalen</option>
         <option value="reipf">Rheinland-Pfalz</option>
         <option value="saa">Saarland</option>
         <option value="sach">Sachsen</option>
         <option value="sachan">Sachsen-Anhalt</option>
         <option value="schlehol">Schleswig-Holstein</option>
         <option value="tür">Thüringen</option>
        </select>
      </form>
      <!--
      <form action="select.html">
        <select name="schulform" size="1">
          <option>Schulform</option>
         <option>Gesamtschule (mit integrierter Oberstufe)</option>
         <option>Hauptschule</option>
         <option>Realschule</option>
         <option>Gymnasium</option>
        </select>
      </form>
      <br>
    -->
      <form action="select.html">
        <select required name="jahrgang" size="1" required="required">
         <option value="" disabled selected>Jahrgang</option>
         <option value="7">7.</option>
         <option value="8">8.</option>
         <option value="9">9.</option>
         <option value="10">10.</option>
         <option value="11">11.</option>
         <option value="12">12.</option>
         <option value="13">13.</option>
        </select>
      </form>
    <br>
    <form action="select.html">
      <select required name="abschluss" size="1">
       <option value="" disabled selected>Nächster Abschluss</option>
       <option value="bbr">Hauptschulabschluss/BBR</option>
       <option value="ebbr">Erweiterter Hauptschulabschluss/eBBR</option>
       <option value="msa">Mittlerer Schulabschluss/MSA</option>
       <option value="fachabi">Fachhochschulreife/Fach Abi</option>
       <option value="abi">Hochschulreife/Abi</option>
      </select>
    </form>
  </div>
      <br>
      <h3>Falls du grade Abitur machst nenn uns bitte deine Prüfungsfächer</h3>
      <input type="text" name="lk1" placeholder="1. Leistungskurs">
      <input type="text" name="lk2" placeholder="2. Leistungskurs">
      <br>
      <input type="text" name="pf3" placeholder="3. Prüfungsfach">
      <input type="text" name="pf4" placeholder="4. Prüfungsfach">
      <input type="text" name="pk5" placeholder="5. Prüfungskomponente">
      <br>

    <script>
    function getFile() {
      document.getElementById("upfile").click();
    }

    function sub(obj) {
      var file = obj.value;
      var fileName = file.split("\\");
      document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];

      event.preventDefault();
    }
  </script>
  <br>


  <form action="#type your action here" method="POST" enctype="multipart/form-data" name="myForm">
    <div id="yourBtn" onclick="getFile()">Lade ein bild deines Stundenplans hoch</div>
    <!-- this is your file input tag, so i hide it!-->
    <!-- i used the onchange event to fire the form submission-->
    <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile"  name="plan" type="file" value="upload" onchange="sub(this)" /></div>
    <!-- here you can have file submit button or you can write a simple script to upload the file automatically-->
    <!-- <input type="submit" value='submit' > -->
  </form>


      <br>
      <h3></h3>
      <textarea name="aktivitäten" rows="3" placeholder="Nenne uns bitte mögliche Aktivitäten oder ähnliches samt Zeiten die in deinem Plan berücksichtigt werden sollten"></textarea>

      <br>
      <input id="submit" type="submit" name="submit" value="Bestellen">
    </div>
    </form>
    </div>

    <div id="footer">
      <ul>
        <li><a href="impressum.html">Impressum</a></li>
        <li><a href="datenschutz.html">Datenschutz</a></li>
        <li><a href="agb.html">AGB's</a></li>
      </ul>
    </div>
    <a id="up-button" class="internal-link" href="#order-titel"></a>

  </body>
</html>
