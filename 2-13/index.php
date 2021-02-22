<?php
    // index.php
$x = 1.3;
    echo ceil($x);
    echo "<br />";
$x = 1.3;
    echo floor($x);
    echo "<br />";
$x = 1.3;
    echo round($x);
    echo "<br />";
    
echo pi();
        
    function circleArea($r) {
            $circle_area = $r * $r * pi();
            echo $circle_area;
        }
        circleArea(2);
    echo "<br />";
        
    echo mt_rand(1, 50);
    echo "<br />";
$str = "moroda";
    echo strlen($str);
    echo strpos($str, "r");
    echo substr($str, -1, 1);
    echo str_replace("m", "M", $str);
    echo "<br />";
    
    $str = "ab cd ef";
    echo str_replace(" ", "", $str);
    echo "<br />";
    
$str = "もろだ";
        
    echo strlen($str);
    
    echo mb_strlen($str);
    echo "<br />";
$name = "山田さん";
$limit_number = 20;
    echo $name."の残り時間はあと".$limit_number."です";
    printf("%sの残り時間はあと%dです", $name, $limit_number);
    echo "<br />";
$limit_hour = 120;
$limit_minute = 10;
        printf("残り%03d時間%02d分", $limit_hour, $limit_minute);
        
$limit_hour = 7;
$limit_minute = 3;
        printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo "<br />";
$limit_hour = 10;
$limit_minute = 6;
        printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
        
    
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
        echo $limit_time;
