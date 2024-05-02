<?php function include_template($template_name, $data = [])
{
  // Adjusting the path to make sure it's correctly pointing to the template file
  $template_file = $template_name . '.php';
  if (!file_exists($template_file)) {
    throw new Exception("Template file '$template_name' not found.");
  }

  extract($data);

  include $template_file;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="output.css" />
</head>

<body>

  <?php
  include_template('header');
  ?>

  <main class="mt-20">
    <?php
    include_template('section1');
    include_template('section2');
    include_template('section3');
    include_template('section4');
    include_template('section5');
    include_template('section6');
    ?>

  </main>
</body>

</html>