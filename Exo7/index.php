<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
  <meta charset='utf-8'>
  <title>Pt7 - Exercice 7</title>
</head>
<body>
  <form class='' action='index.php' method='post'>
    <p>Civilité :</p>
    <select name='civilite'>
      <option value='M.'>M.</option>
      <option value='Mme'>Mme</option>
      <option value=''>Autre</option>
    </select>
      <p>Nom :</p>
      <input type='text' name='lastname' />
      <p>Prénom</p>
      <input type='text' name='firstname' />
      <input type='submit' value='Valider'/>
    </form>
    <form action='index.php' method='post' enctype='multipart/form-data'>
    <p>Formulaire d'envoi de fichier :</p>
    <input type='file' name='fileName' /><br>
<input type='submit' value='Envoyer le fichier' />
</form>
    <p> Bonjour <?php echo $_POST['civilite']; ?> <?php echo $_POST['lastname']; ?> <?php echo $_POST['firstname']; ?> ! </p>

  </body>
  </html>
