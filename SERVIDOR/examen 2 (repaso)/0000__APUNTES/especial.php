<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- Especial chars -->
  <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"></form>
</body>

</html>