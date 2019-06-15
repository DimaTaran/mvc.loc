<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru-RU">
<head profile="http://gmpg.org/xfn/11">
	<title>Test PHP</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/style.css">
           <meta charset="UTF-8" />

</head>
<body>
	<nav class="navbar navbar-default">
      <div class="container">
          <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

     <div class="row">
<!--         --><?php //Messages::display(); ?>
<!--         --><?php //var_dump($view, $viewmodel); die;?>
     	<?php require($view); ?>
<!--         --><?php //require'views/shares/index.php'; ?>

     </div>

    </div><!-- /.container -->
</body>
</html>