<?php
  $title = "Introduction to PHP";
  $author = "John Doe";
  $body = "PHP (Hypertext Preprocessor) is a widely used server-side scripting
        language that has revolutionized web development. With its simplicity,
        flexibility, and vast community support, PHP has become the backbone of
        countless dynamic websites and web applications.";

  $pageTitle = 'Brad\'s'.$title;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle; ?></title>
  </head>
  <body>
    <main>
      <h1><?php echo $title ?></h1>
      <p>By: <?php echo $author ?></p>
      <p>
        <?php echo $body ?>
      </p>
    </main>
  </body>
</html>