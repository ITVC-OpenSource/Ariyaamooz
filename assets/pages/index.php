<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>آریاآموز</title>
    <link rel="icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/login.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1" >
  </head>
  <body>
    <div id="login">
    <?php
      session_start();
      include('assets/php/config.php');
      if (isset($_POST['login'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
          $query->bindParam("username", $username, PDO::PARAM_STR);
          $query->execute();
          $result = $query->fetch(PDO::FETCH_ASSOC);
          if (!$result) {
              echo '<p class="error">نام کاربری نادرست است</p>';
          } else {
              if ( $password == $result["password"]) {
                  $_SESSION["user"] = $result["email"];
                  echo header("location: index.php?room=" . $_GET['room'] . "");
              } else {
                  echo '<p class="error">رمزعبور نادرست است</p>';
              }
          }
      }
    ?>
    <center>
    <form method="post" action="" name="signin-form">
    <img src="assets/img/favicon.ico" width="50px" height="50px"style="background-color: #FFF;padding: 5;  border-radius: 50px;"/><br>
    <label>آریاآموز - ورود</label><br>
    <input class="uin" id="username" type="text" name="username" width="200px" required placeholder="نام کاربری" autocomplete="off" />
    <input class="pin" id="password" type="password" name="password" width="200px" required placeholder="رمزعبور" autocomplete="off" /><br>
    <button type="submit" name="login" id="login">ورود</button>
    </form>
    </div>
    <label id="tradetext" class="skymeet">©Skymeet™</label>
    </center>
  </body>
  <script>
  document.getElementById('tradetext').addEventListener("click", navfun);
  function navfun() {
    var url = "https://skymeet.amysoft.ir";
    window.open(url)
  }
  if (location.protocol == "http:"){
  //    location.protocol = "https:"
  }
  </script>
</html>
