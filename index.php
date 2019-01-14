<? php require_once('admin/scripts/read.php'); ?>
<!doctype html>
<html>
<head>
  <meta charset='utf-8'>
  <title>movie review</title>
</head>
<body>
  <?php include('templates/header.html') ?>
  <head>
    <nav>
      <uL>
        <li> <a herf="#">Action</a> </li>
        <li> <a herf="#">Family</a> </li>
        <li> <a herf="#">Comedy</a> </li>


</nav>
</header>

  <h1> this movie site <h1>
    <ul>
    <?php $result - getAll('tbl_mvies');
    while ($row - $result-> fetch(POD::FETCH_ASSOC)){
    echo '<li>'.$row['movies_title'];-<\li>;
    }
    ?>
  </ul>
</php include ('templates/footer.html'):?>
  </body>
  </html>
