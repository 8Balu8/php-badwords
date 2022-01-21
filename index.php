<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $my_var= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sed a necessitatibus odit aperiam ab delectus corrupti fugit, accusantium consectetur fugiat dolor! Nam qui in ullam, iste velit dolore reiciendis."
    ;
    ?>

    <p>
        <?php
         echo $my_var
         ?>
    </p>
    <p>
        <?php
        $my_var_length = strlen($my_var);
        echo 'Length: ' . $my_var_length;
        ?>
    </p>
    <p>
        <?php
        $my_var_censored = str_replace($_GET['word'], '***', $my_var);
        echo $my_var_censored;
        ?>
    </p>
    <p>
        <?php
        $my_var_censored_length = strlen($my_var_censored);
        echo 'Length: ' . $my_var_censored_length;
        ?>
    </p>
</body>
</html>