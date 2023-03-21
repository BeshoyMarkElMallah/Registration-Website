<?php
include 'config.php';

$count = $mysqli->query("SELECT COUNT(*) FROM reg")->fetch_row()[0];
$num = 85 - $count;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>ECSSV</title>
</head>

<body>
  <audio autoplay>
    <source src="assets/music.mp3" type="audio/mpeg">
  </audio>
  <video src="assets/back.mp4" autoplay muted loop></video>
  <div class="content">
    <div class="logo"></div>

    <div class="chairs">
      <div class="num">
        <?php
        echo $num;
        ?>
        <p>
          Seats Left
        </p>
      </div>
    </div>
    <div class="suits"></div>
    <?php
    if ($count >= 85) {

    ?>
      <div class="noreg"></div>
    <?php
    } else {
    ?>
      <a href="form.php" class="button"></a>

    <?php
    } ?>
    <div class="aast"></div>
    <div class="gdsc"></div>
  </div>
</body>

</html>