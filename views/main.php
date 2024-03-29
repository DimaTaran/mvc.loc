<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru-RU">
<head profile="http://gmpg.org/xfn/11">
	<title>Test PHP</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/style.css">
           <meta charset="UTF-8" />
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js' ></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script src='https://code.jquery.com/jquery-3.4.1.js'
            integrity='sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU='
            crossorigin='anonymous'></script>
    <script type='text/javascript'>
        $(function(){
            $('#fst').on('change', function(){
                // AJAX-запрос
                $.ajax({
                    url: 'index.php' + $('#fst').val()
                })
                    .done(function(data){
                        $('#snd').html(data);
                        $('#snd').removeClass('select-visible');
                        $('#snd').css("select-visible", "visible");
                        // $('#snd').prop('disabled', false);

                    });
            });
        });
    </script>
<!--    <link href="docsupport/style.css" rel="stylesheet" />-->
    <link href="/vendor/harvesthq/chosen/chosen.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.js"></script>
    <script src="/vendor/harvesthq/chosen/chosen.jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.chosen-select').chosen();

            jQuery.validator.setDefaults({
                debug: true,
                success: "valid"
            });
            $( "#adduser" ).validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    name: {
                        required: true,
                    }
                }
            });

        });
    </script>


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