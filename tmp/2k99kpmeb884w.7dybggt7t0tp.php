<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $Title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
  <link rel="stylesheet" href="<?= $BASE ?>/css/style.css">
  </head>
<body>
    
    <?php echo $this->render($navbar,NULL,get_defined_vars(),0); ?>
    <?php echo $this->render($pageData,NULL,get_defined_vars(),0); ?>
    
</body>