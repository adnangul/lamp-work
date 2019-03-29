<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to DevOps on AWS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php   
        require 'Welcome.php' ;
        $welcome = new Welcome() ;
    ?>
    <h1><?php echo $welcome->greet() ?></h1>
</body>
</html>