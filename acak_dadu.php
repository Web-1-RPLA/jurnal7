<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Acak Dadu</h3>

<?php
    $dadu = rand (1, 6);
?>
<img src="img/<?php echo $dadu; ?>.png" width="50"height="50">

<br><button onclick="window.location.reload()">Refresh</button>
</body>
</html>