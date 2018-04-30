<?php

function isBitten() {
    $random = rand(0, 1);
    if ($random === 0){
        return 'Lion bit your finger!';
    } else {
        return 'Lion did not bite your finger!';
    }
    return $random;
}

$result = isBitten();

// var_dump(isBitten());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <?php 
    $output = isBitten();
    echo $output;
    ?>
    </div>
</body>
</html>

<?php 
//      ==========
//   ====== #3 ======
// =====================
class User {
    private $first;
    private $last;

    public function getAttributes($first, 
    $last){
        if ($first && $last){
            echo ('Hello '.$first.' '.$last);
        } else {
            alert('Please enter your first and last name.');
        }

    }
}
?>
