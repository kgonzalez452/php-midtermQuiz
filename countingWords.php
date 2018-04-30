<?php
//      ==========
//   ====== #2 ======
// =====================
function countWords($str){
    $str = '#@This%#is%#a#*string)#';
    print_r(str_word_count($str, 1));

}
echo countWords($str);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Counting Words</title>
</head>
<body>

<form 
method="get" 
action="<?php echo $_SERVER['PHP_SELF']; ?>">

   <input 
   type="text" 
   name="name">

   <br>
   
   <input 
   type="submitform" 
   name="submitform" 
   value="Submit">

   <br>

</form>
       
</body>
</html>