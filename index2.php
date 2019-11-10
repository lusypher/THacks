<!DOCTYPE php>
<html lang="en">

<head>
    <title>Sample Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
    <link rel="stylesheet" href="app.css">
</head>
<body>
<?php
    $command = escapeshellcmd('THacks/main.py');
    $output = shell_exec($command);
    echo $output;
?>

<style>
  .droparea {
      width: 200px;
      height: 200px;
      border-style: solid;
      border-width: 3px;
      border-color: red;
      float: left;
      line-height: 200px;
      text-align: center;
  }
</style>
<div class="container">
    <div class="droparea">Drop Here</div>
    <div class="tablearea" id="tablearea"></div>
</div>
<script src="app2.js">
</script>
</body>
</html>