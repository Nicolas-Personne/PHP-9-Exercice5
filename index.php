<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title></title>
</head>
<body>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="jumbotron col-4">
<?php
$dateTime1 = date('d-m-Y');
$dateTime2 = date('16-05-2016');
$days = (strtotime($dateTime1) - strtotime($dateTime2));
echo round($days/86400);
 ?>
      </div>
    </div>
  </div>
  <a href="http://PHP/"><button type="button" class="btn btn-danger" name="button">Accueil</button></a>
</body>
</html>
