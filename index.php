<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>exemple AJAX</title>
  <link rel="stylesheet" href="css/styles.css" />
  <script src="js/common.js" type="text/javascript"></script>
  <script src="js/script.js" type="text/javascript"></script>
</head>
<body>
  <div id="page">
    <div id="scr_login">
      <table border="0">
        <tr><td>Mail</td><td><input type="text" id="inp_login"></td></tr>
        <tr><td>Password</td><td><input type="password" id="inp_passwd"></td></tr>
        <tr><td></td><td><button type="button" id="inp_enter">Enter</button></td></tr>
      </table>
      <div id="div_error"></div>
    </div>
    <div id="scr_accueil">
        Je suis l'accueil
        <div><button id="inp_logout">Log Out</button></div>
    </div>
  </div>
</body>
</html>