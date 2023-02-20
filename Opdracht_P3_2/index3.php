<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <header><h1>Boekings formulier</h1></header>
    <hr />
    <main>
        <?php
            session_start();
        ?>
      <form method = "POST" action="index2.php">
        <label for="fname">Voornaam : </label> <br />
        <input
          type="text"
          id="fname"
          name="name"
          autofocus
          autocomplete="on"
          pattern="[A-Za-z]{0,100}"
          value= "<?php echo $_SESSION["name"]; ?>"
        />
        <br />
        <br />
        <label for="sname">Achternaam : </label> <br />
        <input type="text" id="sname" name="sname" value="<?php echo $_SESSION["sname"]; ?>"/> 
        
        <br />
        <br />
        <label> Geslacht </label> <br>
        <input type="radio" id="SexM" name="man" value="<?php echo $_SESSION["man"]; ?>">
        <label for= "man">Man </label>
        <input type="radio" id="SexW" name="woman" value="<?php echo $_SESSION["woman"]; ?>">
        <label for= "woman">Woman </label> 
        <br />
        <br />
        <label for="Straat">Straat en huisnummer : </label> <br />
        <input type="text" id="street" name="straat" placeholder="Sportlaan" value="<?php echo $_SESSION["straat"]; ?>"/>
        <input type="number" id="hNum" name="hnum" placeholder="12" value="<?php echo $_SESSION["hnum"]; ?>">
        <br />
        <br />
        <label for="country">Selecteer een eindbestemming : </label>
        <select id="Spanje" id="italie" id="Oekraine" name="country" value="<?php echo $_SESSION["country"]; ?>">
          <option value="Spanje">Spanje</option>
          <option value="Italie">Italie</option>
          <option value="Oekraine">Oekraine</option>
        </select>
        <br />
        <br />
        <label for="email"> E-Mail : </label> <br />
        <input type="email" id="email" name="email" value="<?php echo $_SESSION["email"]; ?>"/> <br />
        <label for="password">Wachtwoord : </label> <br />
        <input type="password" id="pwd" name="pwd" value="<?php echo $_SESSION["email"]; ?>"/> <br />
        <br/> <br>
        <input type="submit" value="verzend" name="send" /><br />
      </form>

    </main>
    <footer></footer>
  </body>
</html>