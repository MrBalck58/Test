<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
      <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!-- <![endif]--> -->
   </head>
  <body>
        <?php
            require_once 'connect_BD.php';
//        printf ("\n", getDataFromBaseForDropmenu($nameVal));
        getDataFromBaseForDropmenu();
        ?>

       <!-- <script type="text/javascript" >
            var a = <?php /*echo getDataFromBaseForDropmenu();*/?>;
                document.write('Значение PHP-переменной: ' + a);
        </script>-->
        <div id="menu"></div>

        <div class="panel">
                    <div id="parse"></div>
                    
            <div class="select"></div>
            <div class="form-inline">
                <input type="" class="form-control" placeholder="Значение">
                <button type="submit" class="btn btn-default">Удалить значения</button>
            </div>
        </div>



    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"  ></script>
  </body>
</html>