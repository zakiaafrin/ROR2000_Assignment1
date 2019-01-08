<?php
$url = "localhost/page.php?e=hello,world,how,are,you";
$values = parse_url($url);
parse_str($values['query'], $query);
$arr = (explode(',',$query['e']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class Assignment ROR2000(Day-1)</title>
</head>
<style>
    .head {color:#9e09b8; font-size:28px; text-shadow: 2px 2px 8px #FF0000;}
    .list{color:#9e09b8; font-size:25px;}
</style>
<body>
    <div><h1>Class Assignment ROR2000 : Day-1 </h1></div>
    <div class="head">List Value From The URL</div>
    <div class="list">
        <?php
        echo "<ul>";
            foreach ($arr as $item) {
                echo "<li>$item</li>";
            }
        echo "</ul>";
        ?>
    </div>
</body>
</html>