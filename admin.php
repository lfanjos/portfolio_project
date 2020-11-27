<?php require_once('./config.php') ?>
<?php  include(ROOT_PATH .  '/includes/upload.php');
if (!isset($_SESSION['user']['username'])){
  header("location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link
      rel="stylesheet"
      type="text/css"
      href="bootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/linea.css" />
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  
    <title>Teste db</title>
  </head>
  <body class="contact-form">
    <form  action="admin.php" method="post" enctype="multipart/form-data">

      
            <label>Título do Projeto:</label>
            <input type="text" name="title" />
            <label>Tags do Projeto (lembre de usar o padrão ["tag", "tag"]):</label>
            <input type="text" name="tags" />




            <label>Descrição do Projeto:</label>
            <input type="text" name="description" />
      <label>Escolha a imagem da thumb do Projeto:</label>
      <input type="file" name="image" />
      <label>Escolha a imagem principal do Projeto:</label>
      <input type="file" name="image2" />
      <input type="submit" name="submit" value="Upload" />
    </form>
  </body>
</html>
