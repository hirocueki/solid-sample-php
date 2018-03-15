<?php
namespace SampleProject;

require_once __DIR__.'/../src/bootstrap.php';
$app = new App();
// echo $app->name();

?>
<!DOCTYPE html>

<title>Sample</title>

<p><?= htmlspecialchars($app->name(), ENT_QUOTES) ?></p>