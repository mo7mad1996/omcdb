<?php	require_once "incloude/database.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database OMC</title>

    <!-- bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" />


    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <?php 
      include "incloude/document/header.php";
      include "incloude/addDataaa.php";
    ?>

    <form method="post"><h2>بحث بالتاريخ</h2><input type ="date" name="filter"/><input value="بحث" type="submit"/></form>

    <table class="table">
      <form method="post">
        <?php include "incloude/document/table.php";?>
      </form>
    </table>

    <script src="js/app.js"></script>
  </body>
</html>