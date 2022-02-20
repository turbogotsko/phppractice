<!DOCTYPE html>
<html>
  <head>
    <title> Practice</title>

  </head>
  <body>
    <form action="index.php" method="POST">
      <input type="text" name="num">
      <input type="submit">
    </form>

    <?php

    $test = $_POST["num"];
    echo var_dump($test);
    
    $user = ['name' => 'john', 'age' => 30];
	
	if (isset($user['name'])) {
		$name = $user['name'];
	} else
    $test = null; 
		$name = 'unknown';
    $name = $test ?? 'unknown';
    echo var_dump($name);
  ?>

  </body>
</html>