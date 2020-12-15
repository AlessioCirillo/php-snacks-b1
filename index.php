<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // variabili get
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    ?>

    <h2>Verifica lunghezza del nome > di 3</h2>
    <p>
        <?php
        // verifica lunghezza name
            if(strlen($name) > 3 ){
                echo 'Accesso riuscito';
            } else{
                echo 'Accesso negato';
            }
        ?>
    </p>

    <h2>Verifica che email contenga '@' e '.'</h2>
    <p>
        <?php  
        // verifica @ e . in email
            if(strpos( $email, '@') === flase || strpos( $email, '.') === false){
                echo 'Accesso negato';
            } else{
                echo 'Accesso riuscito';
            }
        ?>
    </p>
    
    <h2>Verifica che age sia un numero</h2>
    <p>
        <?php  
        // verifica numero
            if(is_numeric($age) === true){
                echo 'Accesso riuscito';
            } else{
                echo 'Accesso negato';
            }
        ?>
    </p>
    
    <h2>Verifiche in un unico ciclo</h2>
    <p>
        <?php  
            if(strlen($name) < 3 ){
                echo 'Accesso negato';
            } else if(strpos( $email, '@') === flase || strpos( $email, '.') === false){
                echo 'Accesso negato';
            } else if(is_numeric($age) === false){
                echo 'Accesso negato';
            } else{
                echo 'Accesso riuscito';
            }
        ?>
    </p>
</body>
</html>