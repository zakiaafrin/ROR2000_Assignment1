<?php
// Class Assignment 1 - 
// Create a PHP page that receives a comma separated list of elements via the URL (I.E.: localhost/page.php?e=hello,world,how,are,you) 
// and using the PHP function explode() convert them to an array, 
// then go through the array using a foreach loop and echo the contents on a HTML list.
$variable = $_GET["e"];
$arr = explode(",",$variable);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ROR2000 Class Assignment - Day1</title>
</head>
<style>
    .head {color:#9e09b8; font-size:28px; text-shadow: 2px 2px 8px #FF0000;}
    .list{color:#9e09b8; font-size:25px;}
</style>
<body>
    
    <div><h1>Class Assignment ROR2000 : Day-1 </h1></div><br/>
    <div class="head"><?php echo "Variable from URL : ";?></div><br/>
    <div class="list"><?php echo  $variable;?></div><br/><br/><br/>
    <div class="head">List Value From The URL</div>
    <div class="list">
        <?php
        echo "<ul>";
        foreach($arr as $item){
            echo "<li>" . $item . "</li>";
        }
        echo "</ul>";
        ?>
    </div>

</body>
</html>