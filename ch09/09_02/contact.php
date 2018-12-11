<?php
$errors = [];
$missing = [];
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Conditional error messages</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Contact Us</h1>
<?php if ($errors || $missing) : ?>
<p class="warning">Please fix the items(s) indicated</p>
<?php endif; ?>
<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
  <p>
    <label for="name">Name:</label>
    <?php if ($missing && in_array('name', $missing)) : ?>
    <span class="warning">Please enter your name</span>
<?php endif; ?>
    <input type="text" name="name" id="name">
  </p>
  <p>
    <label for="email">Email:</label>
    <?php if ($missing && in_array('name', $missing)) : ?>
    <span class="warning">Please enter your email</span>
<?php endif; ?>
    <input type="email" name="email" id="email">
  </p>
  <p>
    <label for="comments">Comments:</label>
    <?php if ($missing && in_array('name', $missing)) : ?>
    <span class="warning">Please enter your comments</span>
<?php endif; ?>
    <textarea name="comments" id="comments"></textarea>
  </p>
  <p>
    <input type="submit" name="send" id="send" value="Send Comments">
  </p>
</form>
</body>
</html>